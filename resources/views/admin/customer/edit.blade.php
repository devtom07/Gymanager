@extends('admin.layout.main')
@section('title', 'Tạo mới tài khoản')
@section('content')
    @foreach($customer as $customers)
    <div class="container">
        <div class="col-12" style="margin-left: 120px;margin-top: 100px">
            <h4 class="header-title">Đăng ký khách hàng</h4>
            <br>
            <form id="basic-form" action="{{route('customer.update',$customers->customer->id)}}" method="post">
                @csrf
                <div>
                    <h3>Khách hàng</h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputEmail1">Tên khách hàng (*)</label>
                                    <input value="{{$customers->customer->name}}" name="name_customer" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                    @if($errors->first('name_customer'))
                                        <p class="text-danger">{{ $errors->first('name_customer') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input  value="{{$customers->customer->phone}}" name="phone" class="form-control" type="number"  id="example-date-input">
                                    @if($errors->first('phone'))
                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Mã hóa đơn</label>
                                    <input value="{{$customers->customer->contract_code}}" name="contract_code" class="form-control" type="text" id="example-time-input">
                                    @if($errors->first('contract_code'))
                                        <p class="text-danger">{{ $errors->first('contract_code') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Email (*)</label>
                                    <input value="{{$customers->customer->email}}" name="email" class="form-control" type="text"  id="example-time-input">
                                    @if($errors->first('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Số CMND/HC (*)</label>
                                    <input value="{{$customers->customer->identity_card}}" name="identity_card"  class="form-control" type="number"  id="example-time-input">
                                    @if($errors->first('identity_card'))
                                        <p class="text-danger">{{ $errors->first('identity_card') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Trình độ</label>
                                    <input value="{{$customers->customer->level}}" name="level"  class="form-control" type="text"  id="example-time-input">
                                    @if($errors->first('level'))
                                        <p class="text-danger">{{ $errors->first('level') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Địa chỉ</label>
                                    <textarea id="editor2"  type="text" class="form-control" name="address" placeholder="">{{$customers->customer->address}}</textarea>
                                    @if ($errors->has('address'))
                                        <p style="color: red">{{ $errors->first('address') }}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Ghi chú</label>
                                    <textarea id="editor1"  type="text" class="form-control" name="note" placeholder="">{{$customers->customer->note}}</textarea>
                                    @if ($errors->has('note'))
                                        <p style="color: red">{{ $errors->first('note') }}</p>
                                    @endif
                                </div>
                            </div>

                        </div><!-- end row -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="exampleInputPassword1">Giới tính</label>
                                    @if($customers->customer->sex == 'nam')
                                    <div class="mt-3">
                                        <div class="custom-control custom-radio">
                                            <input checked value="nam" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Nam</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input value="nữ" type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label  class="custom-control-label" for="customRadio2">Nữ</label>
                                        </div>
                                    </div>
                                    @else
                                        <div class="mt-3">
                                            <div class="custom-control custom-radio">
                                                <input  value="nam" type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">Nam</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input checked value="nữ" type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                <label  class="custom-control-label" for="customRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    @endif
                                    @if($errors->first('customRadio'))
                                        <p class="text-danger">{{ $errors->first('customRadio') }}</p>
                                    @endif
                                </div>
                            </div><!-- end row -->
                    </section>
                    <h3>Dịch vụ</h3>
                    <section>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="name">Tên dịch vụ</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="Tên dịch vụ" value="{{$customers->name}}">
                                </div>
                                @error('name')
                                <p style="color:red">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="id_package">Gói cước</label>
                                    <select class="form-control" id="id_package" name="id_package">
                                        @foreach($data_packages as $packages)
                                            @if($packages->id == $customers->id_package)
                                            <option selected value="{{ $packages->id }}">{{ $packages->name }}</option>
                                            @else
                                                <option value="{{ $packages->id }}">{{ $packages->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('id_package')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Ngày kích hoạt</label>
                                    <input type="date" class="form-control" id="active_date" name="active_date"
                                           placeholder="Ngày kích hoạt" value="{{$customers->active_date}}">
                                    @error('active_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Tổng tiền</label>
                                    <input type="member" id="total_package" class="form-control"
                                           placeholder="Tổng tiền khách phải thanh toán" name='total_package'
                                           value="{{$customers->total_package}}">
                                    @error('total_package')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Số tiền khách trả</label>
                                    <input type="member" id="customers_pay" class="form-control"
                                           placeholder="Số tiền khách đã thanh toán" name='customers_pay'
                                           value="{{$customers->customers_pay}}">
                                    @error('customers_pay')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Phương thức thanh toán</label>
                                    <select class="form-control" id="pay_method" name="pay_method">
                                        @if($customers->pay_method == 'Tiền mặt')
                                        <option selected value="Tiền mặt">Tiền Mặt</option>
                                        <option value="Chuyển khoản">Chuyển khoản</option>
                                        @else
                                            <option  value="Tiền mặt">Tiền Mặt</option>
                                            <option selected value="Chuyển khoản">Chuyển khoản</option>
                                        @endif
                                    </select>
                                    @error('pay_method')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Ngày bắt đầu</label>
                                    <input type="date" class="form-control" id="start_date" name="start_date"
                                           placeholder="Ngày bắt đầu" value="{{$customers->start_date}}">
                                    @error('start_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label for="">Ngày kết thúc</label>
                                    <input type="date" class="form-control" id="end_date" name="end_date"
                                           placeholder="Ngày bắt đầu" value="{{$customers->end_date}}">
                                    @error('end_date')
                                    <p style=" color:red">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group clearfix">
                                    <label>Trạng thái</label>
                                    @if($customers->status == 'Không kèm PT')
                                    <div class="mt-4">
                                        <div class="radio radio-info form-check-inline">
                                            <input  type="radio" id="inlineRadio1" value="Không kèm PT" name="status"
                                                   checked>
                                            <label for="inlineRadio1">Không kèm PT</label>
                                        </div>
                                        <div class="radio form-check-inline">
                                            <input type="radio" id="inlineRadio2" value="Kèm PT" name="status">
                                            <label for="inlineRadio2">Kèm PT</label>
                                        </div>
                                    </div>
                                    @else
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Không kèm PT" name="status"
                                                       >
                                                <label for="inlineRadio1">Không kèm PT</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Kèm PT" name="status" checked>
                                                <label for="inlineRadio2">Kèm PT</label>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div><!-- end row -->


                    </section>

                </div>
            </form>
        </div>
    </div>
    @endforeach
@endsection()
