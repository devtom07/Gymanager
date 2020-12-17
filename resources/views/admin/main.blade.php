<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 19:24:40 GMT -->

<head>
    <meta charset="utf-8" />
    <title>@yield('title') | Gymmaneger</title>
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
    <link href="{{url('admin')}}/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<style>
.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #444;
    line-height: 40px;
}

.select2-container .select2-selection--single {
    box-sizing: border-box;
    cursor: pointer;
    display: block;
    height: 38px;
    user-select: none;
    -webkit-user-select: none;
}
</style>

<body>
    @include('sweetalert::alert')
    <!-- Begin page -->
    <div id="wrapper">


        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2">
                    <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{url('admin')}}/images/flags/us.jpg" alt="lang-image" height="12">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{url('admin')}}/images/flags/germany.jpg" alt="lang-image" class="mr-1"
                                height="12"> <span class="align-middle">German</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{url('admin')}}/images/flags/italy.jpg" alt="lang-image" class="mr-1"
                                height="12"> <span class="align-middle">Italian</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{url('admin')}}/images/flags/spain.jpg" alt="lang-image" class="mr-1"
                                height="12"> <span class="align-middle">Spanish</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{url('admin')}}/images/flags/russia.jpg" alt="lang-image" class="mr-1"
                                height="12"> <span class="align-middle">Russian</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-bell-outline noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 text-white m-0">
                                <span class="float-right">
                                    <a href="#" class="text-white">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success">
                                    <i class="mdi mdi-settings-outline"></i>
                                </div>
                                <p class="notify-details">New settings
                                    <small class="text-muted">There are new settings available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-bell-outline"></i>
                                </div>
                                <p class="notify-details">Updates
                                    <small class="text-muted">There are 2 new updates available</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger">
                                    <i class="mdi mdi-account-plus"></i>
                                </div>
                                <p class="notify-details">New user
                                    <small class="text-muted">You have 10 unread messages</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info">
                                    <i class="mdi mdi-comment-account-outline"></i>
                                </div>
                                <p class="notify-details">Caleb Flakelar commented on Admin
                                    <small class="text-muted">4 days ago</small>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-secondary">
                                    <i class="mdi mdi-heart"></i>
                                </div>
                                <p class="notify-details">Carlos Crouch liked
                                    <b>Admin</b>
                                    <small class="text-muted">13 days ago</small>
                                </p>
                            </a>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="mdi mdi-email-outline noti-icon"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="font-16 text-white m-0">
                                <span class="float-right">
                                    <a href="#" class="text-white">
                                        <small>Clear All</small>
                                    </a>
                                </span>Messages
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">

                            <div class="inbox-widget">
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img
                                                src="{{url('admin')}}/images/users/avatar-1.jpg" class="rounded-circle"
                                                alt=""></div>
                                        <p class="inbox-item-author">Chadengle</p>
                                        <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img
                                                src="{{url('admin')}}/images/users/avatar-2.jpg" class="rounded-circle"
                                                alt=""></div>
                                        <p class="inbox-item-author">Tomaslau</p>
                                        <p class="inbox-item-text text-truncate">I've finished it! See you so...</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img
                                                src="{{url('admin')}}/images/users/avatar-3.jpg" class="rounded-circle"
                                                alt=""></div>
                                        <p class="inbox-item-author">Stillnotdavid</p>
                                        <p class="inbox-item-text text-truncate">This theme is awesome!</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img
                                                src="{{url('admin')}}/images/users/avatar-4.jpg" class="rounded-circle"
                                                alt=""></div>
                                        <p class="inbox-item-author">Kurafire</p>
                                        <p class="inbox-item-text text-truncate">Nice to meet you</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="inbox-item">
                                        <div class="inbox-item-img"><img
                                                src="{{url('admin')}}/images/users/avatar-5.jpg" class="rounded-circle"
                                                alt=""></div>
                                        <p class="inbox-item-author">Shahedk</p>
                                        <p class="inbox-item-text text-truncate">Hey! there I'm available...</p>

                                    </div>
                                </a>
                            </div> <!-- end inbox-widget -->

                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        @if(\Illuminate\Support\Facades\Auth::user()->avatar)
                        <img src="{{asset("user/".\Illuminate\Support\Facades\Auth::user()->avatar)}}" alt="user-image"
                            class="rounded-circle">
                        @else
                        <img src="{{url('admin')}}/images/users/avatar-5.jpg" alt="user-image" class="rounded-circle">
                        @endif
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">
                            {{\Illuminate\Support\Facades\Auth::user()->name}}
                        </span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow text-white m-0">Welcome !</h6>
                        </div>

                        <!-- item-->
                        <a href="{{route('user.profile',\Illuminate\Support\Facades\Auth::user()->id)}}"
                            class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-settings-outline"></i>
                            <span>Settings</span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="mdi mdi-lock-outline"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="{{route('logout')}}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list">
                    <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                        <i class="mdi mdi-settings-outline noti-icon"></i>
                    </a>
                </li>

            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{route('dashboard')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{url('admin')}}/images/logogym.gif" alt="" width="200px">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{url('admin')}}/images/logogym.gif" alt="" height="24">
                    </span>
                </a>

                <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{url('admin')}}/images/logo-light.png" alt="" height="22">
                        <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-lg-text-dark">U</span> -->
                        <img src="{{url('admin')}}/images/logo-sm-light.png" alt="" height="24">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>



            </ul>
        </div>
        <!-- end Topbar -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
     @if($user->hasAnyRole('Super Admin'))
            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Gymmanager</li>

                        <li>
                            <a href="{{route('dashboard')}}">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-account-box-multiple"></i>
                                <span>Tài khoản</span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('user.index')}}">Quản trị người dùng</a></li>
                                <li><a href="{{route('role')}}">Quyền</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-star-off"></i>
                                <span>Nhân viên</span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('listnhanvien')}}">Danh sách nhân viên</a></li>
                                <li><a href="{{route('calamviec')}}">Ca làm việc</a></li>
                                <li><a href="{{route('calamviecnhanvien')}}">Ca làm việc nhân viên</a></li>
                                <li><a href="{{route('listposition')}}">Chức vụ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-account-multiple"></i>
                                <span> Khách hàng </span>
                                {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="{{route('customer')}}">Danh sách khách hàng</a></li>
                                <li><a href="{{route('service')}}">Dịch vụ</a></li>
                                <li><a href="{{route('hymnal.index')}}">Ca tập</a></li>
                                <li><a href="{{ route('package.index') }}">Gói cước</a></li>
                                <li><a href="{{route('listproduct')}}">san pham</a></li>


                            </ul>
                        </li>
{{--                        <li>--}}
{{--                            <a href="javascript: void(0);">--}}
{{--                                <i class="mdi mdi-teach"></i>--}}
{{--                                <span> PT </span>--}}
{{--                            </a>--}}
{{--                            <ul class="nav-second-level" aria-expanded="false">--}}
{{--                                <li><a href="{{route('pt.index')}}">Thông tin PT</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-reflect-vertical"></i>
                                <span> Doanh thu </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="">Doanh thu</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-progress-upload"></i>
                                <span> Quản lý các sản phẩm </span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="">Sản phẩm</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            @elseif($user->hasAnyRole('Admin'))
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Gymmanager</li>

                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-star-off"></i>
                                    <span>Nhân viên</span>
                                    {{--                                <span class="badge badge-danger badge-pill float-right">New</span>--}}
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('listnhanvien')}}">Danh sách nhân viên</a></li>
                                    <li><a href="{{route('calamviec')}}">Ca làm việc</a></li>
                                    <li><a href="{{route('calamviecnhanvien')}}">Ca làm việc nhân viên</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
            @elseif($user->hasAnyRole('pt'))
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Gymmanager</li>

                            <li>
                                <a href="{{route('dashboard')}}">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-teach"></i>
                                    <span> PT </span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('pt.index')}}">Thông tin PT</a></li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
         @endif



            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        @yield('content')


        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="mdi mdi-close"></i>
            </a>
            <h4 class="font-18 m-0 text-white">Tuỳ chỉnh giao diện</h4>
        </div>
        <div class="slimscroll-menu">

            <div class="p-4">
                <div class="alert alert-warning" role="alert">
                    <strong>Tuỳ chỉnh </strong> bảng màu, bố cục,...
                </div>
                <div class="mb-2">
                    <img src="{{url('admin')}}/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                    <label class="custom-control-label" for="light-mode-switch">Chế độ sáng</label>
                </div>

                <div class="mb-2">
                    <img src="{{url('admin')}}/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                </div>
                <div class="custom-control custom-switch mb-3">
                    <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                        data-bsStyle="{{url('admin')}}/css/bootstrap-dark.min.css"
                        data-appStyle="{{url('admin')}}/css/app-dark.min.css" />
                    <label class="custom-control-label" for="dark-mode-switch">Chế độ tối</label>
                </div>

            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
    $(document).ready(function() {
        $('.btn-remove').on('click', function() {
            Swal.fire({
                title: 'Cảnh báo!',
                text: "Bạn chắc chắn muốn xóa thông tin này?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Đồng ý!'
            }).then((result) => {
                if (result.value) {
                    var url = $(this).attr('href');
                    window.location.href = url;
                }
            })
            return false;
        });
    });
    </script>
    <!-- Vendor js -->
    <script src="{{url('admin')}}/js/vendor.min.js"></script>

    <!--Morris Chart-->
{{--    <script src="{{url('admin')}}/libs/morris-js/morris.min.js"></script>--}}
    <script src="{{url('admin')}}/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init js-->
{{--    <script src="{{url('admin')}}/js/pages/dashboard.init.js"></script>--}}

    <!-- App js -->
    <script src="{{url('admin')}}/js/app.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('admin/js/user/user.js')}}"></script>
    <script src="{{asset('admin/js/customer/showCustomer.js')}}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" type="text/javascript"
        charset="utf-8" async defer></script>
    <script type="text/javascript" charset="utf-8">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
    <script>
    $(document).ready(function() {
        $('#calamviec').select2();
    });
    $(document).ready(function() {
        $('#pay_method').select2({
            placeholder: "Mời bạn nhập phương thứ thanh toán"
        });
    });
    $(document).ready(function() {
        $('#id_package').select2({
            placeholder: "Mời bạn chọn tên gói cước "
        });
    });
    $(document).ready(function() {
        $('#id_coach').select2({
            placeholder: "Mời bạn huấn luyện viên"
        });
    });
    $(document).ready(function() {
        $('#id_customer').select2({
            placeholder: "Mời bạn chọn nhập khách hàng"
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('body').on('change', '#date_start', function(event){
            event.preventDefault();
            var val = $(this).val();
            var chuki = $('#chuki').val();
            var numberCk = 0;
            switch(chuki){
                case 'week':
                numberCk = 7;
                break;
                case 'month':
                numberCk = 30;
                break;
                default:
                numberCk = 365;
            }
            var n=  getdate(val,numberCk);
            // datend =  val + chuki

                        console.log(n);
        })
    })
    function getdate(tt,total) {
    var date = new Date(tt);
    var newdate = new Date(date);

    newdate.setDate(newdate.getDate() + total);

    var dd = newdate.getDate();
    var mm = newdate.getMonth() + 1;
    var y = newdate.getFullYear();

    var someFormattedDate = y+'-'+mm+'-'+dd;

document.getElementById("date_end").valueAsDate = new Date(someFormattedDate);
    return someFormattedDate;
}
</script>
</body>

<!-- Mirrored from coderthemes.com/uplon/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2020 19:25:02 GMT -->

</html>