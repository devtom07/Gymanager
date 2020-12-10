@extends('admin.layout.main')
@section('title', 'Đăng ký dịch vụ')
@section('content')
<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Gymanager</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Đăng ký dịch vụ</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Đăng ký dịch vụ</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card-box">

                        <h4 class="header-title mb-4">Đăng ký dịch vụ</h4>

                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="name">Tên</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                               placeholder="Tên" value="{{old('name')}}">
                                    </div>
                                    @error('name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="id_package">Gói cước</label>
                                        <select class="form-control" id="id_package" name="id_package"
                                            value="{{old('id_package')}}">
                                            <option value=""></option>
                                            @foreach($data_packages as $packages)
                                            <option value="{{ $packages->id }}">{{ $packages->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_package')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Tên khách hàng</label>
                                        <select class="form-control" id="id_customer" name="id_customer"
                                            value="{{old('id_customer')}}">
                                            <option value=""></option>
                                            @foreach($data as $customers)
                                            <option value="{{ $customers->id }}">{{ $customers->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_customer')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Tên huấn luyện viên</label>
                                        <select class="form-control" id="id_coach" name="id_coach"
                                            value="{{old('id_coach')}}">

                                            <option value=""></option>"
                                            @foreach($staff as $Pt)
                                            <option value="{{$Pt->id}}">{{$Pt->name}}</option>

                                            @endforeach
                                        </select>

                                    </div>
                                    @error('id_coach')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Ngày bắt đầu</label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            placeholder="Ngày bắt đầu" value="{{old('start_date')}}">
                                    </div>
                                    @error('start_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Ngày kết thúc</label>
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            placeholder="Ngày bắt đầu" value="{{old('end_date')}}">
                                    </div>
                                    @error('end_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Ngày kích hoạt</label>
                                        <input type="date" class="form-control" id="active_date" name="active_date"
                                            placeholder="Ngày kích hoạt" value="{{old('active_date')}}">
                                    </div>
                                    @error('active_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                            </div><!-- end col -->

                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="">Tổng tiền</label>
                                    <input type="member" id="total_package" class="form-control"
                                        placeholder="Tổng tiền khách phải thanh toán" name='total_package'
                                        value="{{old('total_package')}}">
                                </div>
                                @error('total_package')
                                <p style=" color:red">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <label for="">Số tiền khách trả</label>
                                    <input type="member" id="customers_pay" class="form-control"
                                        placeholder="Số tiền khách đã thanh toán" name='customers_pay'
                                        value="{{old('customers_pay')}}">
                                </div>
                                @error('customers_pay')
                                <p style=" color:red">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <label for="">Phương thức thanh toán</label>
                                    <select class="form-control" id="pay_method" name="pay_method"
                                        value="{{old('pay_method')}}">
                                        <option value=""></option>
                                        <option value="Tiền mặt">Tiền Mặt</option>
                                        <option value="Chuyển khoản">Chuyển khoản</option>
                                    </select>
                                </div>
                                @error('pay_method')
                                <p style="color:red">{{$message}}</p>
                                @enderror
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                            {{csrf_field()}}
                            </form>
                        </div><!-- end col -->

                    </div><!-- end row -->
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->




        <!-- end row -->

    </div> <!-- end container-fluid -->

</div> <!-- end content -->



<!-- Footer Start -->

<!-- end Footer -->

</div>
@endsection()