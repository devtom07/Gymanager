<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 19:25:16 GMT -->
<head>
        <meta charset="utf-8" />
        <title>@yield('title') | Gymmanager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{url('admin')}}/images/logogym.gif">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <!-- App css -->
        <link href="{{url('admin')}}/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{url('admin')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('admin')}}/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />

    </head>

    <body class="authentication-bg">
    @include('sweetalert::alert')

      @yield('content')
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{url('admin')}}/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{url('admin')}}/js/app.min.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    </body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 19:25:16 GMT -->
</html>
