<?php

namespace App\Http\Controllers\Admin;

use App\Bizz\Upload;
use App\Http\Controllers\Base\BaseWebController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostStoreRequest;
use App\Http\Requests\Post\PostUpdateRequest;
use App\Models\Page;
use App\Repositories\Page\IPageRepository;
use App\Transformers\Page\ListAdminPageTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends BaseWebController
{
    public $pageRepository;
    public $upload;

    public function __construct(
        IPageRepository $pageRepository,
        Upload $upload
    )
    {
        $this->pageRepository = $pageRepository;
        $this->upload = $upload;
    }

    public function index()
    {
        $entries = $this->pageRepository->model()->get();
        $transformer = new ListAdminPageTransformer();
        $this->setTransformer($transformer);
        $data = $this->transformData($entries, $this->transformer);
        return view('admin.page.index')->with([
            'data' => $data['data']
        ]);
    }

    public function create()
    {
        return view('admin.page.add');
    }

    public function generateSlug(Request $request)
    {
        $slug = Str::slug($request->name, '-');
        return response()->json(['slug' => $slug]);
    }

    public function store(PostStoreRequest $request)
    {
        $data = $request->all();
        if(array_key_exists('files',$data)){
            $file = $data['files'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $post = Page::create([
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
        return \redirect('/admin/pages');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $page = Page::find($id);
        return view('admin.page.edit')->with(
            [
                'page' => $page,
            ]
        );
    }


    public function update(PostUpdateRequest $request, $id)
    {
        $data = $request->all();
        if(array_key_exists('newimage',$data)){
            $file = $data['newimage'];
            $dataImage = Upload::upload($file);
            $image = $dataImage['url'];
        }else{
            $image = null;
        }
        $page = Page::find($id);
        if($image){
            $page->update([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'status' => $data['status'],
                'expert' => $data['expert'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
                'image' => $image,
                'body' => $data['content'],
            ]);
        }else{
            $page->update([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'status' => $data['status'],
                'expert' => $data['expert'],
                'body' => $data['content'],
                'meta_description' => $data['description'],
                'meta_keywords' => $data['keywords'],
            ]);
        }
        return \redirect('/admin/pages');
    }

    public function destroy($id)
    {
        $post = Page::find($id);
        $post->delete();
        return \redirect('/admin/pages');
    }
}
