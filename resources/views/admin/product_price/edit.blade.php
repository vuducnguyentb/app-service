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
                        <h1 class="m-0">Cập nhật Giá sản phẩm {{$product->name}}</h1>
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
                            <form method="POST" enctype="multipart/form-data" action="{{route('admin.product.price.update',$product->id)}}">
                                @method('PUT')
                                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                <table id="MutilItems" cellspacing="0" cellpadding="5" class="jsgrid-table">
                                    <tr class="jsgrid-header-row" >
                                        <th class="jsgrid-header-cell jsgrid-header-sortable">Số lượng tối thiểu <span uk-icon="calendar"></span></th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable">Giá<span style=" padding-right: 8px;">(VND)</span></th>
                                        <th></th>
                                    </tr>
{{--                                    <tr class="jsgrid-row">--}}
{{--                                        <td class="jsgrid-cell">--}}
{{--                                            <input type="number">--}}
{{--                                        </td>--}}
{{--                                        <td class="jsgrid-cell">--}}
{{--                                            <input type="number">--}}
{{--                                        </td>--}}
{{--                                        <td class="jsgrid-cell">--}}
{{--                                            <input type="button" value="Delete" class="btn btn-danger" onclick="DeleteItems">--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
                                </table>
                                <a onclick="event.preventDefault(); AddItems();"
                                   class="btn btn-info">
                                    Thêm</a>
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

    <table id="MutilItemsTemplate" style="display: none;" >
        <tr id="items_#xxxx#">
            <td class="jsgrid-cell">
                <input type="number"  name="items[#xxxx#][quantity]" id="quantity_#xxxx#"
                class="quantity_product"
                >
            </td>
            <td class="jsgrid-cell">
                <input type="number"  name="items[#xxxx#][price]" id="price_#xxxx#"
                       class="price_product"
                >
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
        @if($price)
            var mi_items = JSON.parse('{!! $price !!}')
            @else
               var mi_items = [];
            @endif
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

