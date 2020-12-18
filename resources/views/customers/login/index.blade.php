<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title') | Gymanager</title>
    <link rel="shortcut icon" href="{{url('admin')}}/images/logogym.gif">
    <<base href="{{ asset('') }}" target="_blank, _self, _parent, _top">
    <!-- Fontfaces CSS-->
    <link href="customers/css/font-face.css" rel="stylesheet" media="all">
    <link href="customers/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="customers/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="customers/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="customers/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="customers/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="customers/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="customers/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        @yield('content')

    </div>

    <!-- Jquery JS-->
    <script src="customers/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="customers/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="customers/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="customers/vendor/slick/slick.min.js">
    </script>
    <script src="customers/vendor/wow/wow.min.js"></script>
    <script src="customers/vendor/animsition/animsition.min.js"></script>
    <script src="customers/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="customers/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="customers/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="customers/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="customers/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="customers/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="customers/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="customers/js/main.js"></script>

</body>

</html>
<!-- end document-->