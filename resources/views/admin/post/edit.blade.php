@extends('admin.layouts.main')
@section('before_css')
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Cập nhật bài viết</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mb-1">
                        <div class="card card-primary">
                            <div class="card-header">
                                {{--                            <h3 class="card-title">Quick Example</h3>--}}
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form method="POST" enctype="multipart/form-data" action="{{route('posts.update',$post->id)}}">
                                @method('PUT')
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tiêu đề</label>
                                        <input type="text" class="form-control"
                                               id="nameCategory" placeholder="Tên danh mục" name="title" value="{{$post->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Slug</label>
                                        <input type="text" class="form-control"
                                               id="slugCategory" placeholder="slug" name="slug" value="{{$post->slug}}">
                                    </div>
                                    <div class="form-group">
                                        @if($post->image)
                                            <img src="{{asset('storage/'.$post->image)}}" alt="">
                                        @endif
                                        <div class="form-group note-form-group note-group-select-from-files">
                                            <label for="note-dialog-image-file-17036059093161" class="note-form-label">Select from files</label>
                                            <input type="file" class="note-image-input form-control-file note-form-control note-input"
                                                   name="newimage">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái bài viết</label>
                                        <select class="form-control" name="status">
                                            <option value="active" {{$post->status == 'active' ? 'selected' :''}} >Sử dụng</option>
                                            <option value="in_active" {{$post->status == 'in_active' ? 'selected' :''}}>Ngừng sử dụng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Danh mục bài viết</label>
                                        <div class="form-check d-flex justify-content-around">
                                            @foreach($categories as $key=>$category)
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                           name="categories[]"
                                                           value="{{$category->id}}"
                                                        {{in_array($category->id,$selectedCategories) ? 'checked' :''}}
                                                    >
                                                    <label class="form-check-label">{{$category->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tóm tắt</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter ..." name="expert">{{ old('excerpt', $post->excerpt) }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea name="content" class="form-control my-editor" rows="7">{!! old('body', $post->body) !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{ old('meta_description', $post->meta_description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Keywords</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="keywords">{{ old('meta_keywords', $post->meta_keywords) }}</textarea>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@section('after_js')
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('content', options);
    </script>
    <script>
        jQuery('#nameCategory').keyup(function(){
            var name = $(this).val();
            jQuery.ajax({
                url: "{{route('generate.slug')}}",
                type: 'POST',
                data: {name: name},
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data){
                    $('#slugCategory').val(data.slug);
                }
            });
        });
    </script>
@endsection

