<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Category;
use App\Models\Post;
use App\Repositories\Post\IPostRepository;
use App\Transformers\Post\ListAdminPostTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $categories = Category::get();
        $post = Post::with('categories')->find($id);
        $selectedCategories = $post->categories->pluck('id')->toArray();
        return view('admin.post.edit')->with(
            [
                'post' => $post,
                'selectedCategories' => $selectedCategories,
                'categories'=>$categories
            ]
        );
    }


    public function update(PostUpdateRequest $request, $id)
    {
        $data = $request->all();
        $idCategories = $data['categories'];
        if(array_key_exists('newimage',$data)){
            $file = $data['newimage'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $post = Post::find($id);
        if($image){
            $post->update([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'status' => $data['status'],
                'excerpt' => $data['expert'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'image' => $image,
                'body' => $data['content'],
            ]);
        }else{
            $post->update([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'status' => $data['status'],
                'excerpt' => $data['expert'],
                'body' => $data['content'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
            ]);
        }
        $post->categories()->sync($idCategories);
        return \redirect('/admin/posts');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->categories()->sync([]);
        $post->delete();
        return \redirect('/admin/posts');
    }
}
