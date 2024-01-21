<footer id="footer" class="footer-light">
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Footer widget area 1 -->
                    <div class="widget clearfix widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                        <h4>Thông tin BATDANGOAI</h4>
                        <ul class="list-icon">
                            <li><i class="fa fa-map-marker"></i>237 Ngõ 141 Giáp Nhị - Thịnh Liệt - Hoàng Mai
                                <br>(Cạnh đầu sông Sét)</li>
                            <li><i class="fa fa-phone"></i> 0904.779.796 - 0967.277.142</li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:first.last@example.com">batdangoai@gmail.com</a>
                            </li>
                            <li>
                                <br><i class="fa fa-clock-o"></i>Thứ 2- Chủ Nhật: <strong>08:00 - 22:00</strong>
{{--                                <br>Saturday, Sunday: <strong>Closed</strong>--}}
                            </li>
                        </ul>
                        <!-- Social icons -->
                        <div class="social-icons social-icons-border float-left m-t-20">
                            <ul>
                                <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <!-- end: Social icons -->
                    </div>
                    <!-- end: Footer widget area 1 -->
                </div>
                <div class="col-md-2">
                    <!-- Footer widget area 2 -->
                    <div class="widget">
                        <h4>THÔNG TIN CHÍNH SÁCH</h4>
                        <ul class="list-icon list-icon-arrow">
                            <li><a href="/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="/quy-dinh">Quy định hình thức thanh toán</a></li>
                            <li><a href="/chinh-sach">Chính sách vận chuyển,giao nhận</a></li>
                            <li><a href="/">Trang chủ</a></li>
                            <li><a href="{{route('news')}}">Tin tức</a></li>
                        </ul>
                    </div>
                    <!-- end: Footer widget area 2 -->
                </div>
                <div class="col-md-3">
                    <!-- Footer widget area 3 -->
                    <div class="widget">
                        <h4>Tin tức mới nhât.</h4>
                        <div class="post-thumbnail-list">
                            @foreach($postNewFooters as $key=>$item)
                            <div class="post-thumbnail-entry">
                                <div class="post-thumbnail-content">
                                    <a href="#">{{$item['title']}}</a>
                                    <span class="post-date"><i class="fa fa-clock-o"></i> {{$item['created_at']}}</span>
                                    @foreach($item['categories'] as $key=>$value)
                                    <span class="post-category"><i class="fa fa-tag"></i>{{$value['name']}}</span>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- end: Footer widget area 3 -->
                </div>
                <div class="col-md-3">
                    <!-- Footer widget area 4 -->
                    <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                        <h4>Map</h4>
                        <div id="map-batdao">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.7433728123797!2d105.85015316910489!3d20.97311707914733!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac442d30e95b%3A0x337ca3a2d41ba73!2zMjc1IFAuIEdpw6FwIE5o4buLLCBUaOG7i25oIExp4buHdCwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1705314124348!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- end: Footer widget area 4 -->
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-content">
        <div class="container">
            <div class="copyright-text text-center">&copy; 2024 Bạt dã ngoại . All Rights Reserved.
            </div>
        </div>
    </div>
</footer>
