<?php


namespace App\Http\Controllers\Traits;


use App\Transformers\NoTransformer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use League\Fractal\TransformerAbstract;

trait ResultHandlerTrait
{
    protected $transformer;
    protected $isGroup;

    protected function setTransformer(TransformerAbstract $transformer, $isGroup = false)
    {
        $this->transformer = $transformer;
        $this->isGroup = $isGroup;
    }

    protected function getTransformer()
    {
        return $this->transformer;
    }

    /**
     * Summary of errorResponsePopup
     * @param array $errorMessage
     * @param mixed $code
     * @param array $appendData
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    protected function errorResponsePopup(array $errorMessages, $code = 422, array $appendData = [])
    {
        $data = array_merge([
            'code' => $code,
            'success' => false,
            "show_popup" => true,
            'messages' => $errorMessages
        ], $appendData);

        return response()->json($data, $code);
    }

    protected function successResponsePopup($data, $code = 200, array $messages = [])
    {
        $data = array_merge([
            "show_popup" => true,
            'code' => $code,
            'success' => true,
            'messages' => $messages
        ], $data);
        return response()->json($data, $code);
    }
    protected function successResponse($data, $code = 200)
    {
        $data = array_merge([
            'code' => $code,
            'success' => true
        ], $data);
        return response()->json($data, $code);
    }

    protected function errorResponse($errorMessage, $code = 422, $appendData = [])
    {
        $data = array_merge([
            'code' => $code,
            'success' => false,
            'message' => $errorMessage
        ], $appendData);

        return response()->json($data, $code);
    }

    protected function errorsResponse($errors, $code)
    {
        return response()->json([
            'code' => $code,
            'success' => false,
            'errors' => $errors
        ], $code);
    }

    protected function paginate(Collection $collection)
    {
        $rules = [
            'per_page' => 'integer|min:2|max:50',
        ];

        \Illuminate\Support\Facades\Validator::validate(request()->all(), $rules);

        $page = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 30;
        if (request()->has('per_page')) {
            $perPage = request()->per_page;
        }

        $currentPageCollection = $collection->slice(($page - 1) * $perPage, $perPage)->values();

        $paginatedCollection = new LengthAwarePaginator($currentPageCollection, $collection->count(), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        $paginatedCollection->appends(request()->all());

        return $paginatedCollection;
    }

    protected function transformData($data, TransformerAbstract $transformer)
    {
        $transformedData = fractal($data, $transformer);
        return $transformedData->toArray();
    }

    protected function cacheResponse($data)
    {
        $url = request()->url();
        $urlParameters = request()->query();
        ksort($urlParameters);
        $urlParametersString = http_build_query($urlParameters);
        $hash = md5("{$url}?{$urlParametersString}");
        $apiCacheSeconds = env('APP_API_CACHE_SECONDS', 60);
        $apiCacheMinutes = $apiCacheSeconds > 0 ? $apiCacheSeconds / 60 : 0;

        //Mới phải đổi CACHE_DRIVER từ array sang file thì mới work
        return Cache::remember($hash, $apiCacheMinutes, function () use ($data) {
            return $data;
        });
    }

    /** PUBLIC FUNCTIONS */

    public function responseCollection(Collection $collection, $code = 200, $appendData = [], $options = [])
    {

        if ($collection->isEmpty()) {
            $data = array_merge([
                'data' => $collection
            ], $appendData);
            return $this->successResponse($data, $code);
        }

        if (!isset($options['paginate']) || $options['paginate'] === true) {
            $collection = $this->paginate($collection);
        }

        if (!isset($options['transform']) || $options['transform'] === true) {
            $collection = $this->transformData($collection, $this->transformer);
        } else {
            $collection = $this->transformData($collection, new NoTransformer());
        }
        if (!isset($options['cache']) || $options['cache'] === true) {
            $collection = $this->cacheResponse($collection);
        }
        /* Merge appendData */
        $data = array_merge($collection, $appendData);
        if ($this->isGroup) {
            $groupArray = array();
            foreach ($data['data'] as $item) {
                $groupArray['data'][$item['department_name']]['id'] = $item['department_id'];
                $groupArray['data'][$item['department_name']]['name'] = Str::upper($item['department_name']);
                $groupArray['data'][$item['department_name']]['data'][] = $item;
            }
            $dataArray['data'] = array_values($groupArray['data']);
            $dataArray['portalRoles'] = $appendData['portalRoles'];
            $dataArray['permissionCodes'] = $appendData['permissionCodes'];
        }

        return $this->successResponse($dataArray ?? $data, $code);
    }

    public function responsePaginatedCollection(LengthAwarePaginator $paginatedCollection, $code = 200, $appendData = [], $options = [])
    {
        $collection = $paginatedCollection->items();
        if ($paginatedCollection->isEmpty()) {
            $data = array_merge([
                'data' => $paginatedCollection->items()
            ], $appendData);
            return $this->successResponse($data, $code);
        }

        /* Create new pagination to transform items */

        $newPaginatedCollection = new LengthAwarePaginator($collection, $paginatedCollection->total(), $paginatedCollection->perPage(), $paginatedCollection->currentPage(), [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        $newPaginatedCollection->appends(request()->all());

        if (!isset($options['transform']) || $options['transform'] === true) {
            $newPaginatedCollection = $this->transformData($newPaginatedCollection, $this->transformer);
        } else {
            $newPaginatedCollection = $this->transformData($newPaginatedCollection, new NoTransformer());
        }

        /* Caching */

        if (!isset($options['cache']) || $options['cache'] === true) {
            $newPaginatedCollection = $this->cacheResponse($newPaginatedCollection);
        }

        /* Merge appendData */
        $data = array_merge($newPaginatedCollection, $appendData);
        if ($this->isGroup) {
            $groupArray = array();
            foreach ($data['data'] as $item) {
                $groupArray['data'][$item['department_name']]['id'] = $item['department_id'];
                $groupArray['data'][$item['department_name']]['name'] = Str::upper($item['department_name']);
                $groupArray['data'][$item['department_name']]['data'][] = $item;
            }
            $dataArray['data'] = array_values($groupArray['data']);
            $dataArray['portalRoles'] = $appendData['portalRoles'];
            $dataArray['permissionCodes'] = $appendData['permissionCodes'];
            $dataArray['meta'] = $data['meta'];
            //            dd($meta,$paginatedCollection->toArray());
        }

        return $this->successResponse($dataArray ?? $data, $code);
    }

    public function responseOne(Model $entry, $code = 200, $options = [])
    {
        if (!isset($options['transform']) || $options['transform'] === true) {
            $entry = $this->transformData($entry, $this->transformer);
        } else {
            $entry = $this->transformData($entry, new NoTransformer());
        }
        if (array_key_exists('api_token', $options)) {
            $entry['data']['api_token'] = $options['api_token'];
        }
        if (array_key_exists('message', $options)) {
            $entry['message'] = $options['message'];
        }
        return $this->successResponse($entry, $code);
    }

    //    public function responseAll($data, $code = 200)
    //    {
    //        $data = $this->transformData($data);
    //
    //        return $this->successResponse($data, $code);
    //    }

    public function responseOneMessage(Model $entry, $code = 200, $options = [], $message)
    {
        if (!isset($options['transform']) || $options['transform'] === true) {
            $entry = $this->transformData($entry, $this->transformer);
        } else {
            $entry = $this->transformData($entry, new NoTransformer());
        }
        if (array_key_exists('api_token', $options)) {
            $entry['data']['api_token'] = $options['api_token'];
        }
        //        if ($message != null) {
        //            $entry = array_merge($entry,$message);
        //        }
        dd($entry);
        return $this->successResponse($entry, $code);
    }

    protected function successResponseWithView($view,$data, $code = 200)
    {
        return view($view)->with(
            [
                'data'=> $data
            ]
        );
    }
}
