<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Slider\SliderStoreRequest;
use App\Http\Requests\Slider\SliderUpdateRequest;
use App\Models\ListSlider;
use App\Models\Slider;
use App\Repositories\ListSlider\IListSliderRepository;
use App\Repositories\Slider\ISliderRepository;
use App\Transformers\ListSlider\ListAdminSliderTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends BaseWebController
{
    public $repository;
    public $sliderRepository;

    public function __construct(IListSliderRepository $repository, ISliderRepository $sliderRepository)
    {
        $this->repository = $repository;
        $this->sliderRepository = $sliderRepository;
    }

    public function index()
    {
        $entries = $this->repository->model()->get();
        $transformer = new ListAdminSliderTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($entries, $this->transformer);
        return view('admin.slider.index')->with([
            'data' => $entries
        ]);
    }


    public function create()
    {
        return view('admin.slider.add');
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(SliderStoreRequest $request)
    {
        $data = $request->all();
        $dataItems = array_values($data['items']);
        $listSlider = $this->repository->create(
            [
                "name" => $data['name'],
                "key" => $data['key'],
                "status" => $data['status'],
            ]
        );
        #thêm ảnh tiêu đề cho slider
        foreach ($dataItems as $key => $item) {
            if (array_key_exists('image', $item)) {
                $file = $item['image'];
                $dataImage = Upload::upload($file);
                $image = $dataImage['url'];
            } else {
                $image = null;
            }
            Slider::create([
                'title' => $item['title'],
                'description' => $item['content'],
                'image' => $image,
                'list_slider_id' => $listSlider->id,
                'link' => $item['link'],
            ]);
        }


        return \redirect('/admin/sliders');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $listSlider = ListSlider::with([
            'sliders',
        ])->find($id);
        $sliders = Slider::query()
            ->select('id', 'title', 'description', 'list_slider_id', 'image', 'link')
            ->where('list_slider_id', $id)
            ->get()
            ->toArray();
        return view('admin.slider.edit')->with(
            [
                'listSlider' => $listSlider,
                'sliders' => $sliders,
            ]
        );
    }


    public function update(SliderUpdateRequest $request, $id)
    {
        $data = $request->all();
        $dataItems = array_values($data['items']);
        DB::beginTransaction();
        try {
            $this->repository->update($id,
                [
                    "name" => $data['name'],
                    "key" => $data['key'],
                    "status" => $data['status'],
                ]
            );
            #cập nhật ảnh tiêu đề cho slider
            foreach ($dataItems as $key => $item) {
                if (array_key_exists('image', $item)) {
                    $file = $item['image'];
                    $dataImage = Upload::upload($file);
                    $image = $dataImage['url'];
                } else {
                    $image = null;
                }
                #nếu có id thì cập nhật ko thì thêm mới
                if ($item['id'] != null) {
                    if ($image) {
                        $this->sliderRepository->update(
                            $item['id'],
                            [
                                'title' => $item['title'],
                                'description' => $item['content'],
                                'image' => $image,
                                'list_slider_id' => $id,
                                'link' => $item['link'],
                            ]
                        );
                    } else {
                        $this->sliderRepository->update(
                            $item['id'],
                            [
                                'title' => $item['title'],
                                'description' => $item['content'],
                                'list_slider_id' => $id,
                                'link' => $item['link'],
                            ]
                        );
                    }
                }else{
                    $this->sliderRepository->create(
                        [
                            'title' => $item['title'],
                            'description' => $item['content'],
                            'image' => $image,
                            'list_slider_id' => $id,
                            'link' => $item['link'],
                        ]
                    );
                }
            }
            DB::commit();
            return \redirect('/admin/sliders');
        }catch (\Exception $e){
            DB::rollBack();
        }

    }

    public function destroy($id)
    {
        $cate = ProductCategory::find($id);
        $cate->delete();
        return \redirect('/admin/product-categories');
    }
}
