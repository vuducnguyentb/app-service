<header class="header">
    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="https://www.portotheme.com/html/molla/index1.html" class="logo">
                    <img src="{{asset('assets/images/demos/demo-21/logo.png')}}" alt="Molla Logo" width="100"
                         height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li>
                            <a href="{{route('client.page','bang-gia-cho-thue')}}">Bảng giá cho thuê</a>
                        </li>
                        <li>
                            <a href="{{route('client.product')}}" class="sf-with-ul">Combo</a>
                            @if(!empty($comboCategories))
                                <ul>
                                    @foreach($comboCategories as $key=>$item)
                                        <li><a href="#"><i class="fa fa-star"></i>{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </li>
                        <li>
                            <a href="{{route('client.product')}}" class="sf-with-ul">Sản phẩm</a>
                            @if(!empty($productCategories))
                                <ul>
                                    @foreach($productCategories as $key=>$item)
                                        <li><a href="#"><i class="fa fa-star"></i>{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </li>
                        <li>
                            <a href="{{route('client.page','huong-dan')}}" >Hướng dẫn</a>
                        </li>
                        <li>
                            <a href="{{route('client.news')}}" class="sf-with-ul">Tin tức</a>
                            @if(!empty($headerPostCategories->toArray()))
                                <ul>
                                    @foreach($headerPostCategories as $key=>$item)
                                        <li><a href="{{route('category-post',$item->slug)}}"><i class="fa fa-star"></i>{{$item->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>

                            @endif
                        </li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                                   required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->
