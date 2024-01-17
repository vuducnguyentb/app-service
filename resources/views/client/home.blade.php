@extends('client.layouts.main')
@section('before_css')
@endsection
@section('content')

    <!-- Inspiro Slider -->
    <div id="slider" class="inspiro-slider arrows-large arrows-creative dots-creative" data-height-xs="360"
         data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1"
         data-loop="true" data-autoplay="true">
        <!-- Slide 1 -->
        <div class="slide" style="background-image:url({{asset('assets/homepages/shop-v3/images/slider-bat.jpg')}});">
            <div class="container">
                <div class="slide-captions text-right">
                    <!-- Captions -->
                    <h2 class="text-large">THE MOST<br/>POPULAR BRAND</h2>
                    <a class="btn btn-light" href="#">Shop Now</a>
                    <a class="btn btn-light btn-outline"
                       href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View
                        Collection</a>
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
                    <h2 class="text-large text-dark">HỌC SINH - SINH VIÊN<br/>GIẢM NGAY 10%</h2>
                    <a class="btn btn-dark" href="#">Shop Now</a>
                    <a class="btn btn-dark btn-outline"
                       href="http://themeforest.net/item/polo-responsive-multipurpose-html5-template/13708923">View
                        Collection</a>
                    <!-- end: Captions -->
                </div>
            </div>
        </div>
        <!-- end: Slide 2 -->
    </div>
    <!--end: Inspiro Slider -->

    <!-- end: Sản phẩm Hot -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hr-title hr-long center"><abbr>Sản phẩm nổi bật </abbr></div>

                </div>
            </div>

            <div class="shop-category">
                <div class="row">
                    @for($i=0;$i<=3;$i++)
                        <div class="col-md-3">
                            <div class="product">
                                <div class="product-image">
                                    <a href="#"><img alt="Shop product image!"
                                                     src="{{asset('assets/images/shop/products/1.jpg')}}">
                                    </a>
                                    <a href="#"><img alt="Shop product image!"
                                                     src="{{asset('assets/images/shop/products/10.jpg')}}">
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
                                    <div class="product-price">
                                        <ins>$15.00</ins>
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
                    @endfor
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
                            <a href="#"><i class="fa fa-phone-square"></i></a>
                        </div>
                        <h3>Tư vấn 24/7</h3>
                        <p>
                            Hỗ trợ tư vấn nhiệt tình
                            0386.267.017</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Miễn phí giao hàng</h3>
                        <p>Cho đơn hàng từ 999K</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-heart"></i></a>
                        </div>
                        <h3>Sản phẩm</h3>
                        <p>Sản phẩm chất lượng, liên tục cập nhật.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>Thủ tục thuê</h3>
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
                    <div class="col-md-3">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/1.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/10.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$15.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/2.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/6.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/3.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/7.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/4.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/9.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$22.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/5.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/11.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/6.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/2.jpg')}}">
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
                                    <del>$19.00</del>
                                    <ins>$15.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/7.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/3.jpg')}}">
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
                                <div class="product-price">
                                    <ins>$26.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/8.jpg')}}">
                                </a>
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/1.jpg')}}">
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
                                    <del>$19.00</del>
                                    <ins>$15.00</ins>
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

    <!-- SUMMER SALE -->
    <section class="section-pattern p-t-60 p-b-30 text-center"
             style="background: url({{asset('assets/images/pattern/pattern22.png')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 center-col margin-50px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center">
                        <h2 class="intro">Đăng ký nhận khuyến mãi</h2>
                        <p class="width-50 sm-width-75 xs-width-95 center-col fadeInUp intro-contact">
                            ĐĂNG KÝ NHẬN TIN KHUYẾN MẠI, CÁC Sản Phẩm HOT QUA EMAIL
                            <br>
                            Nhận thông tin khuyến mại, giảm giá, quà tặng sinh nhật hay các sản phẩm siêu hot từ BATDANGOAI
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form class="form-inline text-center">
                            <div class="form-group">
                                <label class="sr-only">Email</label>
                                <input type="text" class="form-control" placeholder="Nhập email.">
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
                <div class="col-md-3">
                    <div class="heading-fancy heading-line">
                        <h4>Top Combo</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/10.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$30.00</del>
                                    <ins>$15.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/6.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/7.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                        <h4>Top sản phẩm</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/11.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/9.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/3.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                        <h4>Sản phẩm dưới 50K</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/1.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$30.00</del>
                                    <ins>$15.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/2.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/5.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Man</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                        <h4>Ưa chuộng</h4>
                    </div>

                    <div class="widget-shop">
                        <div class="product">
                            <div class="product-image">
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/4.jpg')}}">
                                </a>
                            </div>
                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Bolt Sweatshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <del>$30.00</del>
                                    <ins>$15.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/13.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Consume Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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
                                <a href="#"><img alt="Shop product image!"
                                                 src="{{asset('assets/images/shop/products/8.jpg')}}">
                                </a>
                            </div>

                            <div class="product-description">
                                <div class="product-category">Women</div>
                                <div class="product-title">
                                    <h3><a href="#">Logo Tshirt</a></h3>
                                </div>
                                <div class="product-price">
                                    <ins>$39.00</ins>
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

                                    <a href="{{route('new-detail',$item->slug)}}" class="item-link">Chi tiết <i class="fa fa-arrow-right"></i></a>

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
