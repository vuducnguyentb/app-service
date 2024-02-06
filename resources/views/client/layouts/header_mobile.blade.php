<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="/">Trang chủ</a>
                </li>
                <li>
                    <a href="{{route('client.page','bang-gia-cho-thue')}}">Bảng giá cho thuê</a>
                </li>
                <li>
                    <a href="{{route('client.combo')}}" class="sf-with-ul">Gói combo</a>
                    @if(!empty($comboCategories->toArray()))
                    <ul>
                        @foreach($comboCategories as $key=>$item)
                        <li><a href="{{route('client.category-combo',$item->slug)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                <li>
                    <a href="{{route('client.product')}}">Sản phẩm</a>
                    @if(!empty($productCategories->toArray()))
                    <ul>
                        @foreach($productCategories as $key=>$item)
                        <li><a href="{{route('client.category-product',$item->slug)}}">{{$item->name}}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                <li>
                    <a href="{{route('client.page','huong-dan')}}">Hướng dẫn</a>

                </li>
                <li>
                    <a href="{{route('news')}}">Tin tức</a>
                    @if(!empty($headerPostCategories->toArray()))
                    <ul>
                        <li><a href="{{route('category-post',$item->slug)}}">{{$item->name}}</a></li>
                    </ul>
                    @endif
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div><!-- End .social-icons -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->
