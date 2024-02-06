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
<main class="main">
    <div class="intro-slider-container mb-5">
        <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
             data-owl-options='{
                        "dots": true,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": false,
                                "dots": false
                            }
                        }
                    }'>
            @foreach($sliders as $key=>$item)

            <div class="intro-slide"
                 style="background-image: url({{asset('storage/'.$item->image)}}">
                <div class="container intro-content">
                    <div class="row">
                        <div class="intro">
                            <div class="title">
                                <h3>{{$item->title}}</h3>
                            </div>
                            <div class="content">
                                <h3>{{$item->description}}</h3>
                                <h3>TRAINING SHIRTS</h3>
                            </div>
                            <div class="price">
                                <h3>SAVE UP TO 30%</h3>
                            </div>
                            <div class="action">
                                <a href="{{$item->link}}" class="btn btn-primary">
                                    <span>DISCOVER NOW</span>
                                </a>
                            </div>

                        </div>
                    </div><!-- End .row -->
                </div><!-- End .intro-content -->
            </div><!-- End .intro-slide -->
            @endforeach


        </div><!-- End .intro-slider owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->


    <div class="container banner-container">
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
            <a href="category.html">
                <img src="{{asset('assets/images/demos/demo-21/banner/banner-1.jpg')}}">
            </a>
            <div class="banner-content">
                <div class="title">
                    <a href="category.html"><h3 class="darkWhite">It's a lifestyle.</h3></a>
                </div>
                <div class="content">
                    <a href="category.html"><h3>Running Apparel</h3></a>
                    <a href="category.html"><h3>END OF SEASON SALE</h3></a>
                </div>
                <div class="action">
                    <a href="category.html" class="btn btn-demoprimary">
                        <span>SHOP NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div><!-- End .row -->
        </div>
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
            <a href="category.html">
                <img src="{{asset('assets/images/demos/demo-21/banner/banner-2.jpg')}}">
            </a>
            <div class="banner-content">
                <div class="title">
                    <a href="category.html"><h3 class="darkWhite">Hike Your Next Trail </h3></a>
                </div>
                <div class="content">
                    <a href="category.html"><h3>NEW SEASON</h3></a>
                    <a href="category.html"><h3>NEW GEAR</h3></a>
                </div>
                <div class="action">
                    <a href="category.html" class="btn btn-demoprimary">
                        <span>DISCOVER NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div><!-- End .row -->
        </div>
        <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
            <a href="category.html">
                <img src="{{asset('assets/images/demos/demo-21/banner/banner-3.jpg')}}">
            </a>
            <div class="banner-content">
                <div class="title">
                    <a href="category.html"><h3 class="darkWhite">Summer Sale</h3></a>
                </div>
                <div class="content">
                    <a href="category.html"><h3>Swimwear sale</h3></a>
                    <a href="category.html"><h3>Save up to 30%</h3></a>
                </div>
                <div class="action">
                    <a href="category.html" class="btn btn-demoprimary">
                        <span>SHOP NOW</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div><!-- End .row -->
        </div>
    </div>


    <div class="container logos">
        <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
             data-owl-options='{
                        "nav": true,
                        "dots": false,
                        "margin": 10,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/1.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/2.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/3.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/4.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/5.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/6.png')}}" alt="Brand Name">
            </a>

            <a href="#" class="brand">
                <img src="{{asset('assets/images/brands/7.png')}}" alt="Brand Name">
            </a>
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->

    <div class="container bestsellers">
        <hr class="mb-3">
        <div class="heading">
            <h2 class="title text-center">Combo nổi bật</h2>
            <p class="content text-center mb-4">The Trends Boutique: The latest fashion trends from top brands!</p>
        </div>

        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
             data-owl-options='{
                        "nav": true,
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
            @foreach($comboHots as $key=>$item)

            <div class="product demo21">
                <figure class="product-media">
                    <span class="product-label label-sale">Sale</span>
                    <a href="product.html">
                        <img src="{{asset('assets/images/demos/demo-21/bestSellers/product-1-1.jpg')}}"
                             alt="Product image" class="product-image">
                        <img src="{{asset('assets/images/demos/demo-21/bestSellers/product-1-2.jpg')}}"
                             alt="Product image" class="product-image-hover">
                    </a>

                </figure><!-- End .product-media -->

                <div class="product-body text-center">
                    <div class="product-cat">
                        <a href="#">Shoes</a>
                    </div><!-- End .product-cat -->
                    <h3 class="product-title"><a href="product.html">Nike Renew Arena</a></h3>
                    <!-- End .product-title -->
                    <div class="product-price">
                        <span class="new-price">$58.99</span>
                        <span class="old-price">Was $75.00</span>
                    </div><!-- End .product-price -->
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                        </div><!-- End .ratings -->
                        <span class="ratings-text">( 2 Reviews )</span>
                    </div><!-- End .rating-container -->

                    <div class="product-nav product-nav-dots">
                        <a href="#" class="active" style="background: #c12f46;"><span
                                class="sr-only">Color name</span></a>
                        <a href="#" style="background: #d3def0;"><span class="sr-only">Color name</span></a>
                    </div><!-- End .product-nav -->

                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart" title="Add to cart"><span>ADD TO CART</span></a>
                        <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>
                    </div><!-- End .product-action -->


                </div><!-- End .product-body -->
            </div><!-- End .product -->
            @endforeach


        </div><!-- End .owl-carousel -->
    </div>

    <div class="choose-style">
        <div class="container row">
            <div class="banner-intro col-lg-5">
                <h3 class="title">Get Your<br>Inspiration<br>In The Street.</h3>

                <p class="darkWhite">IN THIS LOOK</p>
                <h4 class="content darkWhite">• Stowell Hood Fleece</h4>
                <h4 class="content darkWhite">• Force Tight </h4>
                <h4 class="content darkWhite">• Blitzing 3.0 Cap</h4>
                <p class="price darkWhite">$55.00 - $1,298.00</p>

                <a href="category.html" class="btn btn-demoprimary">
                    <span>BUY ALL </span>
                    <i class="icon-long-arrow-right"></i>
                </a>
            </div>
            <div class="carousel col-lg-7">
                <div class="heading">
                    <h2 class="title">Choose Your Style</h2>
                    <p class="content">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/chooseStyle/product-1.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Tops</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Stowell Hood Fleece</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$55.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->


                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->

                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/chooseStyle/product-2.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                                <div class="product-countdown" data-until="+9h" data-format="HMS"
                                     data-relative="true" data-labels-short="true"></div>
                                <!-- End .product-countdown -->
                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Bags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Force Tight</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$135.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/chooseStyle/product-3.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Accessories</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Blitzing 3.0 Cap</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$29.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 0 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->
                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container category-banner">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="category.html">
                    <img src="{{asset('assets/images/demos/demo-21/banner/footware.jpg')}}">
                </a>
                <div class="banner-content">
                    <a href="category.html"><h3 class="category"> FOOTWEAR </h3></a>
                    <a href="category.html" class="action">SHOP NOW</a>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="category.html">
                    <img src="{{asset('assets/images/demos/demo-21/banner/accessories.jpg')}}">
                </a>
                <div class="banner-content">
                    <a href="category.html"><h3 class="category"> ACCESSORIES </h3></a>
                    <a href="category.html" class="action">SHOP NOW</a>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="category.html">
                    <img src="{{asset('assets/images/demos/demo-21/banner/mens.jpg')}}">
                </a>
                <div class="banner-content">
                    <a href="category.html"><h3 class="category"> MEN'S </h3></a>
                    <a href="category.html" class="action">SHOP NOW</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <a href="category.html">
                    <img src="{{asset('assets/images/demos/demo-21/banner/womens.jpg')}}">
                </a>
                <div class="banner-content">
                    <a href="category.html"><h3 class="category"> WOMEN'S </h3></a>
                    <a href="category.html" class="action">SHOP NOW</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container new-arrivals">

        <hr class="mb-5 mt-8">

        <div class="heading heading-center mb-3">
            <h2 class="title">NEW ARRIVALS </h2><!-- End .title -->

            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="arrivals-all-link" data-toggle="tab" href="#arrivals-all-tab"
                       role="tab" aria-controls="arrivals-all-tab" aria-selected="true">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arrivals-women-link" data-toggle="tab" href="#arrivals-women-tab"
                       role="tab" aria-controls="arrivals-women-tab" aria-selected="false">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arrivals-men-link" data-toggle="tab" href="#arrivals-men-tab" role="tab"
                       aria-controls="arrivals-men-tab" aria-selected="false">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arrivals-shoes-link" data-toggle="tab" href="#arrivals-shoes-tab"
                       role="tab" aria-controls="arrivals-shoes-tab" aria-selected="false">Shoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="arrivals-acc-link" data-toggle="tab" href="#arrivals-acc-tab" role="tab"
                       aria-controls="arrivals-acc-tab" aria-selected="false">Accessories</a>
                </li>
            </ul>
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel"
                 aria-labelledby="arrivals-all-link">
                <div class="row">
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-1.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">UA Spawn Low</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$77.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #34529d;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-2.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Jackets & Vests</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">The North Face Fanorak 2.0</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$76.99</span>
                                    <span class="old-price">Was $109.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-3.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Bags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Osprey Talia</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$67.50</span>
                                    <span class="old-price">Was $150.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-4.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Ignite Limitless Leather</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$52.66</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-5.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Accessories</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Small Sleeping Bag</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$299.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-6.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Tops</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Alphaskin Sport Bra</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$34.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d64042;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-7.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Jackets & Vests</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Watertight Jacket</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$76.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-8.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Y-3 by Yohji Yamamoto</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$239.99</span>
                                    <span class="old-price">Was $400.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-9.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Bags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Marmot Empire Daypack</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$59.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-10.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">On Cloudflyer</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$127.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div><!-- .End .tab-pane -->
            <div class="tab-pane p-0 fade" id="arrivals-women-tab" role="tabpanel"
                 aria-labelledby="arrivals-women-link">
                <div class="row">
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-2.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Jackets & Vests</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">The North Face Fanorak 2.0</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$76.99</span>
                                    <span class="old-price">Was $109.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-6.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Tops</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Alphaskin Sport Bra</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$34.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #d64042;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div><!-- .End .tab-pane -->

            <div class="tab-pane p-0 fade" id="arrivals-men-tab" role="tabpanel"
                 aria-labelledby="arrivals-men-link">
                <div class="row">
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-7.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Jackets & Vests</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Watertight Jacket</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$76.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div><!-- .End .tab-pane -->

            <div class="tab-pane p-0 fade" id="arrivals-shoes-tab" role="tabpanel"
                 aria-labelledby="arrivals-shoes-link">
                <div class="row">
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">

                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-1.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">UA Spawn Low</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$77.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #34529d;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-4.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Ignite Limitless Leather</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$52.66</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-8.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Y-3 by Yohji Yamamoto</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$239.99</span>
                                    <span class="old-price">Was $400.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-10.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">On Cloudflyer</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$127.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                        <!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                </div>
            </div><!-- .End .tab-pane -->

            <div class="tab-pane p-0 fade" id="arrivals-acc-tab" role="tabpanel"
                 aria-labelledby="arrivals-acc-link">
                <div class="row">
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-3.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Bags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Osprey Talia</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="new-price">$67.50</span>
                                    <span class="old-price">Was $150.00</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-5.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Accessories</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Small Sleeping Bag</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$299.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                        <div class="product demo21">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="{{asset('assets/images/demos/demo-21/newArrivals/product-9.jpg')}}"
                                         alt="Product image" class="product-image">
                                </a>

                            </figure><!-- End .product-media -->

                            <div class="product-body text-center">
                                <div class="product-cat">
                                    <a href="#">Bags</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">Marmot Empire Daypack</a></h3>
                                <!-- End .product-title -->
                                <div class="product-price">
                                    <span class="cur-price">$59.99</span>
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart"
                                       title="Add to cart"><span>ADD TO CART</span></a>
                                </div><!-- End .product-action -->

                                <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a>

                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>

                </div>
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
        <div class="text-center">
            <a href="category.html" class="btn btn-viewMore">
                <span>VIEW MORE PRODUCTS</span>
                <i class="icon-long-arrow-right"></i>
            </a>
        </div>
    </div><!-- End .container -->

    <div class="container newsletter">
        <div class="background"
             style="background-image: url({{asset('assets/images/demos/demo-21/newsLetter/banner.jpg')}}">
            <div class="subscribe">
                <div class="subscribe-title text-center">
                    <h1 class="intro-title2nd">SUBSCRIBE FOR OUR NEWSLETTER</h1>
                    <h1 class="intro-title1st">Learn about new offers and get more deals by joining our
                        newsletter</h1>
                </div>
                <form action="#">
                    <div class="input-group">
                        <input type="email" placeholder="Enter your Email Address" aria-label="Email Adress"
                               required="">
                        <div class="input-group-append">
                            <button class="btn btn-subscribe" type="submit"><span>Subscribe</span><i
                                    class="icon-long-arrow-right"></i></button>
                        </div><!-- .End .input-group-append -->
                    </div><!-- .End .input-group -->
                </form>
            </div>
        </div>
    </div>

    <div class="container service mt-4">
        <div class="col-sm-6 col-lg-3 col-noPadding">
            <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-truck"></i>
                        </span>

                <div class="icon-box-content">
                    <h3 class="icon-box-title">Payment &amp; Delivery</h3><!-- End .icon-box-title -->
                    <p>Free shipping for orders over $50</p>
                </div><!-- End .icon-box-content -->
            </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-4 -->

        <div class="col-sm-6 col-lg-3">
            <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                <div class="icon-box-content">
                    <h3 class="icon-box-title">Return &amp; Refund</h3><!-- End .icon-box-title -->
                    <p>Free 100% money back guarantee</p>
                </div><!-- End .icon-box-content -->
            </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-4 -->

        <div class="col-sm-6 col-lg-3">
            <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                <div class="icon-box-content">
                    <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                    <p>Alway online feedback 24/7</p>
                </div><!-- End .icon-box-content -->
            </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-4 -->

        <div class="col-sm-6 col-lg-3">
            <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-envelope"></i>
                        </span>

                <div class="icon-box-content">
                    <h3 class="icon-box-title">JOIN OUR NEWSLETTER</h3><!-- End .icon-box-title -->
                    <p>10% off by subscribing to our newsletter</p>
                </div><!-- End .icon-box-content -->
            </div><!-- End .icon-box -->
        </div><!-- End .col-sm-6 col-lg-4 -->
    </div>

    <div class="container instagram-store text-center">
        <hr>
        <div class="heading">
            <h2 class="title">INSTAGRAM STORE</h2><!-- End .title -->
        </div>
        <div class="row">
            <div class="col-sm-3 banner-sm-div">
                <div class="banner-sm col-12 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-1.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
                <div class="banner-sm col-12 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-2.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 banner-lg instagram-feed">
                <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-3.jpg')}}">
                <div class="instagram-feed-content">
                    <a href="#"><i class="icon-heart-o"></i>280</a>
                    <a href="#"><i class="icon-comments"></i>22</a>
                </div>
            </div>
            <div class="col-sm-3 banner-sm-div">
                <div class="banner-sm col-6 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-4.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
                <div class="banner-sm col-6 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-6.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 banner-sm-div">
                <div class="banner-sm col-6 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-5.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
                <div class="banner-sm col-6 instagram-feed">
                    <img src="{{asset('assets/images/demos/demo-21/instagramStore/banner-7.jpg')}}">
                    <div class="instagram-feed-content">
                        <a href="#"><i class="icon-heart-o"></i>280</a>
                        <a href="#"><i class="icon-comments"></i>22</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
