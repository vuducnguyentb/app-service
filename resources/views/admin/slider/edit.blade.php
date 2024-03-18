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
                        <h1 class="m-0">Cập nhật Slider {{$listSlider->title}}</h1>
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
                            <form method="POST" enctype="multipart/form-data"
                                  action="{{route('sliders.update',$listSlider->id)}}">
                                @method('PUT')
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên</label>
                                        <input type="text" class="form-control"
                                               id="nameCategory" name="name" value="{{$listSlider->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Key</label>
                                        <input type="text" class="form-control"
                                               id="keyCategory" name="key" value="{{$listSlider->key}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái</label>
                                        <select class="form-control" name="status">
                                            <option value="active" {{$listSlider->status == 'active' ? 'selected' :''}}>
                                                Sử dụng
                                            </option>
                                            <option
                                                value="in_active" {{$listSlider->status == 'in_active' ? 'selected' :''}}>
                                                Ngừng sử dụng
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">List Slider</label>
                                        <table id="MutilItems" cellspacing="0" cellpadding="5" class="jsgrid-table">
                                            <tr class="jsgrid-header-row">
                                                <th class="jsgrid-header-cell jsgrid-header-sortable">Tiêu đề <span
                                                        uk-icon="calendar"></span></th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable">Nội dung</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable">Link</th>
                                                <th class="jsgrid-header-cell jsgrid-header-sortable">Image</th>
                                                <th></th>
                                            </tr>
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

    <table id="MutilItemsTemplate" style="display: none;">
        <tr id="items_#xxxx#">
            <td class="jsgrid-cell">
                <input type="text" placeholder="Tiêu đề" name="items[#xxxx#][title]"
                       id="title_#xxxx#" class="title_slider"
                >
                <input type="hidden"  name="items[#xxxx#][id]"
                       id="id_#xxxx#" class="id_slider"
                >
            </td>
            <td class="jsgrid-cell">
                <textarea rows="5" name="items[#xxxx#][content]" id="content_#xxxx#"></textarea>
            </td>
            <td class="jsgrid-cell">
                <input type="text" placeholder="Tiêu đề" name="items[#xxxx#][link]"
                       id="link_#xxxx#" class="link_slider"
                >
            </td>
            <td class="jsgrid-cell">
                <input class="note-image-input form-control-file note-form-control note-input"
                       type="file" name="items[#xxxx#][image]" accept="image/*" multiple="multiple">
                <img src="" alt="" name="items[#xxxx#][url]" id="url_#xxxx#" style="width: 100px;height: auto">
            </td>
            <td class="jsgrid-cell">
                <input type="button" value="Delete" class="btn btn-danger"
                       onclick="DeleteItems(#xxxx#);"
                       style="cursor: pointer;"
                >
            </td>
        </tr>
    </table>

@endsection
@section('after_js')

    <script>
            @if($sliders)
        {{--var mi_items = JSON.parse('{!! $sliders !!}')--}}
        var mi_items = @json($sliders);
            @else
        var mi_items = [];
            @endif
        var $input_count = 100; // <=> #xxxx#
        for (var i in mi_items) {
            console.log(mi_items[i]);
            AddItems(mi_items[i]);
        }

        function AddItems($row) {
            console.log('da clck')
            $input_count++;
            $index = $input_count;
            var content = jQuery("#MutilItemsTemplate").html().replace(/#xxxx#/g, $index);
            jQuery("#MutilItems").append(content);
            var url = document.location.href;
            var temp = url.split("/");
            var baseUrl = temp[0] + "//" + temp[2];
            if ($row) {
                console.log('có row', $input_count)
                jQuery("#title_" + $input_count).val($row['title']);
                jQuery("#id_" + $input_count).val($row['id']);
                jQuery("#link_" + $input_count).val($row['link']);
                jQuery("#content_" + $input_count).val($row['description']);
                srcImage = baseUrl+'/storage/'+$row['image'];
                jQuery("#url_" + $input_count).attr('src',srcImage);
            } else {
                // jQuery("#name_"+$input_count).removeAttr('readonly');
            }
            /** cho nay de them cac ham rieng cho tung dong multi items **/
            // function
            /** End cho nay de them cac ham rieng cho tung dong multi items  **/
            console.log('-----')

        }

        function DeleteItems($index) {
            jQuery('#items_' + $index).remove();
        }


    </script>
@endsection

