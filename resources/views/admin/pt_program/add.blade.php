@extends('admin.layout.main')
@section('title', 'Chương trình PT')
@section('content')
    <div class="container">
        <div class="row" style="margin-left: 200px;margin-top: 100px">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title mb-4">Đăng ký chương trình PT</h4>

                    <div class="row">
                        <div class="col-xl-6">
                            <form action="{{route('ptProgram.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Khách hàng</label>
                                    <select name="customer" class="custom-select mb-3">
                                        <option selected="">choose...</option>
                                        @foreach($customer as $customers)
                                            <option value="{{$customers->id}}">{{$customers->name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->first('customer'))
                                        <p class="text-danger">{{ $errors->first('customer') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày hợp đồng</label>
                                    <input value="{{old('day_contract')}}" type="date" class="form-control"
                                           id="example-date-input" name="day_contract">
                                    @if($errors->first('day_contract'))
                                        <p class="text-danger">{{ $errors->first('day_contract') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số buổi</label>
                                    <input value="{{old('number_sessions')}}" type="number" class="form-control"
                                           id="number_sessions"
                                           name="number_sessions" placeholder="Số buổi tập">
                                    @if($errors->first('number_sessions'))
                                        <p class="text-danger">{{ $errors->first('number_sessions') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tổng số tiền</label>
                                    <input value="{{old('total')}}" type="number" class="form-control totalCustomer"
                                           id="totalCustomer"
                                           name="total" placeholder="Tổng số tiền">
                                    @if($errors->first('total'))
                                        <p class="text-danger">{{ $errors->first('total') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Khách trả</label>
                                    <input  value="{{old('money_paid')}}" type="number" min="0 " class="form-control"
                                           id="money_paid" name="money_paid"
                                           placeholder="Khách trả">
                                    @if($errors->first('money_paid'))
                                        <p class="text-danger">{{ $errors->first('money_paid') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày bắt đầu</label>
                                    <input value="{{old('start_date')}}" type="date" class="form-control"
                                           id="start_date" name="start_date">
                                    @if($errors->first('start_date'))
                                        <p class="text-danger">{{ $errors->first('start_date') }}</p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="status" class="custom-select mb-3">
                                        <option selected="">Đang thuê</option>
                                        <option value="1">Đã xong</option>
                                        <option value="2">Đã chuyển</option>
                                        <option value="3">Hủy</option>
                                        <option value="3">Hết hạn</option>
                                        <option value="3">Bảo lưu</option>
                                    </select>
                                    @if($errors->first('status'))
                                        <p class="text-danger">{{ $errors->first('status') }}</p>
                                    @endif
                                </div>
                        </div><!-- end col -->

                        <div class="col-xl-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Huấn luyện viên</label>
                                <label for="exampleInputEmail1">Khách hàng</label>
                                <select name="pt" class="custom-select mb-3">
                                    <option selected="">choose...</option>
                                    @foreach($pt as $pts)
                                        <option value="{{$pts->id}}">{{$pts->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('pt'))
                                    <p class="text-danger">{{ $errors->first('pt') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số hợp đồng</label>
                                <input value="{{old('contract_code')}}" type="number" class="form-control"
                                       id="contract_code" name="contract_code"
                                       placeholder="Số hợp đồng">
                                @if($errors->first('contract_code'))
                                    <p class="text-danger">{{ $errors->first('contract_code') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Thời lượng (phút)</label>
                                <input value="{{old('time')}}" type="number" class="form-control" id="time" name="time"
                                       placeholder="Thời lượng">
                                @if($errors->first('time'))
                                    <p class="text-danger">{{ $errors->first('time') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label> Phương thức thanh toán</label>
                                <div class="mt-3">
                                    <div class="custom-control custom-radio">
                                        <input value="tiền mặt" type="radio" id="customRadio1" name="customRadio"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Tiền mặt</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input value="chuyển khoản" type="radio" id="customRadio2" name="customRadio"
                                               class="custom-control-input" value="Click">
                                        <label class="custom-control-label " for="customRadio2">Tài khoản ngân
                                            hàng</label>
                                    </div>
                                </div>
                                @if($errors->first('customRadio'))
                                    <p class="text-danger">{{ $errors->first('customRadio') }}</p>
                                @endif
                            </div>
                            <div hidden class="form-group" id="bank_account1">
                                <label for="exampleInputEmail1">Số tài khoản ngân hàng</label>
                                <input type="number" class="form-control" name="Bank_account"
                                       placeholder="Số tài khoản ngân hàng">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Còn nợ</label>
                                <input value="{{old('still_owe')}}" type="number" class="form-control" id="still_owe"
                                       name="still_owe"
                                       placeholder="Còn nợ">
                                @if($errors->first('still_owe'))
                                    <p class="text-danger">{{ $errors->first('still_owe') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày kết thúc</label>
                                <input type="date" class="form-control" id="end_date" name="end_date">
                                @if($errors->first('end_date'))
                                    <p class="text-danger">{{ $errors->first('end_date') }}</p>
                                @endif
                            </div>
                        </div><!-- end col -->
                        <div class="col-md-12">
                            <div class="form-group col-md-3">
                                <label for="exampleInputEmail1">Gói tập</label>
                                <select id="package_pt" name="package" class="custom-select mb-3">
                                    <option selected="">choose...</option>
                                    @foreach($package as $packages)
                                        <option value="{{$packages->id}}">{{$packages->name}}</option>
                                    @endforeach
                                </select>
                                @if($errors->first('package'))
                                    <p class="text-danger">{{ $errors->first('package') }}</p>
                                @endif
                            </div>
                            <div class="form-group col-md-12">
                                <label>Lịch tập</label>
                                <div class="row">
                                    @foreach($schedule as $schedules)
                                        <div class="col-md-2">
                                            <label class="label">{{$schedules->name}}</label>
                                            <br>
                                            <input value="{{$schedules->id}}" name="schedule[]" type="checkbox"
                                                   class="checkbox">
                                        </div>
                                    @endforeach
                                </div>
                                @if($errors->first('schedule'))
                                    <p class="text-danger">{{ $errors->first('schedule') }}</p>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div><!-- end row -->
                </div>
            </div><!-- end col -->
        </div>
    </div>
    <script>


    </script>





@endsection