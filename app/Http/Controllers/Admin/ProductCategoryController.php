<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Repositories\ProductCategory\IProductCategoryRepository;
use App\Transformers\ProductCategory\ListAdminProductCategoryTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends BaseWebController
{
    public $categoryRepository;

    public function __construct(IProductCategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->model()->get();
        $transformer = new ListAdminProductCategoryTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($categories, $this->transformer);
        return view('admin.product_category.index')->with([
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
        $data = $request->all();
        $this->categoryRepository->create($data);
        return \redirect('/admin/categories');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit')->with(
            [
                'category'=>$category
            ]
        );
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $this->categoryRepository->update($id,$data);
        return \redirect('/admin/categories');
    }

    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return \redirect('/admin/categories');
    }
}
