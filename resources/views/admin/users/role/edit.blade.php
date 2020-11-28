@extends('admin.main')
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
                                    <li class="breadcrumb-item active">Cập nhật chức vụ</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Cập nhật chức vụ</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    @foreach($roles as $role)
                    <div class="col-12">
                        <div class="card-box">
                            <h4 class="header-title mb-4">Cập nhật chức vụ</h4>
                            <div class="row">
                                <div class="col-xl-6">
                                    <form action="{{route('role.update',$role->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên nhóm quyền (*)</label>
                                            <input value="{{$role->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                                            @if($errors->first('name'))
                                                <p class="text-danger">{{ $errors->first('name') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Chon nhóm chức năng (*)</label>
                                            <select multiple name="permission[]" class="form-control" id="exampleSelect1">
                                                @foreach($permission as $permissions)
                                                    <option {{$role_permission->contains($permissions->id) ? 'selected' : ''}} value="{{$permissions->id}}">{{$permissions->name}}</option>
                                                @endforeach
                                            </select>
                                            @if($errors->first('permission'))
                                                <p class="text-danger">{{ $errors->first('permission') }}</p>
                                            @endif
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end col -->
                    @endforeach
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