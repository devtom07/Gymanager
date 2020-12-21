
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
                                <div class="card-box tilebox-one bg-success">
                                    <i class="mdi mdi-account text-white"></i>
                                    <h6 class="text-uppercase mt-0 text-white">Tài khoản</h6>
                                    <h3 class="my-3 text-white" >{{$countAccount}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one bg-info">
                                    <i class="mdi mdi-book text-white"></i>
                                    <h6 class=" text-uppercase mt-0 text-white">Nhân viên</h6>
                                    <h3 class="my-3 text-white">{{$countStaff}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one bg-warning">
                                    <i class="mdi mdi-account text-white"></i>
                                    <h6 class=" text-uppercase mt-0 text-white">Khách hàng</h6>
                                    <h3 class="my-3 text-white">{{$countCustomer}}</h3>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one bg-danger">
                                    <i class="mdi mdi-view-dashboard text-white"></i>
                                    <h6 class=" text-uppercase mt-0 text-white">Dịch vụ</h6>
                                    <h3 class="my-3 text-white" >{{$countService}}</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one bg-secondary">
                                    <i class="mdi mdi-star text-white"></i>
                                    <h6 class=" text-uppercase mt-0 text-white">Sản phẩm</h6>
                                    <h3 class="my-3 text-white" >{{$countProduct}}</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one bg-dark">
                                    <i class="mdi mdi-bread-slice text-white"></i>
                                    <h6 class=" text-uppercase mt-0 text-white">Bài viết</h6>
                                    <h3 class="my-3 text-white" >{{$blog}}</h3>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

            </div>
                    <div class="container">
                        <h2 class="text-success">MENU</h2>
                        <div class="button-list">
                            <a href="{{route('user.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Tài khoản</a>
                            <a href="{{route('listnhanvien')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Nhân viên</a>
                            <a href="{{route('customer.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Khách hàng</a>
                            <a href="{{route('service')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Dịch vụ</a>
                            <a href="{{route('ptProgram.index')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Chương trình PT</a>
                            <a href="{{route('listproduct')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Quản lý sản phẩm</a>
                            <a href="{{route('listRevenue')}}" type="button" class="btn btn-warning waves-effect waves-light width-lg text-white">Doanh thu</a>

                        </div>
                    </div>
@endsection()

     