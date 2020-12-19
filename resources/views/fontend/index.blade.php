@extends('fontend.layouts.index')
@section('content')
<main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">Gymmanager</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Hãy về đội của chúng tôi bạn sẽ được tỏa sáng</h1>
                                    <a href="{{ route('newmember') }}" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Đăng ký nhanh</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">Gymmanager</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Hãy về đội của chúng tôi bạn sẽ được tỏa sáng</h1>
                                    <a href="from.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Đăng ký nhanh</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            <!-- Video icon -->
            <div class="video-icon">
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <section class="about-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="{{url('fontend')}}/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>Giới thiệu về gym</span>
                                <h2>GIẢI PHÁP PHÙ HỢP XÂY DỰNG CƠ THỂ AN TOÀN GIÚP TIẾT KIỆM THỜI GIAN QUÝ GIÁ CỦA CHÚNG TA</h2>
                            </div>
                            <p class="pera-top">Brook giới thiệu các dịch vụ của bạn với bố cục linh hoạt, tiện lợi và đa năng. Bạn có thể chọn bố cục và yếu tố yêu thích của mình cho ts cular với khả năng tùy chỉnh không giới hạn. Dự định sao chép hoàn hảo pixel của các nhà thiết kế./p>
                            <p class="mb-65 pera-bottom">Brook trình bày các dịch vụ của bạn với bố cục đa dụng linh hoạt, thông thoáng và sang trọng. Bạn có thể chọn bố cục yêu thích của mình.

</p>
                            <a href="from.html" class="btn">Trở thành viên của chúng tôi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="{{url('fontend')}}/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle section-tittle2">
                                <span>Dịch vụ của chúng tôi</span>
                                <h2>Đột phá giới hạn của bạn</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <a href="services.html" class="btn wantToWork-btn f-right">Xem dịch vụ khác</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Want To work End -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-fitness"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Thiết bị chất lượng</a></h5>
                                <p>Thiết bị chất lượng cao đảm bảo mang lại những trải nghiệm tốt cho bạn</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Khám phá thêm <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-healthcare-and-medical"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Chăm sóc sức khoẻ</a></h5>
                                <p>Chính sách chăm sóc khách hàng được chúng tôi rất chú trọng</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Khám phá thêm <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">Chiến lược tập gym</a></h5>
                                <p>Chúng tôi có nhiều ca tập trong ngày để linh hoạt với thời gian rảnh của bạn</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Khám phá th <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!--? About-2 Area Start -->
 
        <!-- About-2 Area End -->
        <!--? Gallery Area Start -->
       
        <!-- Gallery Area End -->
        <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="section-tittle">
                            <span>Đội ngũ PT của chúng tôi</span>
                            <h2>Các giảng viên có kinh nghiệm nhất của chúng tôi</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">Nhiều dịch vụ hơn</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Team Ara Start -->
        <div class="team-area pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{url('fontend')}}/img/gallery/team1.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{url('fontend')}}/img/gallery/team2.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="{{url('fontend')}}/img/gallery/team3.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? Want To work -->
  
        <!-- Want To work End -->
        <!--? Date Tabs Start -->
        
        <!-- Date Tabs End -->
        <!--? Contact form Start -->
        
        <!-- Contact form End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>Bài viết mới </span>
                            <h2>Tin tức về gym có thể bạn quan tâm</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{url('fontend')}}/img/gallery/blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Hiện tại</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>tạo bởi Tuấn Anh</span>
                                    <h3><a href="blog_details.html">Quá trinhg tập gym </a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="{{url('fontend')}}/img/gallery/blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>bay giờ</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>Được tạo bởi Phan tuấn anh</span>
                                    <h3><a href="blog_details.html">Tập gum hàng ngày tăng cường vóc dáng</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection