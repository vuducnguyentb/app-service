<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductCategory\ProductCategoryStoreRequest;
use App\Http\Requests\ProductCategory\ProductCategoryUpdateRequest;
use App\Models\ProductCategory;
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
            'data' => $categories
        ]);
    }


    public function create()
    {
        return view('admin.product_category.add');
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(ProductCategoryStoreRequest $request)
    {
        $data = $request->all();
        $this->categoryRepository->create(
            [
                "code" => $data['code'],
                "name" => $data['name'],
                "slug" => $data['slug'],
                "status" => $data['status'],
                "type" => $data['type'],
                "meta_description" => $data['description'],
                "meta_keywords" => $data['keywords'],
            ]
        );
        return \redirect('/admin/product-categories');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.product_category.edit')->with(
            [
                'category' => $category
            ]
        );
    }


    public function update(ProductCategoryUpdateRequest $request, $id)
    {
        $data = $request->all();
        $category = ProductCategory::find($id);
        $this->categoryRepository->update($id,
            [
                "code" => $data['code'],
                "name" => $data['name'],
                "slug" => $data['slug'],
                "status" => $data['status'],
                "type" => $data['type'],
                "meta_description" => $data['description'],
                "meta_keywords" => $data['keywords'],
            ]
        );
        return \redirect('/admin/product-categories');
    }

    public function destroy($id)
    {
        $cate = ProductCategory::find($id);
        $cate->delete();
        return \redirect('/admin/product-categories');
    }
}
