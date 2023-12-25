<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Base\BaseWebController;
use App\Repositories\Interfaces\Category\ICategoryRepository;
use App\Transformers\Category\ListAdminCategoryTransformer;
use Illuminate\Http\Request;

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
        //
    }


    public function store(Request $request)
    {
        //
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
