<header id="header" class="header-fullwidth">
    <div id="header-wrap">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="/" class="logo" data-dark-logo="images/logo-dark.png">
                    <img src="{{asset('assets/images/logo.png')}}" alt="Polo Logo">
                </a>
            </div>
            <!--End: Logo-->

            <!--Top Search Form-->
            <div id="top-search">
                <form action="search-results-page.html" method="get">
                    <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                </form>
            </div>
            <!--end: Top Search Form-->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <!--top search-->
                        <a id="top-search-trigger" href="#" class="toggle-item">
                            <i class="fa fa-search"></i>
                            <i class="fa fa-close"></i>
                        </a>
                        <!--end: top search-->
                    </li>
{{--                    <li class="hidden-xs">--}}
{{--                        <!--shopping cart-->--}}
{{--                        <div id="shopping-cart">--}}
{{--                            <a href="shop-cart.html">--}}
{{--                                <span class="shopping-cart-items">8</span>--}}

{{--                                <i class="fa fa-shopping-cart"></i></a>--}}
{{--                        </div>--}}
{{--                        <!--end: shopping cart-->--}}
{{--                    </li>--}}
{{--                    Đa ngôn ngữ--}}
{{--                    <li>--}}
{{--                        <div class="topbar-dropdown">--}}
{{--                            <a class="title"><i class="fa fa-globe"></i></a>--}}
{{--                            <div class="dropdown-list">--}}
{{--                                <a class="list-entry" href="#">French</a>--}}
{{--                                <a class="list-entry" href="#">Spanish</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                </ul>
            </div>
            <!--end: Header Extras-->

            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu" class="light">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">Trang chủ</a></li>
                            <li class="dropdown"> <a href="bang-gia-cho-thue">Bảng giá cho thuê</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#"><i class="fa fa-heart"></i>Headers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="{{route('client.combo')}}">Gói combo</a>
                                @if(!empty($comboCategories))
                                <ul class="dropdown-menu">
                                    @foreach($comboCategories as $key=>$item)
                                    <li ><a href="#"><i class="fa fa-star"></i>{{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            <li class="dropdown"> <a href="{{route('client.product')}}">Sản phẩm</a>
                                @if(!empty($productCategories))
                                <ul class="dropdown-menu">
                                    @foreach($productCategories as $key=>$item)
                                    <li ><a href="#"><i class="fa fa-star"></i>{{$item->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            <li class="dropdown"> <a href="#">Hướng dẫn</a>
                                <ul class="dropdown-menu">
                                    <li ><a href="/tutorial"><i class="fa fa-heart"></i>Headers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown"> <a href="{{route('news')}}">Tin tức</a>
                                @if(!empty($headerPostCategories))
                                    <ul class="dropdown-menu">
                                        @foreach($headerPostCategories as $key=>$item)
                                            <li ><a href="{{route('category-post',$item->slug)}}"><i class="fa fa-newspaper-o"></i>{{$item->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
