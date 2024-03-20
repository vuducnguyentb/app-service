@extends('client.layouts.main')
@section('seo_support')
    <title>{{$post->title}}</title>
    <meta name="description" content="{{$post->meta_description}}">
    <meta property="og:title" content="{{$post->title}}">
    <meta property="og:description" content="{{$post->meta_description}}">
    <meta property="og:url" content="{{route('new-detail',$post->slug)}}">
    <meta name="twitter:title" content=" {{$post->title}}">
    <meta name="twitter:description" content="{{$post->meta_description}}">
    @if($post->image)
        <meta property="og:image" content="{{asset('storage/'.$post->image)}}">
        <meta name="twitter:image" content="{{asset('storage/'.$post->image)}}">
    @else
        <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
        <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    @endif
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
    <style>
        .post-content{
            width:100%;
            overflow: auto;
        }
        .post-content img{
            width: 100% !important;
            height: auto;
        }
    </style>
@endsection
@section('content')

    <!-- Page Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- content -->
                <div class="content col-md-9">
                    <!-- Blog -->
                    <div id="blog" class="single-post">
                        <!-- Post item-->
                        <div class="post-item">
                            <div class="post-item-wrap">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="" src="images/blog/1.jpg">
                                    </a>
                                </div>
                                <div class="post-item-description">
                                    <h2>{{$post->title}}</h2>
                                    <div class="post-content">
                                        {!! $post->body !!}

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end: Post item-->
                </div>
                <!-- end: content -->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">
                    <div class="pinOnScroll">
                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Tin tức gần đây.</h4>
                            <div class="post-thumbnail-list">
                                @if(!empty($recentPosts->toArray()))
                                @foreach($recentPosts as $key=>$item)
                                <div class="post-thumbnail-entry">
                                    @if($item->image)
                                        <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                                    @else
                                        <img src="{{asset('assets/images/blog/thumbnail/5.jpg')}}"
                                             alt="{{$item->name}}">
                                    @endif
                                    <div class="post-thumbnail-content">
                                        <a href="{{route('new-detail',$item->slug)}}">{{$item->title}}</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                    </div>
                                </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->

                        <!--widget tags -->
                        <div class="widget  widget-tags">
                            <h4 class="widget-title">Danh mục tin tức</h4>
                            <div class="tags">
                                @if(!empty($postCategories->toArray()))
                                    @foreach($postCategories as $key=>$item)
                                <a href="{{route('category-post',$item->slug)}}">{{$item->name}}</a>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!--end: widget tags -->

                        <!-- Combo -->
                        <div class="widget clearfix widget-shop">
                            @if(!empty($comboViews->toArray()))
                                <h4 class="widget-title">Combo Thuê Bạt</h4>
                                @foreach($comboViews as $key=>$item)
                                    <div class="product">
                                        <div class="product-image">
                                            <a href="{{route('client.combo-detail',$item->slug)}}">
                                                @if($item->image)
                                                    <img src="{{asset('storage/'.$item->image)}}"
                                                         alt="{{$item->name}}"
                                                         width="100%"
                                                    >
                                                @else
                                                    <img alt="{{$item->name}}"
                                                         src="{{asset('assets/images/shop/products/1.jpg')}}"
                                                         width="100%"
                                                    >
                                                @endif
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-category">
                                                {{$item->productCategory? $item->productCategory->name : ''}}
                                            </div>
                                            <div class="product-title">
                                                <p class="text-primary"><a href="{{route('client.combo-detail',$item->slug)}}">{{$item->name}}</a></p>
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
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- end: Combo-->

                        <!-- Product -->
                        <div class="widget clearfix widget-shop">
                            @if(!empty($productViews->toArray()))
                                <h4 class="widget-title">Sản phẩm thuê</h4>
                                @foreach($productViews as $key=>$item)
                                    <div class="product">
                                        <div class="product-image">
                                            <a href="{{route('client.product-detail',$item->slug)}}">
                                                @if($item->image)
                                                    <img src="{{asset('storage/'.$item->image)}}"
                                                         alt="{{$item->name}}"
                                                         width="100%"
                                                    >
                                                @else
                                                    <img alt="{{$item->name}}"
                                                         src="{{asset('assets/images/shop/products/1.jpg')}}"
                                                         width="100%"
                                                    >
                                                @endif
                                            </a>
                                        </div>
                                        <div class="product-description">
                                            <div class="product-category">
                                                {{$item->productCategory? $item->productCategory->name : ''}}
                                            </div>
                                            <div class="product-title">
                                                <p class="text-primary"><a href="{{route('client.product-detail',$item->slug)}}">{{$item->name}}</a></p>
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
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <!-- end: Product-->

                    </div>
                </div>
                <!-- end: sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Page Content -->

@endsection
