
@extends('admin.layout.main')
@section('title', 'Dashboard')
@section('content')
        <!-- Begin page -->
      

            
            <!-- Topbar Start -->
  
            <!-- end Topbar -->

            
            <!-- ========== Left Sidebar Start ========== -->
           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">DASHBOARD</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-account"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Tài khoản</h6>
                                    <h3 class="my-3" >{{$countAccount}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-book"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Nhân viên</h6>
                                    <h3 class="my-3">{{$countStaff}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-account"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Khách hàng</h6>
                                    <h3 class="my-3">{{$countCustomer}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Dịch vụ</h6>
                                    <h3 class="my-3" >{{$countService}}</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-star"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Sản phẩm</h6>
                                    <h3 class="my-3" >{{$countProduct}}</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="mdi mdi-bread-slice"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Bài viết</h6>
                                    <h3 class="my-3" >{{$blog}}</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

            </div>
                    <div class="container">
                        <h2 class="text-success">MENU</h2>
                        <div class="button-list">
                            <a href="{{route('user.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Tài khoản</a>
                            <a href="{{route('listnhanvien')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Nhân viên</a>
                            <a href="{{route('customer.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Khách hàng</a>
                            <a href="{{route('service')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Dịch vụ</a>
                            <a href="{{route('ptProgram.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Chương trình PT</a>
                            <a href="{{route('listproduct')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Quản lý sản phẩm</a>
                            <a href="{{route('listRevenue')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg">Doanh thu</a>

                        </div>
                    </div>
@endsection()

     