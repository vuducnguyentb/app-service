<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Repositories\Interfaces\Category\ICategoryRepository;
use App\Transformers\Category\ListAdminCategoryTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends BaseWebController
{
    public $categoryRepository;

    public function __construct(ICategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->model()->get();
        $transformer = new ListAdminCategoryTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($categories, $this->transformer);
        return view('admin.category.index')->with([
            'data'=>$categories
        ]);
    }


    public function create()
    {
        return view('admin.category.add');
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            dd($request);
            return $this->successResponse($data, 200);
        } catch (\Exception $e) {
            dd($e);
            return $this->errorResponse($e->getMessage());
        }
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
