@extends('client.layouts.main')
@section('seo_support')
    <title>{{config('batdangoai')['seo']['home']['title']}}</title>
    <meta name="description" content="{{config('batdangoai')['seo']['home']['description']}}">
    <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta property="og:title" content="{{config('batdangoai')['seo']['home']['title']}}">
    <meta property="og:description" content="{{config('batdangoai')['seo']['home']['description']}}">
    <meta property="og:url" content="{{route('home')}}">
    <meta name="twitter:title" content="{{config('batdangoai')['seo']['home']['title']}}">
    <meta name="twitter:description" content="{{config('batdangoai')['seo']['home']['description']}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')

    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">
    @foreach($sliders as $key=>$item)
        <!-- Slide 1 -->
            @if($item->image)
                <div class="slide"
                     style="background-image:url({{asset('storage/'.$item->image)}});">
                    @else
                        <div class="slide"
                             style="background-image:url({{asset('assets/homepages/shop-v3/images/slider-bat.jpg')}});">
                            @endif
                            <div class="container">
                                <div class="slide-captions text-right">
                                    <!-- Captions -->
                                    <p class="text-medium">{{$item->title}}<br/>{{$item->description}}</p>
                                    <a class="btn btn-light" href="{{$item->link}}">Xem</a>
                                {{--                                    <a class="btn btn-light btn-outline"--}}
                                {{--                                       href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View--}}
                                {{--                                        Collection</a>--}}
                                <!-- end: Captions -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- end: Slide 1 -->
                </div>
                <!--end: Inspiro Slider -->

                <!-- end: Sản phẩm Hot -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hr-title hr-long center"><abbr>Combo nổi bật </abbr></div>

                            </div>
                        </div>

                        <div class="shop-category">
                            <div class="row">
                                @foreach($comboHots as $key=>$item)
                                    <div class="col-md-3">
                                        <div class="product">
                                            <div class="product-image">
                                                <a href="{{route('client.combo-detail',$item->slug)}}">
                                                    @if($item->image)
                                                        <img src="{{asset('storage/'.$item->image)}}"
                                                             alt="{{$item->name}}">
                                                    @else
                                                        <img alt="{{$item->name}}"
                                                             src="{{asset('assets/images/shop/products/1.jpg')}}">
                                                    @endif
                                                </a>
                                                <span class="product-new">HOT</span>
{{--                                                <span class="product-wishlist">--}}
{{--<a href="#"><i class="fa fa-heart"></i></a>--}}
{{--</span>--}}
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
                                                        <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}} VND</span>
                                                        </ins>
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
                                                <div class="product-reviews">{{$item->views}} lượt xem
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Sản phẩm Hot -->

                <!-- DELIVERY INFO -->
                <section class="background-grey p-t-40 p-b-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="icon-box effect small clean">
                                    <div class="icon">
                                        <i class="fa fa-phone-square"></i>
                                    </div>
                                    <p>Tư vấn 24/7</p>
                                    <p>
                                        Hỗ trợ tư vấn nhiệt tình
                                        0904.779.796</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-box effect small clean">
                                    <div class="icon">
                                        <i class="fa fa-plane"></i>
                                    </div>
                                    <p>Miễn phí giao hàng</p>
                                    <p>Cho đơn hàng từ 999K</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-box effect small clean">
                                    <div class="icon">
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <p>Sản phẩm</p>
                                    <p>Sản phẩm chất lượng, liên tục cập nhật.</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="icon-box effect small clean">
                                    <div class="icon">
                                        <i class="fa fa-history"></i>
                                    </div>
                                    <p>Thủ tục thuê</p>
                                    <p>Nhanh gọn - Dễ dàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: DELIVERY INFO -->

                <!-- Shop products -->
                <section>
                    <div class="container">

                        <div class="heading m-b-40">
                            <h4>Sản phẩm đi kèm</h4>
                        </div>

                        <!--Product list-->
                        <div class="shop">
                            <div class="row">
                                @foreach($productHomes as $key=>$item)
                                    <div class="col-md-3">
                                        <div class="product">
                                            <div class="product-image">
                                                <a href="{{route('client.product-detail',$item->slug)}}">
                                                    @if($item->image)
                                                        <img src="{{asset('storage/'.$item->image)}}"
                                                             alt="{{$item->name}}">
                                                    @else
                                                        <img alt="{{$item->name}}"
                                                             src="{{asset('assets/images/shop/products/1.jpg')}}">
                                                    @endif
                                                </a>

{{--                                                <span class="product-new">NEW</span>--}}
{{--                                                <span class="product-wishlist">--}}
{{--<a href="#"><i class="fa fa-heart"></i></a>--}}
{{--</span>--}}
                                                {{--                                            <div class="product-overlay">--}}
                                                {{--                                                <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick--}}
                                                {{--                                                    View</a>--}}
                                                {{--                                            </div>--}}
                                            </div>

                                            <div class="product-description">
                                                <div class="product-category">{{$item->productCategory->name}}</div>
                                                <div class="product-title">
                                                    <p>
                                                        <a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a>
                                                    </p>
                                                </div>
                                                <div class="product-price">
                                                    @if(!empty($item->productPrices->toArray()))
                                                        <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}} VND</span>
                                                        </ins>
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
                                                <div class="product-reviews">{{$item->views}} lượt xem
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: Shop products -->

                <!-- SUMMER SALE -->
                <section class="section-pattern p-t-60 p-b-30 text-center"
                         style="background: url({{asset('assets/images/pattern/pattern22.png')}})">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-lg-12 center-col margin-50px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                                <h2 class="intro">Đăng ký nhận khuyến mãi</h2>
                                <p class="width-50 sm-width-75 xs-width-95 center-col fadeInUp intro-contact">
                                    ĐĂNG KÝ NHẬN TIN KHUYẾN MẠI, CÁC Sản Phẩm HOT QUA EMAIL
                                    <br>
                                    Nhận thông tin khuyến mại, giảm giá, quà tặng sinh nhật hay các sản phẩm siêu hot
                                    từ BATDANGOAI
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                @if(\Illuminate\Support\Facades\Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ \Illuminate\Support\Facades\Session::get('success') }}
                                    </div>
                                @endif
                                    <form class="form-inline text-center" method="POST" enctype="multipart/form-data" action="{{route('sign-mail')}}">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label class="sr-only">Email</label>
                                        <input type="email" class="form-control" placeholder="Nhập email." name="emailSign">
                                    </div>
                                    <button class="btn btn-default" type="submit">Đăng ký ngay</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: SUMMER SALE -->


                <!-- SHOP WIDGET PRODUTCS -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading-fancy heading-line">
                                    <h4>Top Combo</h4>
                                </div>

                                <div class="widget-shop">
                                    @foreach($topCombos as $key=>$item)
                                        <div class="product">
                                            <div class="product-image">
                                                <a href="{{route('client.combo-detail',$item->slug)}}">
                                                    @if($item->image)
                                                        <img src="{{asset('storage/'.$item->image)}}"
                                                             alt="{{$item->name}}">
                                                    @else
                                                        <img alt="{{$item->name}}"
                                                             src="{{asset('assets/images/shop/products/10.jpg')}}">
                                                    @endif
                                                </a>
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
                                                        <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}} VND</span>
                                                        </ins>
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
                            </div>
                            <div class="col-md-6">
                                <div class="heading-fancy heading-line">
                                    <h4>Top sản phẩm</h4>
                                </div>

                                <div class="widget-shop">
                                    @foreach($topProducts as $key=>$item)
                                        <div class="product">
                                            <div class="product-image">
                                                <a href="{{route('client.product-detail',$item->slug)}}">
                                                    @if($item->image)
                                                        <img src="{{asset('storage/'.$item->image)}}"
                                                             alt="{{$item->name}}">
                                                    @else
                                                        <img alt="{{$item->name}}"
                                                             src="{{asset('assets/images/shop/products/10.jpg')}}">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="product-description">
                                                <div class="product-category">{{$item->productCategory->name}}</div>
                                                <div class="product-title">
                                                    <p>
                                                        <a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a>
                                                    </p>
                                                </div>
                                                <div class="product-price">
                                                    @if(!empty($item->productPrices->toArray()))
                                                        <ins><span class="text-danger">{{number_format($item->productPrices[0]->price, 0, ',', '.')}} VND</span>
                                                        </ins>
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
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end: SHOP WIDGET PRODUTCS -->

                <!-- BLOG -->
                <section id="section4" class="background-grey">
                    <div class="container">
                        <div class="heading heading-center m-b-40">
                            <h2 class="m-b-0">TIN TỨC & SỰ KIỆN</h2>
                            <span class="lead">Tin tức mới nhất từ Bạt Dã Ngoại!</span>
                        </div>
                        <div id="blog">
                            <!-- Blog post-->
                            <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">
                            @foreach($postHomes as $key=>$item)
                                <!-- Post item-->
                                    <div class="post-item border">
                                        <div class="post-item-wrap">
                                            <div class="post-image">
                                                <a href="{{route('new-detail',$item->slug)}}">
                                                    @if($item->image)
                                                        <img src="{{asset('storage/'.$item->image)}}" alt="">
                                                    @else
                                                        <img alt="" src="{{asset('assets/images/blog/12.jpg')}}">
                                                    @endif
                                                </a>
                                                {{--                                    <span class="post-meta-category"><a href="">Lifestyle</a></span>--}}
                                            </div>
                                            <div class="post-item-description">
                                                <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{Carbon\Carbon::create($item->created_at)->format('d-m-Y')}}</span>
                                                {{--                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>--}}
                                                <h2><a href="{{route('new-detail',$item->slug)}}">{{$item->title}}
                                                    </a></h2>
                                                <p>{{$item->excerpt}}</p>

                                                <a href="{{route('new-detail',$item->slug)}}" class="item-link">Chi tiết
                                                    <i class="fa fa-arrow-right"></i></a>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end: Post item-->
                                @endforeach
                            </div>
                            <!-- end: Blog post-->
                        </div>
                    </div>
                </section>
                <!-- end: BLOG -->

@endsection
