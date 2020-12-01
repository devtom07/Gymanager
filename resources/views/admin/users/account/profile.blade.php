@extends('admin.main')
@section('title', 'Profile')
@section('content')
    @foreach($users as $user)
    <h2>Thông tin thành viên</h2>
    <div class="container pb-5" style="margin-top: 50px; margin-left: 250px ">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    @if($user->avatar)
                                        <img src="{{asset("user/".$user->avatar)}}" id="imgProfile"
                                             style="width: 150px; height: 150px" class="img-thumbnail"/>
                                    @else
                                        <img src="http://placehold.it/150x150" id="imgProfile"
                                             style="width: 150px; height: 150px" class="img-thumbnail"/>
                                    @endif
                                    <form action="{{route('user.ImageProfile',$user->id)}}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="middle mt-3">
                                            <input class="form-control" type="file" onchange="this.form.submit()"
                                                   id="profilePicture"
                                                   name="cover"/>
                                        </div>
                                    </form>
                                    <div class="userData mt-3">
                                        <p style="color: #0a0a0a;font-size: 20px; font-family: inherit">Thông tin
                                            cá nhân</p>
                                    </div>
                                        @foreach($errors->all() as $error)
                                            <li style="color: red">{{$error}}</li>
                                        @endforeach


                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard"
                                           value="Discard Changes"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab"
                                           href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Chi
                                            tiết</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab"
                                           href="#connectedServices" role="tab" aria-controls="connectedServices"
                                           aria-selected="false">Cập nhật</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="connectedServices-tab-1" data-toggle="tab"
                                           href="#connectedServices1" role="tab" aria-controls="connectedServices1"
                                           aria-selected="false">Mật khẩu</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                         aria-labelledby="basicInfo-tab">
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style=" font-family: inherit">Tên</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->name}}
                                            </div>

                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-family: inherit">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->email}}
                                            </div>

                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-family: inherit">Số điện thoại</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->phone}}
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-family: inherit">Nhân viên</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                {{$user->staff->name}}
                                            </div>
                                        </div>
                                        <hr/>

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-family: inherit">Chức vụ</label>
                                            </div>
                                                <div class="col-md-8 col-6">
                                           @foreach($user->role as $role)
                                               {{$role->name}}
                                                    @endforeach
                                                </div>
                                        </div>
                                        <hr/>
                                        <hr/>
                                        <div class="row" style="margin-left: 400px">
                                            <a href="" class="btn btn-secondary waves-effect">
                                                Trở về
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="connectedServices" role="tabpanel"
                                         aria-labelledby="ConnectedServices-tab">
                                        <form method="post" action="{{route('user.updateProfile',$user->id)}}">
                                            @csrf
                                            @if($errors->all())
                                                <div id="msg_div" class="alert alert-danger d-none" role="alert">
                                                    <span id="res_message"></span>
                                                </div>
                                            @endif
                                            <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                                 aria-labelledby="basicInfo-tab">
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style=" font-family: inherit" >Tên (*)</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control" type="text" name="name"
                                                               value="{{$user->name}}"/>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style="font-family: inherit" >Số điện thoại (*)</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control " type="text" name="phone"
                                                               value="{{$user->phone}}"/>
                                                    </div>

                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style="font-family: inherit">Email</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control" type="text" name="email"
                                                               value="{{$user->email}}"/>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row mt-2">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <div>
                                                            <p>Ghi chú: Mục tích dấu (*) là bắt buộc!!!</p>
                                                        </div>
                                                        <input class="btn btn-primary" type="submit" value="Cập nhập"/>
                                                        <a class="btn btn-secondary"
                                                           href="">Trở
                                                            lại</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="connectedServices1" role="tabpanel"
                                         aria-labelledby="ConnectedServices-tab-1">
                                        <form method="post" action="{{route('user.updatePassword',$user->id)}}">
                                            @csrf
                                            @if($errors->all())
                                                <div id="msg_div" class="alert alert-danger d-none" role="alert">
                                                    <span id="res_message"></span>
                                                </div>
                                            @endif
                                            <div class="tab-pane fade show active" id="basicInfo" role="tabpanel"
                                                 aria-labelledby="basicInfo-tab">

                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style="font-family: inherit">Mật khẩu hiện tại</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control" type="password" name="current_password"/>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style="font-family: inherit">Mật khẩu mới</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control" type="password" name="password"/>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                        <label style="font-family: inherit">Xác nhận lại mật khẩu</label>
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <input class="form-control" type="password" name="password_confirm"/>
                                                    </div>
                                                </div>
                                                <hr/>
                                                <div class="row mt-2">
                                                    <div class="col-sm-3 col-md-2 col-5">
                                                    </div>
                                                    <div class="col-md-8 col-6">
                                                        <div>
                                                            <p>Ghi chú: Mục tích dấu (*) là bắt buộc!!!</p>
                                                        </div>
                                                        <input class="btn btn-primary" type="submit" value="Cập nhập"/>
                                                        <a class="btn btn-secondary"
                                                           href="">Trở
                                                            lại</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
@endsection






