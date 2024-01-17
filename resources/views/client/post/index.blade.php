@extends('client.layouts.main')
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
                        <h1>Tin Tức Bạt Dã Ngoại</h1>
                        <div class="breadcrumb float-left">
                            <ul>
                                <li><a href="/">Trang chủ</a>
                                </li>
                                <li><a href="">Tin tức</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end: Page title -->

                    <!-- Blog -->
                    <div id="blog" class="post-thumbnails">
                        @foreach($posts as $key=>$post)
                        <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
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
                                        <h2><a href="#">{{$post->title}}
                                            </a></h2>
                                        <p>{{$post->excerpt}}</p>

{{--                                        <div class="post-author"><img src="images/blog/author2.jpg">--}}
{{--                                            <p>by <a href="#">Ardian Musliu</a> 2 days ago </p></div>--}}

                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
                            @endforeach
                    </div>
                    <!-- end: Blog -->

                    <!-- Pagination -->
                    <div class="pagination pagination-simple">
                        {{ $posts->links('vendor.pagination.bootstrap-4', ['foo' => 'bar']) }}
{{--                        <ul>--}}
{{--                            <li>--}}
{{--                                <a href="#" aria-label="Previous"> <span aria-hidden="true"><i--}}
{{--                                            class="fa fa-angle-left"></i></span> </a>--}}
{{--                            </li>--}}
{{--                            <li><a href="#">1</a></li>--}}
{{--                            <li><a href="#">2</a></li>--}}
{{--                            <li class="active"><a href="#">3</a></li>--}}
{{--                            <li><a href="#">4</a></li>--}}
{{--                            <li><a href="#">5</a></li>--}}
{{--                            <li>--}}
{{--                                <a href="#" aria-label="Next"> <span aria-hidden="true"><i--}}
{{--                                            class="fa fa-angle-right"></i></span> </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
                    </div>
                    <!-- end: Pagination -->

                </div>
                <!-- end: post content -->

                <!-- Sidebar-->
                <div class="sidebar col-md-3">
                    <div class="pinOnScroll">
                        <!--Tabs with Posts-->
                        <div class="widget ">
                            <h4 class="widget-title">Recent Posts</h4>
                            <div class="post-thumbnail-list">
                                @for($i=0;$i<4;$i++)
                                <div class="post-thumbnail-entry">
                                    <img alt="" src="{{asset('assets/images/blog/thumbnail/5.jpg')}}">
                                    <div class="post-thumbnail-content">
                                        <a href="#">Suspendisse consectetur fringilla luctus</a>
                                        <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span>
                                        <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                        <!--End: Tabs with Posts-->

                        <!-- Twitter widget -->
                        <div class="widget widget-tweeter" data-username="envato" data-limit="2">
                            <h4 class="widget-title">Recent Tweets</h4>
                        </div>
                        <!-- end: Twitter widget-->

                        <!--widget tags -->
                        <div class="widget  widget-tags">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Digital</a>
                                <a href="#">Branding</a>
                                <a href="#">HTML</a>
                                <a href="#">Clean</a>
                                <a href="#">Peace</a>
                                <a href="#">Love</a>
                                <a href="#">CSS3</a>
                                <a href="#">jQuery</a>
                            </div>
                        </div>
                        <!--end: widget tags -->

                        <!--widget newsletter-->
                        <div class="widget  widget-newsletter">
                            <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php"
                                  role="form" method="post">
                                <h4 class="widget-title">Newsletter</h4>
                                <small>Stay informed on our latest news!</small>
                                <div class="input-group">
                                    <input type="email" aria-required="true" name="widget-subscribe-form-email"
                                           class="form-control required email" placeholder="Enter your Email">
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
