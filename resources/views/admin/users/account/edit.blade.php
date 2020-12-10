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
                            <h4 class="page-title">Cập nhật tài khoản</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Cập nhật tài khoản</h4>
                            <form method="post" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên tài khoản (*)</label>
                                            <input value="{{$user->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                            @if($errors->first('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mật khẩu (*)</label>
                                            <input  name="password" class="form-control" type="password"  id="example-date-input" >
                                            @if($errors->first('password'))
                                                <p class="text-danger">{{ $errors->first('password') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email (*)</label>
                                            <input value="{{$user->email}}" name="email" class="form-control" type="text" value="" id="example-time-input">
                                            @if($errors->first('email'))
                                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone (*)</label>
                                            <input value="{{$user->phone}}" name="phone"  class="form-control" type="text"  id="example-time-input">
                                            @if($errors->first('phone'))
                                                <p class="text-danger">{{ $errors->first('phone') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Nhân viên (*)</label>
                                            <select name="staff_user" class="form-control" id="exampleSelect1">
                                                @foreach($staff as $staffs )
                                                    @if($staffs->id == $user->staff_id)
                                                        <option selected  value="{{$staffs->id}}">{{$staffs->name}}</option>
                                                    @else
                                                        <option  value="{{$staffs->id}}">{{$staffs->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if($errors->first('staff'))
                                                <p class="text-danger">{{ $errors->first('staff') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            @if($user->avatar)
                                            <img width="200px" src="{{asset('user/'.$user->avatar)}}">
                                            @else
                                                <img width="200px" src="http://placehold.it/150x150">
                                            @endif

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputImage">Avatar (*)</label>
                                            <input value="{{old('avatar')}}" name="avatar" class="form-control-file" type="file" id="example-time-input" >
                                            @if($errors->first('avatar'))
                                                <p class="text-danger">{{ $errors->first('avatar') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Phân loại tài khoản (*)</label>
                                            <br>
                                            <select  multiple  name="role[]" class="selected" id="exampleSelect1">
                                                @foreach($role_user as  $roles )
                                                    <option {{$listRoleUser->contains($roles->id) ? 'selected' : '' }} value="{{$roles->id}}">{{$roles->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->first('role'))
                                                <p class="text-danger">{{ $errors->first('role') }}</p>
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
