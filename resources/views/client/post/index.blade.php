@extends('admin.layouts.main')
@section('before_css')
@endsection
@section('content')

    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360" data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
        <!-- Slide 1 -->
        <div class="slide" style="background-image:url({{asset('assets/homepages/shop-v3/images/1.jpg')}});">
            <div class="container">
                <div class="slide-captions text-right">
                    <!-- Captions -->
                    <h2 class="text-large">THE MOST<br />POPULAR BRAND</h2>
                    <a class="btn btn-light" href="#">Shop Now</a>
                    <a class="btn btn-light btn-outline" href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View Collection</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 1 -->
        <!-- Slide 2 -->
        <div class="slide" style="background-image:url({{asset('assets/homepages/shop-v3/images/2.jpg')}});">
            <div class="container">
                <div class="slide-captions">
                    <!-- Captions -->
                    <h2 class="text-large text-dark">BIG SALE<br />UP TO 50%</h2>
                    <a class="btn btn-dark" href="#">Shop Now</a>
                    <a class="btn btn-dark btn-outline" href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View Collection</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- SUMMER SALE -->
    <section class="section-pattern p-t-60 p-b-30 text-center" style="background: url({{asset('assets/images/pattern/pattern22.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-left">
                    <h2 class="text-medium">Summer Sale</h2>
                    <p>Order more than 60$ and you will get free shippining Worldwide. <a href="#" class="read-more">More info</a></p>
                </div>
                <div class="col-md-7">
                    <div class="countdown medium" data-countdown="2018/02/19 11:34:51" data-animation="fadeInUp"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SUMMER SALE -->

    <!-- Shop products -->
    <section>
        <div class="container">

            <div class="heading m-b-40">
                <h4>Featured products</h4>
            </div>

            <!--Product list-->
            <div class="shop">
                <div class="row">
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/1.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/10.jpg')}}">
                                </a>
                                <span class="product-new">NEW</span>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">6 customer reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/2.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/6.jpg')}}">
                                </a>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/3.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/7.jpg')}}">
                                </a>
                                <span class="product-hot">HOT</span>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">3 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/4.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/9.jpg')}}">
                                </a>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Cotton Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$22.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/5.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/11.jpg')}}">
                                </a>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Grey Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/6.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/2.jpg')}}">
                                </a>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Pocket Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/7.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/3.jpg')}}">
                                </a>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Dark Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$26.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/8.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/1.jpg')}}">
                                </a>
                                <span class="product-sale">SALE</span>
                                <span class="product-sale-off">50% Off</span>
                                <span class="product-wishlist">
<a href="#"><i class="fa fa-heart"></i></a>
</span>
                                <div class="product-overlay">
                                    <a href="shop-product-ajax-page.html" data-lightbox="ajax">Quick View</a>
                                </div>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Nature Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$19.00</del><ins>$15.00</ins>
                                </div>
                                <div class="product-rate">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                                <div class="product-reviews"><a href="#">5 customer reviews</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end: Shop products -->

    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free shipping on orders $60+</h3>
                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide delivery</h3>
                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: DELIVERY INFO -->

    <!-- SHOP WIDGET PRODUTCS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="heading-fancy heading-line">
                        <h4>Top Rated</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/10.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/6.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/7.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="heading-fancy heading-line">
                        <h4>On Sale</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/11.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/9.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/3.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="heading-fancy heading-line">
                        <h4>Recommended</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/1.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/2.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/5.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="heading-fancy heading-line">
                        <h4>Popular</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/4.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/13.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!" src="{{asset('assets/images/shop/products/8.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price"><ins>$39.00</ins>
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

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP WIDGET PRODUTCS -->

    <!-- end: SHOP CATEGORIES -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hr-title hr-long center"><abbr>Browser our categories </abbr> </div>

                </div>
            </div>

            <div class="shop-category">
                <div class="row">
                    <div class="col-md-3">
                        <div class="shop-category-box">
                            <a href="#"><img alt="" src="{{asset('assets/images/shop/shop-category/1.jpg')}}">
                                <div class="shop-category-box-title text-center">
                                    <h6>Women</h6><small>64 products</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-category-box">
                            <a href="#"><img alt="" src="{{asset('assets/images/shop/shop-category/2.jpg')}}">
                                <div class="shop-category-box-title text-center">
                                    <h6>Wallet's</h6><small>36 products</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-category-box">
                            <a href="#"><img alt="" src="{{asset('assets/images/shop/shop-category/3.jpg')}}">
                                <div class="shop-category-box-title text-center">
                                    <h6>Man</h6><small>25 products</small>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-category-box">
                            <a href="#"><img alt="" src="{{asset('assets/images/shop/shop-category/4.jpg')}}">
                                <div class="shop-category-box-title text-center">
                                    <h6>Socks</h6><small>80 products</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: SHOP CATEGORIES -->

@endsection
