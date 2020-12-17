@extends('admin.layout.main')
@section('title', 'PT')
@section('content')
        <h2>Thông tin PT</h2>
        <div style="margin-top: 100px;" class="page-content page-container" id="page-content">
                @foreach($pt as $pts)
            <div class="padding">
                <div class="row container d-flex justify-content-center">
                    <div class="col-xl-6 col-md-12">
                        <div class="card user-card-full">
                            <div class="row m-l-0 m-r-0">
                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                    <div class="card-block text-center text-white">
                                        <div class="m-b-25"> <img width="150px" src="{{asset('/staff/'.$pts->staff->avatar)}}" class="img-radius" alt=""> </div>
                                        <h6 class="f-w-600">{{$pts->staff->name}}</h6>
                                        <p>{{$pts->staff->code}}</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Thông tin PT</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">{{$pts->staff->email}}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Số điện thoại</p>
                                                <h6 class="text-muted f-w-400">{{$pts->staff->phone}}</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Số học viên</p>
                                                <h6 class="text-muted f-w-400">{{$count_customer}}</h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-10 f-w-600">Địa chỉ</p>
                                                <h6 class="text-muted f-w-400">{{$pts->staff->address}}</h6>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div style="margin-right: 500px" class="container mt-5 d-flex justify-content-center">
            @foreach($customer_pt as $customer_pts)
            <div style="margin-left: 50px" class="card p-4 mt-3">
                <div class="first">
                    <h6 class="heading">Thông tin học viên</h6>
                    <div class="time d-flex flex-row align-items-center justify-content-between mt-3">
                    </div>
                </div>
                <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt=""> </div>

                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Tên</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->name}}</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Giới tính</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->sex}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Phone</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->phone}}</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Trình độ</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->level}}</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->email}}</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Địa chỉ</p>
                        <h6 class="text-muted f-w-400">{{$customer_pts->customer->address}}</h6>
                    </div>
                </div>
                <div class="third mt-4"> <button class="btn btn-success btn-block"><i class="fa fa-clock-o"></i> Book Now</button>
                </div>
            </div>
            @endforeach
        </div>
        </div>
@endsection






