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
                        <h1 class="m-0">Cập nhật sản phẩm {{$product->name}}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v2</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->P
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
                            <form method="POST" enctype="multipart/form-data" action="{{route('products.update',$product->id)}}">
                                @method('PUT')
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Code sản phẩm</label>
                                        <input type="text" class="form-control"
                                               id="codeCategory"  name="code" value="{{$product->code}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                                        <input type="text" class="form-control"
                                               id="nameCategory" name="name" value="{{$product->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Slug</label>
                                        <input type="text" class="form-control"
                                               id="slugCategory" name="slug" value="{{$product->slug}}">
                                    </div>
                                    <div class="form-group">
                                        @if($product->image)
                                            <img src="{{asset('storage/'.$product->image)}}" alt="">
                                        @endif
                                        <div class="form-group note-form-group note-group-select-from-files">
                                            <label for="note-dialog-image-file-17036059093161" class="note-form-label">Select from files</label>
                                            <input id="note-dialog-image-file-17036059093161" class="note-image-input form-control-file note-form-control note-input"
                                                   type="file" name="newimage" accept="image/*" multiple="multiple">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="active" {{$product->status == 'active' ? 'selected' :''}} >Sử dụng</option>
                                            <option value="in_active" {{$product->status == 'in_active' ? 'selected' :''}}>Ngừng sử dụng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Có hot không?</label>
                                        <select class="form-control" name="is_hot">
                                            <option value="in_active" {{$product->is_hot == 'in_active' ? 'selected' :''}}>Thường</option>
                                            <option value="active" {{$product->is_hot == 'active' ? 'selected' :''}}>Hot</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">FreeShip</label>
                                        <select class="form-control" name="freeship">
                                            <option value="in_active" {{$product->freeship == 'in_active' ? 'selected' :''}}>Không</option>
                                            <option value="active" {{$product->freeship == 'active' ? 'selected' :''}}>Có</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Danh mục </label>
                                        <div class="form-check d-flex justify-content-around">
                                            @foreach($categories as $key=>$category)
                                                <div>
                                                    <input class="form-check-input"
                                                           type="radio"
                                                           name="category"
                                                           value="{{$category->id}}"
                                                        {{$category->id == $selectedCategory ? 'checked' :''}}
                                                    >
                                                    <label class="form-check-label">{{$category->name}}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số lượng có</label>
                                        <input type="number" class="form-control"
                                               id="quantityCategory"  name="quantity"
                                        value="{{$product->quantity}}"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung</label>
                                        <textarea name="content" class="form-control my-editor" rows="7">{!! old('body', $product->body) !!}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="description">{{ old('meta_description', $product->meta_description) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meta Keywords</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="keywords">{{ old('meta_keywords', $product->meta_keywords) }}</textarea>
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

