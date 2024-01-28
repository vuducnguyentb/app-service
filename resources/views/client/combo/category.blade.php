@extends('client.layouts.main')
@section('seo_support')
    <title>{{config('batdangoai')['seo']['category-combo']['title']}}</title>
    <meta name="description" content="{{config('batdangoai')['seo']['category-combo']['description']}}">
    <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta property="og:title" content="{{config('batdangoai')['seo']['category-combo']['title']}}">
    <meta property="og:description" content="{{config('batdangoai')['seo']['category-combo']['description']}}">
    <meta property="og:url" content="{{route('client.category-combo',$categoryProduct->slug)}}">
    <meta name="twitter:title" content="{{config('batdangoai')['seo']['category-combo']['title']}}">
    <meta name="twitter:description" content="{{config('batdangoai')['seo']['category-combo']['description']}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')

    <!-- Page title -->
    <section id="page-title" data-parallax-image="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Danh mục {{$categoryProduct->name}}</h1>
                <span>{{$categoryProduct->meta_description}}</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <!-- Shop products -->
    <section id="page-content" class="sidebar-left">
        <div class="container">
            <div class="row">
                <!-- Content-->
                <div class="content col-md-9">
                    <!--Product list-->
                    <div class="shop">
                        @if(!empty($combos->toArray()))
                        <div class="grid-layout grid-3-columns" data-item="grid-item">
                            @foreach($combos as $key=>$item)
                                <div class="grid-item">
                                    <div class="product">
                                        <div class="product-image">
                                            <a href="{{route('client.combo-detail',$item->slug)}}">
                                                @if($item->image)
                                                    <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                                                @else
                                                    <img alt="{{$item->name}}"
                                                         src="{{asset('assets/images/shop/products/1.jpg')}}">
                                                @endif
                                            </a>
                                            {{--                                        <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/10.jpg')}}">--}}
                                            {{--                                        </a>--}}
                                            <span class="product-new">Mới</span>
                                            {{--                                        <span class="product-wishlist">--}}
                                            {{--                                        <a href="#"><i class="fa fa-heart"></i></a>--}}
                                            {{--                                        </span>--}}
                                            {{--                                        <div class="product-overlay">--}}
                                            {{--                                            <a href="{{route('client.product-detail',$item->slug)}}" data-lightbox="ajax">Chi tiết</a>--}}
                                            {{--                                        </div>--}}
                                        </div>

                                        <div class="product-description">
                                            <div class="product-category">{{$item->productCategory->name}}</div>
                                            <div class="product-title">
                                                <p>
                                                    <a href="{{route('client.combo-detail',$item->slug)}}">{{$item->name}}</a>
                                                </p>
                                            </div>
                                            <div class="product-price">
                                                @if(!empty($item->productPrices->toArray()))
                                                    <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}} VND</span></ins>
                                                @else
                                                    <ins class="text-danger">Liên hệ</ins>
                                                @endif
                                            </div>
                                            <div class="product-rate">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                            <div class="product-reviews"><a href="#">{{$item->views}} lượt xem</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div>
                            {{ $combos->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}
                        </div>
                    @endif
                        <!-- Pagination -->
                    {{--                        <div class="pagination">--}}
                    {{--                            <ul>--}}
                    {{--                                <li>--}}
                    {{--                                    <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>--}}
                    {{--                                </li>--}}
                    {{--                                <li><a href="#">1</a> </li>--}}
                    {{--                                <li><a href="#">2</a> </li>--}}
                    {{--                                <li class="active"><a href="#">3</a> </li>--}}
                    {{--                                <li><a href="#">4</a> </li>--}}
                    {{--                                <li><a href="#">5</a> </li>--}}
                    {{--                                <li>--}}
                    {{--                                    <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>--}}
                    {{--                                </li>--}}
                    {{--                            </ul>--}}
                    {{--                        </div>--}}
                    <!-- end: Pagination -->
                    </div>
                    <!--End: Product list-->
                </div>
                <!-- end: Content-->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Danh mục combo</h4>
                        <ul class="list list-lines">
                            @foreach($categories as $key=>$item)
                                @if($item->id == $categoryProduct->id)
                                    <li>
                                @else
                                    <li>
                                        @endif
                                        <a href="{{route('client.category-combo',$item->slug)}}">
                                            {{$item->name}}
                                        </a>
                                        <span class="count">({{$item->combos_count}})</span>
                                    </li>
                                    @endforeach
                        </ul>
                    </div>
                    <div class="widget clearfix widget-shop">
                        <h4 class="widget-title">Combo mới</h4>
                        @if(!empty($latestCombos->toArray()))
                        @foreach($latestCombos as $key=>$item)
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{route('client.combo-detail',$item->slug)}}">
                                        @if($item->image)
                                            <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                                        @else
                                            <img src="{{asset('assets/images/shop/products/10.jpg')}}"
                                                 alt="{{$item->name}}">
                                        @endif
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{$item->productCategory->name}}</div>
                                    <div class="product-title">
                                        <p><a href="{{route('client.combo-detail',$item->slug)}}">{{$item->name}}</a>
                                        </p>
                                    </div>
                                    <div class="product-price">
                                        @if(!empty($item->productPrices->toArray()))
                                            <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}}</span></ins>
                                        @else
                                            <ins class="text-danger">Liên hệ</ins>
                                        @endif
                                    </div>
                                    <div class="product-rate">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif
                    </div>
{{--                    <div class="widget clearfix widget-tags">--}}
{{--                        <h4 class="widget-title">Tags</h4>--}}
{{--                        <div class="tags">--}}
{{--                            <a href="#">Design</a>--}}
{{--                            <a href="#">Portfolio</a>--}}
{{--                            <a href="#">Digital</a>--}}
{{--                            <a href="#">Branding</a>--}}
{{--                            <a href="#">HTML</a>--}}
{{--                            <a href="#">Clean</a>--}}
{{--                            <a href="#">Peace</a>--}}
{{--                            <a href="#">Love</a>--}}
{{--                            <a href="#">CSS3</a>--}}
{{--                            <a href="#">jQuery</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="widget clearfix widget-newsletter">--}}
{{--                        <form class="form-inline" method="get" action="#">--}}
{{--                            <h4 class="widget-title">Subscribe for Latest Offers</h4>--}}
{{--                            <small>Subscribe to our Newsletter to get Sales Offers &amp; Coupon Codes etc.</small>--}}
{{--                            <div class="input-group">--}}

{{--                                <input type="email" placeholder="Enter your Email" class="form-control required email"--}}
{{--                                       name="widget-subscribe-form-email" aria-required="true">--}}
{{--                                <span class="input-group-btn">--}}
{{--										<button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i></button>--}}
{{--									</span>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}


                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Shop products -->


    <!-- DELIVERY INFO -->
{{--    <section class="background-grey p-t-40 p-b-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @for($i=0;$i<3;$i++)--}}
{{--                    <div class="col-md-4">--}}
{{--                        <div class="icon-box effect small clean">--}}
{{--                            <div class="icon">--}}
{{--                                <a href="#"><i class="fa fa-gift"></i></a>--}}
{{--                            </div>--}}
{{--                            <h3>Free shipping on orders $60+</h3>--}}
{{--                            <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endfor--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- end: DELIVERY INFO -->


@endsection
