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
                    <h1 class="m-0">Thêm mới Slider</h1>
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
                        <form method="POST" enctype="multipart/form-data" action="{{route('sliders.store')}}">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên</label>
                                    <input type="text" class="form-control"
                                           id="nameCategory" placeholder="Tên danh mục" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Key</label>
                                    <input type="text" class="form-control"
                                           id="keyCategory" name="key">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Trạng thái</label>
                                    <select class="form-control" name="status">
                                        <option value="active">Sử dụng</option>
                                        <option value="in_active">Ngừng sử dụng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">List Slider</label>
                                    <table id="MutilItems" cellspacing="0" cellpadding="5" class="jsgrid-table">
                                        <tr class="jsgrid-header-row" >
                                            <th class="jsgrid-header-cell jsgrid-header-sortable">Tiêu đề <span uk-icon="calendar"></span></th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable">Nội dung</th>
                                            <th class="jsgrid-header-cell jsgrid-header-sortable">Link</th>
                                            <th  class="jsgrid-header-cell jsgrid-header-sortable">Image</th>
                                            <th></th>
                                        </tr>
{{--                                        <tr class="jsgrid-row">--}}
{{--                                            <td class="jsgrid-cell">--}}
{{--                                                <input type="text" placeholder="Tiêu đề">--}}
{{--                                            </td>--}}
{{--                                            <td class="jsgrid-cell">--}}
{{--                                                <textarea rows="3" name="content"></textarea>--}}
{{--                                            </td>--}}
{{--                                            <td class="jsgrid-cell">--}}
{{--                                                <input type="text" placeholder="Link">--}}
{{--                                            </td>--}}
{{--                                            <td class="jsgrid-cell">--}}
{{--                                                <input class="note-image-input form-control-file note-form-control note-input"--}}
{{--                                                       type="file" name="newimage" accept="image/*" multiple="multiple">--}}
{{--                                                <img src="" alt="">--}}
{{--                                            </td>--}}
{{--                                            <td class="jsgrid-cell">--}}
{{--                                                <input type="button" value="Delete" class="btn btn-danger"--}}
{{--                                                       onclick="DeleteItems">--}}
{{--                                            </td>--}}
{{--                                        </tr>--}}
                                    </table>
                                    <a onclick="event.preventDefault(); AddItems();"
                                       class="btn btn-info">
                                        Thêm</a>
                                </div>
                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Lưu</button>
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

    <table id="MutilItemsTemplate" style="display: none;" >
        <tr id="items_#xxxx#">
            <td class="jsgrid-cell">
                <input type="text" placeholder="Tiêu đề" name="items[#xxxx#][title]"
                       id="title_#xxxx#" class="title_slider"
                >
            </td>
            <td class="jsgrid-cell">
                <textarea rows="3" name="items[#xxxx#][content]"></textarea>
            </td>
            <td class="jsgrid-cell">
                <input type="text" placeholder="Tiêu đề" name="items[#xxxx#][link]"
                       id="link_#xxxx#" class="link_slider"
                >
            </td>
            <td class="jsgrid-cell">
                <input class="note-image-input form-control-file note-form-control note-input"
                       type="file" name="items[#xxxx#][image]" accept="image/*" multiple="multiple">
                <img src="" alt="" name="items[#xxxx#][url]">
            </td>
            <td class="jsgrid-cell">
                <input type="button"  value="Delete" class="btn btn-danger"
                       onclick="DeleteItems(#xxxx#);"
                       style="cursor: pointer;"
                >
            </td>
        </tr>
    </table>

@endsection
@section('after_js')

    <script>
{{--            @if($price)--}}
{{--        var mi_items = JSON.parse('{!! $price !!}')--}}
{{--            @else--}}
{{--        var mi_items = [];--}}
{{--            @endif--}}
        var $input_count = 100; // <=> #xxxx#
        for(var i in mi_items){
            console.log(mi_items[i]);
            AddItems(mi_items[i]);
        }

        function AddItems($row){
            console.log('da clck')
            $input_count++;
            $index = $input_count;
            var content = jQuery("#MutilItemsTemplate").html().replace(/#xxxx#/g,$index);
            jQuery("#MutilItems").append(content);
            if($row)
            {
                console.log('có row',$input_count)
                jQuery("#price_"+$input_count).val($row['price']);
                jQuery("#quantity_"+$input_count).val($row['quantity']);
            }
            else
            {
                // jQuery("#name_"+$input_count).removeAttr('readonly');
            }
            /** cho nay de them cac ham rieng cho tung dong multi items **/
            // function
            /** End cho nay de them cac ham rieng cho tung dong multi items  **/
            console.log('-----')

        }

        function DeleteItems($index){
            jQuery('#items_'+$index).remove();
        }


    </script>
@endsection

