@extends('client.layouts.main')
@section('seo_support')
    <title>{{config('batdangoai')['seo']['index-product']['title']}}</title>
    <meta name="description" content="{{config('batdangoai')['seo']['index-product']['description']}}">
    <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta property="og:title" content="{{config('batdangoai')['seo']['index-product']['title']}}">
    <meta property="og:description" content="{{config('batdangoai')['seo']['index-product']['description']}}">
    <meta property="og:url" content="{{route('client.product')}}">
    <meta name="twitter:title" content="{{config('batdangoai')['seo']['index-product']['title']}}">
    <meta name="twitter:description" content="{{config('batdangoai')['seo']['index-product']['description']}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')

    <!-- Page title -->
    <section id="page-title" data-parallax-image="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>BatDaNgoai</h1>
                <span>Quý khách đang tìm sản phẩm có từ khóa {{$keySearch}}</span>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Trang chủ</a>
                    </li>
                    <li><a href="#">Sản phẩm</a>
                    </li>
                    {{--                    <li class="active"><a href="#">Sidebar Left</a>--}}
                    {{--                    </li>--}}
                </ul>
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
                    <div class="row m-b-20">
                        <div class="col-md-12 p-t-10 m-b-20">
                            {{--                            <h3 class="m-b-20">Lờ Chào</h3>--}}
                            <p>Chào mừng bạn đến với dịch vụ thuê bạt dã ngoại của chúng tôi! Chúng tôi cung cấp một loạt các sản phẩm chất lượng cao, đa dạng và hấp dẫn để đảm bảo rằng bạn có những trải nghiệm dã ngoại tuyệt vời nhất.</p>
                        </div>
                        {{--                        <div class="col-md-3">--}}
                        {{--                            <div class="order-select">--}}
                        {{--                                <h6>Sort by</h6>--}}
                        {{--                                <p>Showing 1&ndash;12 of 25 results</p>--}}
                        {{--                                <form method="get">--}}
                        {{--                                    <select>--}}
                        {{--                                        <option selected="selected" value="order">Default sorting</option>--}}
                        {{--                                        <option value="popularity">Sort by popularity</option>--}}
                        {{--                                        <option value="rating">Sort by average rating</option>--}}
                        {{--                                        <option value="date">Sort by newness</option>--}}
                        {{--                                        <option value="price">Sort by price: low to high</option>--}}
                        {{--                                        <option value="price-desc">Sort by price: high to low</option>--}}
                        {{--                                    </select>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col-md-3">--}}
                        {{--                            <div class="order-select">--}}
                        {{--                                <h6>Sort by Price</h6>--}}
                        {{--                                <p>From 0 - 190$</p>--}}
                        {{--                                <form method="get">--}}
                        {{--                                    <select>--}}
                        {{--                                        <option selected="selected" value="">0$ - 50$</option>--}}
                        {{--                                        <option value="">51$ - 90$</option>--}}
                        {{--                                        <option value="">91$ - 120$</option>--}}
                        {{--                                        <option value="">121$ - 200$</option>--}}
                        {{--                                    </select>--}}
                        {{--                                </form>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                    </div>
                    <!--Product list-->
                    {{--                    @if(!empty($products->toArray()))--}}
                    <div class="shop">
                        <div class="grid-layout grid-3-columns" data-item="grid-item">
                            @foreach($products as $key=>$item)
                                <div class="grid-item">
                                    <div class="product">
                                        <div class="product-image">
                                            <a href="{{route('client.product-detail',$item->slug)}}">
                                                @if($item->image)
                                                    <img src="{{asset('storage/'.$item->image)}}" alt="">
                                                @else
                                                    <img alt="Shop product image!" src="{{asset('assets/images/shop/products/1.jpg')}}">
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
                                                <p><a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a></p>
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
                            {{ $products->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}
                        </div>
                    </div>
                {{--                    @endif--}}
                <!--End: Product list-->
                </div>
                <!-- end: Content-->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">
                    <!--widget newsletter-->
                    <div class="widget clearfix widget-archive">
                        <h4 class="widget-title">Danh mục sản phẩm</h4>
                        @if(!empty($categories->toArray()))
                            <ul class="list list-lines">
                                @foreach($categories as $key=>$item)
                                    <li><a href="{{route('client.category-product',$item->slug)}}">{{$item->name}}</a> <span class="count">({{$item->products_count}})</span>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="widget clearfix widget-shop">
                        <h4 class="widget-title">Sản phẩm mới</h4>
                        @foreach($latestProducts as $key=>$item)
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{route('client.product-detail',$item->slug)}}">
                                        @if($item->image)
                                            <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                                        @else
                                            <img src="{{asset('assets/images/shop/products/10.jpg')}}" alt="{{$item->name}}">
                                        @endif
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-category">{{$item->productCategory->name}}</div>
                                    <div class="product-title">
                                        <p><a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a></p>
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

                    {{--                                <input type="email" placeholder="Enter your Email" class="form-control required email" name="widget-subscribe-form-email" aria-required="true">--}}
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



@endsection
