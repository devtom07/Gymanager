@extends('admin.main')
@section('title', 'Chương trình PT')
@section('content')
    <div class="container" >
    <div class="row" style="margin-left: 200px;margin-top: 100px">
        <div class="col-12">
            <div class="card-box">
                <h4 class="header-title mb-4">Đăng ký chương trình PT</h4>

                <div class="row">
                    <div class="col-xl-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Khách hàng</label>
                                    <select name="customer" class="custom-select mb-3">
                                        <option selected="">choose...</option>
                                        @foreach($customer as $customers)
                                        <option value="{{$customers->id}}">{{$customers->name}}</option>
                                        @endforeach
                                    </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày hợp đồng</label>
                                <input type="date" class="form-control" id="example-date-input" name="day_contract">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Số buổi</label>
                                <input type="number" class="form-control" id="number_sessions" name="number_sessions" placeholder="Số buổi tập">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tổng số tiền</label>
                                <input disabled type="number" class="form-control totalCustomer" id="totalCustomer" name="total" placeholder="Tổng số tiền" value="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Khách trả</label>
                                <input type="number" min="0 " class="form-control" id="money_paid" name="money_paid" placeholder="Khách trả">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ngày bắt đầu</label>
                                <input type="date" class="form-control" id="start_date" name="start_date">
                            </div>
                            <div class="form-group">
                            <label>Trạng thái</label>
                            <select class="custom-select mb-3">
                                <option selected="">Đang thuê</option>
                                <option value="1">Đã xong</option>
                                <option value="2">Đã chuyển</option>
                                <option value="3">Hủy</option>
                                <option value="3">Hết hạn</option>
                                <option value="3">Bảo lưu</option>
                            </select>
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
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Số hợp đồng</label>
                            <input type="number" class="form-control" id="contract_code" name="contract_code" placeholder="Số hợp đồng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thời lượng (phút)</label>
                            <input type="number" class="form-control" id="time" name="time" placeholder="Thời lượng">
                        </div>
                            <div class="form-group">
                                <label>  Phương thức thanh toán</label>
                                <div class="mt-3">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Tiền mặt</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" value="Click">
                                        <label class="custom-control-label " for="customRadio2">Tài khoản ngân hàng</label>
                                    </div>
                                </div>
                            </div>
                        <div hidden class="form-group" id="bank_account1">
                            <label for="exampleInputEmail1">Số tài khoản ngân hàng</label>
                            <input type="number" class="form-control"  name="Bank_account" placeholder="Số tài khoản ngân hàng">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Còn nợ</label>
                            <input disabled type="number" class="form-control" id="still_owe" name="still_owe" placeholder="Còn nợ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="end_date" name="end_date">
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
                                </select>                            </div>
                            <div class="form-group col-md-12" >
                                <label>Lịch tập</label>
                                <div class="row">
                                <div class="col-md-2">
                                <label class="label">Thứ 2</label>
                                    <br>
                                <input name="schedule" type="checkbox" class="checkbox" >
                                </div>
                                    <div class="col-md-2">
                                        <label class="label">Thứ 3</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label">Thứ 4</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label">Thứ 5</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label">Thứ 6</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label">Thứ 7</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                    <div class="col-md-2">
                                        <label class="label">Chủ nhật</label>
                                        <br>
                                        <input name="schedule" type="checkbox" class="checkbox" >
                                    </div>
                                </div>

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