@extends('client.layouts.main')
@section('seo_support')
    <title>{{$page->title}}</title>
    <meta name="description" content="{{$page->meta_description}}">
        <meta property="og:title" content="{{$page->title}}">
        <meta property="og:description" content="{{$page->meta_description}}">
        <meta property="og:url" content="{{route('client.page',$page->slug)}}">
        <meta name="twitter:title" content=" {{$page->title}}">
        <meta name="twitter:description" content="{{$page->meta_description}}">
    @if($page->image)
        <meta property="og:image" content="{{asset('storage/'.$page->image)}}">
        <meta name="twitter:image" content="{{asset('storage/'.$page->image)}}">
    @else
        <meta name="twitter:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
        <meta property="og:image" content="{{asset('assets/seo/title/batdangoai.jpg')}}">
    @endif
        <meta name="twitter:card" content="summary_large_image">
@endsection
@section('before_css')
@endsection
@section('content')


    <!-- Page title -->
    <section id="page-title" data-parallax-image="images/parallax/5.jpg">
        <div class="container">
            <div class="page-title">
                <h1>{{$page->title}}</h1>
                <span>{{$page->expert}}</span>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <!-- Content -->
    <section id="page-content" class="sidebar-left">
        <div class="container">
            <div class="row">
                <!-- post content -->
                <div class="content col-md-9">

                   {!! $page->body !!}

                </div>
                <!-- end: post content -->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">

                    <!--Tabs with Posts-->
                    <div class="widget ">
                        <h4 class="widget-title">Bài viết mới</h4>
                        <div class="post-thumbnail-list">
                            @foreach($posts as $key=>$item)
                            <div class="post-thumbnail-entry">
                                @if($item->image)
                                    <img src="{{asset('storage/'.$item->image)}}" alt="">
                                @else
                                    <img alt="Shop product image!"
                                         src="{{asset('assets/images/blog/thumbnail/5.jpg')}}">
                                @endif
                                <div class="post-thumbnail-content">
                                    <a href="{{route('new-detail',$item->slug)}}">{{$item->title}}</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> {{Carbon\Carbon::create($item->created_at)->format('d-m-Y')}}</span>
{{--                                    <span class="post-category"><i class="fa fa-tag"></i> Technology</span>--}}
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--End: Tabs with Posts-->

{{--                    <!-- Twitter widget -->--}}
{{--                    <div class="widget widget-tweeter" data-username="envato" data-limit="2">--}}
{{--                        <h4 class="widget-title">Recent Tweets</h4>--}}
{{--                    </div>--}}
{{--                    <!-- end: Twitter widget-->--}}

{{--                    <!--widget tags -->--}}
{{--                    <div class="widget  widget-tags">--}}
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
{{--                    <!--end: widget tags -->--}}

                    <!--widget newsletter-->
{{--                    <div class="widget  widget-newsletter">--}}
{{--                        <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php" role="form" method="post">--}}
{{--                            <h4 class="widget-title">Newsletter</h4>--}}
{{--                            <small>Stay informed on our latest news!</small>--}}
{{--                            <div class="input-group">--}}
{{--                                <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">--}}
{{--                                <span class="input-group-btn">--}}
{{--                  <button type="submit" id="widget-subscribe-submit-button" class="btn btn-default"><i class="fa fa-paper-plane"></i></button>--}}
{{--                  </span> </div>--}}
{{--                        </form>--}}

{{--                    </div>--}}
                    <!--end: widget newsletter-->
                </div>

                <!-- end: Sidebar-->
            </div>
        </div>
    </section>
    <!-- end: Content -->



@endsection
