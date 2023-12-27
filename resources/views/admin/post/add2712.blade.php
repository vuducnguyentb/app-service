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
                    <h1 class="m-0">Thêm mới bài viết</h1>
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
                        <form method="POST" enctype="multipart/form-data" action="{{route('categories.store')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" class="form-control"
                                           id="nameCategory" placeholder="Tên danh mục" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" class="form-control"
                                           id="slugCategory" placeholder="slug" name="slug">
                                </div>
                                <div class="form-group">
                                    <div class="form-group note-form-group note-group-select-from-files">
                                        <label for="note-dialog-image-file-17036059093161" class="note-form-label">Select from files</label>
                                        <input id="note-dialog-image-file-17036059093161" class="note-image-input form-control-file note-form-control note-input"
                                               type="file" name="files" accept="image/*" multiple="multiple">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái bài viết</label>
                                    <select class="form-control" name="status">
                                        <option>Sử dụng</option>
                                        <option>Ngừng sử dụng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tóm tắt</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="expert"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <textarea class="form-control" rows="5" placeholder="Enter ..." id="my-editor" name="content"></textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Thêm</button>
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
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="{{asset('assets/ckeditor/adapters/jquery.js')}}"></script>
{{--    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>--}}
    <script>
        jQuery('textarea.my-editor').ckeditor(options);
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

