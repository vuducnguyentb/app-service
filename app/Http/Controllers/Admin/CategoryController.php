<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\Category\ICategoryRepository;
use App\Transformers\Category\ListAdminCategoryTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
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
