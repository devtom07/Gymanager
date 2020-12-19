<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/fitnessclub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 08:49:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gymmanager</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.html">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('fontend')}}/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="{{url('fontend')}}/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/slicknav.css">
    <link rel="stylesheet" href="{{url('fontend')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{url('fontend')}}/css/gijgo.css">
    <link rel="stylesheet" href="{{url('fontend')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{url('fontend')}}/css/animated-headline.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/magnific-popup.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/themify-icons.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/slick.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/nice-select.css">
	<link rel="stylesheet" href="{{url('fontend')}}/css/style.css">
</head>
<body>
    @include('sweetalert::alert')

    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{url('fontend')}}/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('fontend.layouts.header')
    
    @yield('content')
    
    @include('fontend.layouts.footer')
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    

    <script src="{{url('fontend')}}/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{url('fontend')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{url('fontend')}}/js/popper.min.js"></script>
    <script src="{{url('fontend')}}/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{url('fontend')}}/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{url('fontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('fontend')}}/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{url('fontend')}}/js/wow.min.js"></script>
    <script src="{{url('fontend')}}/js/animated.headline.js"></script>
    <script src="{{url('fontend')}}/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="{{url('fontend')}}/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="{{url('fontend')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{url('fontend')}}/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="{{url('fontend')}}/js/jquery.counterup.min.js"></script>
    <script src="{{url('fontend')}}/js/waypoints.min.js"></script>
    <script src="{{url('fontend')}}/js/jquery.countdown.min.js"></script>
    <script src="{{url('fontend')}}/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="{{url('fontend')}}/js/contact.js"></script>
    <script src="{{url('fontend')}}/js/jquery.form.js"></script>
    <script src="{{url('fontend')}}/js/jquery.validate.min.js"></script>
    <script src="{{url('fontend')}}/js/mail-script.js"></script>
    <script src="{{url('fontend')}}/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="{{url('fontend')}}/js/plugins.js"></script>
    <script src="{{url('fontend')}}/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
     <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
    
    </body>

<!-- Mirrored from preview.colorlib.com/theme/fitnessclub/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 08:50:24 GMT -->
</html>