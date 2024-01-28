@extends('client.layouts.main')
@section('seo_support')
    <title>{{$combo->name}}</title>
    <meta name="description" content="{{$combo->meta_description}}">
    <meta property="og:title" content="{{$combo->title}}">
    <meta property="og:description" content="{{$combo->meta_description}}">
    <meta property="og:url" content="{{route('client.combo-detail',$combo->slug)}}">
    <meta name="twitter:title" content=" {{$combo->name}}">
    <meta name="twitter:description" content="{{$combo->meta_description}}">
    @if($combo->image)
        <meta property="og:image" content="{{asset('storage/'.$combo->image)}}">
        <meta name="twitter:image" content="{{asset('storage/'.$combo->image)}}">
    @else
        <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
        <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    @endif
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')

    <!-- Page title -->
    <section id="page-title" data-parallax-image="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Combo</h1>
                <span>Chi tiết {{$combo->name}}</span>
            </div>
{{--            <div class="breadcrumb">--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Trang chủ</a>--}}
{{--                    </li>--}}
{{--                    <li><a href="#">Shop</a>--}}
{{--                    </li>--}}
{{--                    <li class="active"><a href="#">Checkout</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
        </div>
    </section>
    <!-- end: Page title -->

    <!-- SHOP PRODUCT PAGE -->
    <section id="product-page" class="product-page p-b-0">
        <div class="container">
            <div class="product">
                <div class="row m-b-40">
                    <div class="col-md-5">
                        <div class="product-image">
                            @if($combo->image)
                                <img src="{{asset('storage/'.$combo->image)}}" alt="" style="width: 100%">
                            @else
                                <img src="{{asset('assets/images/shop/products/product-large.jpg')}}" alt="" style="width: 100%">
                            @endif
                        </div>
                    </div>


                    <div class="col-md-7">
                        <div class="product-description">
                            <div class="product-category">{{$combo->productCategory->name}}</div>
                            <div class="product-title">
                                <h3>{{$combo->name}}</h3>
                            </div>
                            <div class="product-price">
                                @if(!empty($combo->productPrices->toArray()))
                                    <ins><span class="text-danger">{{number_format($combo->productPrices[0]->price, 0, ',', '.')}} VND</span></ins>
                                @else
                                    <ins><span class="text-danger">Liên hệ</span></ins>
                                @endif
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">{{$combo->views}} lượt xem</a>
                            </div>

                            <div class="seperator m-b-10"></div>
                            <p>{{$combo->meta_description}}</p>
                            <div class="product-meta">



{{--                                <p>Tags: <a href="#" rel="tag">Clothing</a>, <a rel="tag" href="#">T-shirts</a>--}}
{{--                                </p>--}}


                            </div>
                            <div class="seperator m-t-20 m-b-10"></div>

                        </div>
                        <div class="row">

{{--                            <div class="col-md-6">--}}
{{--                                <h6>Select quantity</h6>--}}
{{--                                <div class="cart-product-quantity">--}}
{{--                                    <div class="quantity m-l-5">--}}
{{--                                        <input type="button" class="minus" value="-">--}}
{{--                                        <input type="text" class="qty" value="1">--}}
{{--                                        <input type="button" class="plus" value="+">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <h6>Add to Cart</h6>--}}
{{--                                <a class="btn"><i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
{{--                            </div>--}}
                        </div>


                    </div>
                </div>

                <div id="tabs-1" class="tabs simple">
                    <ul class="tabs-navigation">
                        <li class="active"><a href="#tab1"><i class="fa fa-align-justify"></i>Chi tiết</a> </li>
{{--                        <li><a href="#tab2"><i class="fa fa-info"></i>Thông tin các sản phẩm</a> </li>--}}
{{--                        <li><a href="#tab3"><i class="fa fa-star"></i>Reviews <span>(3)</span></a> </li>--}}
                    </ul>
                    <div class="tabs-content">
                        <div class="tab-pane active" id="tab1">
                            <p>{!! $combo ->body !!}</p>
                        </div>
{{--                        <div class="tab-pane" id="tab2">--}}
{{--                            @foreach($combo->products as $key=>$item)--}}
{{--                            <p>{{$item->name}}</p>--}}
{{--                                @if($combo->image)--}}
{{--                                    <img src="{{asset('storage/'.$item->image)}}" alt="" style="width: 200px; height: auto">--}}
{{--                                @else--}}
{{--                                    <img src="{{asset('assets/images/shop/products/product-large.jpg')}}" alt="" style="width: 200px; height: auto">--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP PRODUCT PAGE -->

    <!-- SHOP WIDGET PRODUTCS -->
    <section class="p-t-0">
        <div class="container">
            <div class="heading-fancy heading-line text-center">
                <h4>Sản phẩm - Combo liên quan!</h4>
            </div>
            <div class="row">
                <div class="col-md-6">


                    <div class="widget-shop">
                        @if(!empty($relatedCombos->toArray()))
                        @foreach($relatedCombos as $key=>$item)
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
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
                                        <p><a href="{{route('client.combo-detail',$item->slug)}}">{{$item->name}}</a></p>
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
                </div>
                <div class="col-md-6">


                    <div class="widget-shop">
                        @if(!empty($products->toArray()))
                        @foreach($products as $key=>$item)
                            <div class="product">
                                <div class="product-image">
                                    <a href="#">
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
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end: SHOP WIDGET PRODUTCS -->


{{--    <!-- DELIVERY INFO -->--}}
{{--    <section class="background-grey p-t-40 p-b-0">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-4">--}}
{{--                    <div class="icon-box effect small clean">--}}
{{--                        <div class="icon">--}}
{{--                            <a href="#"><i class="fa fa-gift"></i></a>--}}
{{--                        </div>--}}
{{--                        <h3>Free shipping on orders $60+</h3>--}}
{{--                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="icon-box effect small clean">--}}
{{--                        <div class="icon">--}}
{{--                            <a href="#"><i class="fa fa-plane"></i></a>--}}
{{--                        </div>--}}
{{--                        <h3>Worldwide delivery</h3>--}}
{{--                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-md-4">--}}
{{--                    <div class="icon-box effect small clean">--}}
{{--                        <div class="icon">--}}
{{--                            <a href="#"><i class="fa fa-history"></i></a>--}}
{{--                        </div>--}}
{{--                        <h3>60 days money back guranty!</h3>--}}
{{--                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- end: DELIVERY INFO -->--}}


@endsection
