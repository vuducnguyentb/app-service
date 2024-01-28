@extends('client.layouts.main')
@section('seo_support')
    <title>{{config('batdangoai')['seo']['category-post']['title']}}</title>
    <meta name="description" content="{{config('batdangoai')['seo']['category-post']['description']}}">
    <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    <meta property="og:title" content="{{config('batdangoai')['seo']['category-post']['title']}}">
    <meta property="og:description" content="{{config('batdangoai')['seo']['category-post']['description']}}">
    <meta property="og:url" content="{{route('category-post',$categoryPost->slug)}}">
    <meta name="twitter:title" content="{{config('batdangoai')['seo']['category-post']['title']}}">
    <meta name="twitter:description" content="{{config('batdangoai')['seo']['category-post']['description']}}">
    <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')
    <!-- Content -->
    <section id="page-content" class="sidebar-right">
        <div class="container">
            <div class="row">
                <!-- post content -->
                <div class="content col-md-9">
                    <!-- Page title -->
                    <div class="page-title">
                        <h1>Tin - {{$categoryPost->name}}</h1>
                        <div class="breadcrumb float-left">
                            <ul>
                                <li>Trang chủ
                                </li>
                                <li>{{$categoryPost->name}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end: Page title -->

                    @if(!empty($postInCategories->toArray()))
                    <!-- Blog -->
                    <div id="blog" class="post-thumbnails">
                        @foreach($postInCategories as $key=>$post)
                        <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="{{route('new-detail',$post->slug)}}">
                                            @if($post->image)
                                                <img src="{{asset('storage/'.$post->image)}}" alt="">
                                            @else
                                                <img alt="" src="{{asset('assets/images/blog/12.jpg')}}">
                                            @endif
                                        </a>
{{--                                        <span class="post-meta-category"><a href="">Lifestyle</a></span>--}}
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i>{{Carbon\Carbon::create($post->created_at)->format('d-m-Y')}}</span>
{{--                                        <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33 Comments</a></span>--}}
                                        <h2><a href="{{route('new-detail',$post->slug)}}">{{$post->title}}
                                            </a></h2>
                                        <p>{{$post->excerpt}}</p>
{{--                                        <div class="post-author">--}}
{{--                                            <img src="images/blog/author2.jpg">--}}
{{--                                            <p>by <a href="#">Ardian Musliu</a> 2 days ago </p>--}}
{{--                                            <p>{{$post->meta_description}}</p>--}}
{{--                                        </div>--}}

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                            @endforeach
                    </div>
                    <!-- end: Blog -->

                    <!-- Pagination -->
                    <div class="pagination pagination-simple">
                        {{ $postInCategories->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}
                    </div>
                    <!-- end: Pagination -->
                        @endif
                </div>
                <!-- end: post content -->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">
                    <div class="pinOnScroll">
                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Bài viết khác</h4>
                            <div class="post-thumbnail-list">
                                @foreach($postNotInCategories as $key=>$item)
                                <div class="post-thumbnail-entry">
                                    @if($item->image)
                                        <img src="{{asset('storage/'.$item->image)}}" alt="">
                                    @else
                                        <img alt="" src="{{asset('assets/images/blog/thumbnail/5.jpg')}}">
                                    @endif
                                    <div class="post-thumbnail-content">
                                        <a href="{{route('new-detail',$item->slug)}}">{{$item->title}}</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>{{Carbon\Carbon::create($item->created_at)->format('d-m-Y')}}</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->

                        <!-- Twitter widget -->
                        <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                            <h4 class="widget-title">Recent Tweets</h4>
                        </div>
                        <!-- end: Twitter widget-->

                        <!--widget tags -->
{{--                        <div class="widget  widget-tags">--}}
{{--                            <h4 class="widget-title">Tags</h4>--}}
{{--                            <div class="tags">--}}
{{--                                <a href="#">Design</a>--}}
{{--                                <a href="#">Portfolio</a>--}}
{{--                                <a href="#">Digital</a>--}}
{{--                                <a href="#">Branding</a>--}}
{{--                                <a href="#">HTML</a>--}}
{{--                                <a href="#">Clean</a>--}}
{{--                                <a href="#">Peace</a>--}}
{{--                                <a href="#">Love</a>--}}
{{--                                <a href="#">CSS3</a>--}}
{{--                                <a href="#">jQuery</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!--end: widget tags -->

                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php"
                                  role="form" method="post">
                                <h4 class="widget-title">Đăng ký nhận khuyến mãi</h4>
                                <small>Nhập mail để nhận nhiều mã KM từ BADANGOAI</small>
                                <div class="input-group">
                                    <input type="email" aria-required="true" name="widget-subscribe-form-email"
                                           class="form-control required email" placeholder="Nhập Email...">
                                    <span class="input-group-btn">
                  <button type="submit" id="widget-subscribe-submit-button" class="btn btn-default"><i
                          class="fa fa-paper-plane"></i></button>
                  </span></div>
                            </form>

                        </div>
                        <!--end: widget newsletter-->
                    </div>
                </div>
                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Content -->

@endsection
