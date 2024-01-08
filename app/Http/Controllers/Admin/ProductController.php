<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Enums\BaseEnum;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductStoreRequest;
use App\Http\Requests\Product\ProductUpdateRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\Product\IProductRepository;
use App\Transformers\Product\ListAdminProductTransformer;
use Illuminate\Http\Request;

class ProductController extends BaseWebController
{
    public $productRepository;
    public $upload;

    public function __construct(
        IProductRepository $productRepository,
        Upload $upload
    )
    {
        $this->productRepository = $productRepository;
        $this->upload = $upload;
    }

    public function index()
    {
        $entries = $this->productRepository->model()->with('productCategory')->get();
        $transformer = new ListAdminProductTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($entries, $this->transformer);
        return view('admin.product.index')->with([
            'data' => $data['data']
        ]);
    }

    public function create()
    {
        $categories = ProductCategory::where('type',BaseEnum::TypeProduct)->get();
        return view('admin.product.add')->with([
            'categories'=>$categories
        ]);
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(ProductStoreRequest $request)
    {
        $data = $request->all();
        if(array_key_exists('files',$data)){
            $file = $data['files'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $post = Product::create([
            'name' => $data['name'],
            'code' => $data['code'],
            'body' => $data['content'],
            'image' => $image,
            'slug' => $data['slug'],
            'meta_description' => $data['description'],
            'meta_keywords' => $data['keywords'],
            'status' => $data['status'],
            'quantity' => $data['quantity'],
            'freeship' => $data['freeship'],
            'is_hot' => $data['is_hot'],
            'product_category_id' => $data['category'],
//            'type' => $data['type']
        ]);
//        $post->categories()->attach($idCategories);
        return \redirect('/admin/products');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = ProductCategory::get();
        $product = Product::with('productCategory')->find($id);
        $selectedCategory = $product->productCategory->id;
        return view('admin.product.edit')->with(
            [
                'product' => $product,
                'selectedCategory' => $selectedCategory,
                'categories'=>$categories
            ]
        );
    }


    public function update(ProductUpdateRequest $request, $id)
    {
        $data = $request->all();
        if(array_key_exists('newimage',$data)){
            $file = $data['newimage'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $entry = Product::find($id);
        if($image){
            $entry->update([
                'name' => $data['name'],
                'code' => $data['code'],
                'body' => $data['content'],
                'image' => $image,
                'slug' => $data['slug'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'status' => $data['status'],
                'quantity' => $data['quantity'],
                'freeship' => $data['freeship'],
                'is_hot' => $data['is_hot'],
                'product_category_id' => $data['category'],
            ]);
        }else{
            $entry->update([
                'name' => $data['name'],
                'code' => $data['code'],
                'body' => $data['content'],
                'slug' => $data['slug'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'status' => $data['status'],
                'quantity' => $data['quantity'],
                'freeship' => $data['freeship'],
                'is_hot' => $data['is_hot'],
                'product_category_id' => $data['category'],
            ]);
        }

        return \redirect('/admin/products');
    }

    public function destroy($id)
    {
        $post = Product::find($id);
        $post->categories()->sync([]);
        $post->delete();
        return \redirect('/admin/posts');
    }
}
