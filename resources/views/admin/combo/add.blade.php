@extends('admin.layouts.main')
@section('before_css')
    <style>
        .quantity-product{
            padding: 20px;
        }
    </style>
@endsection
@section('content')
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Thêm combo mới</h1>
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
                        <!-- form start -->
                        <form method="POST" enctype="multipart/form-data" action="{{route('combos.store')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Code combo</label>
                                    <input type="text" class="form-control"
                                           id="codeCategory"  name="code">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên combo</label>
                                    <input type="text" class="form-control"
                                           id="nameCategory" placeholder="Tên danh mục" name="name">
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
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control" name="status">
                                        <option value="active">Sử dụng</option>
                                        <option value="in_active">Ngừng sử dụng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Có hot không?</label>
                                    <select class="form-control" name="is_hot">
                                        <option value="in_active">Thường</option>
                                        <option value="active">Hot</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">FreeShip</label>
                                    <select class="form-control" name="freeship">
                                        <option value="in_active">Không</option>
                                        <option value="active">Có</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục </label>
                                    <div class="form-check d-flex justify-content-around">
                                            @foreach($categories as $key=>$category)
                                                <div>
                                                    <input class="form-check-input" type="radio" name="category" value="{{$category->id}}">
                                                    <label class="form-check-label">{{$category->name}}</label>
                                                </div>
                                            @endforeach
                                    </div>
                                </div>
                                <div class="form-group" style="border: 1px solid #ffff;padding: 5px;">
                                    <label for="exampleInputPassword1">Sản phẩm và số lượng</label>
                                    <div class="form-check d-flex flex-wrap">
                                        @foreach($products as $key=>$product)
                                            <div class="quantity-product">
                                                <input class="form-check-input" type="checkbox" name="products[{{$product->id}}][]" value="{{$product->id}}">
                                                <label class="form-check-label">{{$product->name}}</label>
                                                <input type="number" class="form-control" name="product_quantity[{{$product->id}}][]" placeholder="Số lượng" style="width: 150px">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số lượng combo</label>
                                    <input type="number" class="form-control"
                                           id="quantityCategory"  name="quantity">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung</label>
                                    <textarea name="content" class="form-control my-editor" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Meta Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Meta Keywords</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="keywords"></textarea>
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

