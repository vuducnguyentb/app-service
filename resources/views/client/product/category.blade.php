@extends('client.layouts.main')
@section('before_css')
@endsection
@section('content')

    <!-- Page title -->
    <section id="page-title" data-parallax-image="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>Danh Mục {{$categoryProduct->name}}</h1>
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
{{--                    <div class="row m-b-20">--}}
{{--                        <div class="col-md-6 p-t-10 m-b-20">--}}
{{--                            <h3 class="m-b-20">A Monochromatic Spring ’15</h3>--}}
{{--                            <p>Lorem ipsum dolor sit amet. Accusamus, sit, exercitationem, consequuntur, assumenda iusto--}}
{{--                                eos commodi alias.</p>--}}
{{--                        </div>--}}
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


{{--                    </div>--}}
                    <!--Product list-->
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
                                                    <img alt="Shop product image!"
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
                                                <h3>
                                                    <a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a>
                                                </h3>
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
                        <h4 class="widget-title">Danh mục sản phẩm</h4>
                        <ul class="list list-lines">
                            @foreach($categories as $key=>$item)
                                @if($item->id == $categoryProduct->id)
                                    <li>
                                @else
                                    <li>
                                        @endif
                                        <a href="{{route('client.category-product',$item->slug)}}">
                                            {{$item->name}}
                                        </a>
                                        <span class="count">({{$item->products_count}})</span>
                                    </li>
                                    @endforeach
                        </ul>
                    </div>
                    <div class="widget clearfix widget-shop">
                        <h4 class="widget-title">Sản phẩm mới nhất</h4>
                        @if(!empty($latestProducts))
                        @foreach($latestProducts as $key=>$item)
                            <div class="product">
                                <div class="product-image">
                                    <a href="{{route('client.product-detail',$item->slug)}}">
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
                                        <h3><a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a>
                                        </h3>
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
