    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{route('fontend')}}"><img src="{{url('fontend')}}/img/logogym.gif" alt="" width="150px"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{route('fontend')}}">Trang chủ</a></li>
                                            <li><a href="{{route('about')}}">Giới thiệu</a></li>
                                            <li><a href="{{route('layout.service')}}">Dịch vụ</a></li>
                                            <li><a href="{{ route('blogs') }}">Bài viết</a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="blog.html">Hướng dẫn tập</a></li>
                                                    <li><a href="blog_details.html">Thông tin phòng tập</a></li>
                                                    <li><a href="elements.html">Thông tin khác</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="{{ route('newmember') }}" class="btn header-btn">Trở thành thành viên của chúng tôi</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>