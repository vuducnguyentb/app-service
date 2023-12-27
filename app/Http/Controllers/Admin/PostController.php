<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Requests\Post\PostStoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Repositories\Post\IPostRepository;
use App\Transformers\Post\ListAdminPostTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Image;

class PostController extends BaseWebController
{
    public $postRepository;
    public $upload;

    public function __construct(
        IPostRepository $postRepository,
        Upload $upload
    )
    {
        $this->postRepository = $postRepository;
        $this->upload = $upload;
    }

    public function index()
    {
        $entries = $this->postRepository->model()->with('categories')->get();
        $transformer = new ListAdminPostTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($entries, $this->transformer);
        return view('admin.post.index')->with([
            'data' => $data['data']
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('admin.post.add')->with([
            'categories'=>$categories
        ]);
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(PostStoreRequest $request)
    {
        $data = $request->all();
        $idCategories = $data['categories'];
        if(array_key_exists('files',$data)){
            $file = $data['files'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $post = Post::create([
            'title' => $data['title'],
            'excerpt' => $data['expert'],
            'body' => $data['content'],
            'image' => $image,
            'slug' => $data['slug'],
            'meta_description' => $data['description'],
            'meta_keywords' => $data['keywords'],
            'status' => $data['status'],
//            'type' => $data['type']
        ]);
        $post->categories()->attach($idCategories);
        return \redirect('/admin/posts');
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
                'category' => $category
            ]
        );
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = $request->all();
        $category = Category::find($id);
        $category->update([
            'name' => $data['name'],
            'slug' => $data['slug'],
        ]);
        return \redirect('/admin/categories');
    }

    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return \redirect('/admin/categories');
    }
}
