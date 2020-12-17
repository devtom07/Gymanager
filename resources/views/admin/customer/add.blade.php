@extends('admin.layout.main')
@section('title', 'Tạo mới tài khoản')
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
                                    <li class="breadcrumb-item active">Tạo mới tài khoản</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Đăng ký khách hàng</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên khách hàng (*)</label>
                                            <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                            @if($errors->first('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input  value="{{old('phone')}}" name="phone" class="form-control" type="number"  id="example-date-input">
                                            @if($errors->first('phone'))
                                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mã hóa đơn</label>
                                            <input value="{{old('contract_code')}}" name="contract_code" class="form-control" type="text" id="example-time-input">
                                            @if($errors->first('contract_code'))
                                                <p class="text-danger">{{ $errors->first('contract_code') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email (*)</label>
                                            <input value="{{old('email')}}" name="email" class="form-control" type="text"  id="example-time-input">
                                            @if($errors->first('email'))
                                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Giới tính</label>
                                            <div class="mt-3">
                                                <div class="custom-control custom-radio">
                                                    <input value="nam" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Nam</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input value="nữ" type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                    <label  class="custom-control-label" for="customRadio2">Nữ</label>
                                                </div>
                                            </div>
                                            @if($errors->first('customRadio'))
                                                <p class="text-danger">{{ $errors->first('customRadio') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Số CMND/HC (*)</label>
                                            <input value="{{old('identity_card')}}" name="identity_card"  class="form-control" type="number"  id="example-time-input">
                                            @if($errors->first('identity_card'))
                                                <p class="text-danger">{{ $errors->first('identity_card') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Trình độ</label>
                                            <input value="{{old('level')}}" name="level"  class="form-control" type="text"  id="example-time-input">
                                            @if($errors->first('level'))
                                                <p class="text-danger">{{ $errors->first('level') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Địa chỉ</label>
                                            <textarea  type="text" class="form-control" name="address" placeholder="">{{old('address')}}</textarea>
                                            @if ($errors->has('address'))
                                                <p style="color: red">{{ $errors->first('address') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Ghi chú</label>
                                            <textarea id="editor1"  type="text" class="form-control" name="note" placeholder="">{{old('note')}}</textarea>
                                            @if ($errors->has('note'))
                                                <p style="color: red">{{ $errors->first('note') }}</p>
                                            @endif
                                        </div>

                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                            <!-- end col -->
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <!-- Footer Start -->
        <!-- end Footer -->
    </div>
@endsection()
