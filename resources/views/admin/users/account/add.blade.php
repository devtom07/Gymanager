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
                        <li class="breadcrumb-item active">Tạo mới tài khoản</li>
                     </ol>
                  </div>
                  <h4 class="page-title">Tạo mới tài khoản</h4>
               </div>
            </div>
         </div>
         <!-- end page title -->
         <div class="row">
            <div class="col-12">
               <div class="card-box">
                  <h4 class="header-title mb-4">Tạo mới tài khoản</h4>
                  <form method="post" action="{{route('user.store')}}">
                      @csrf
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group">
                              <label for="exampleInputEmail1">Tên tài khoản (*)</label>
                              <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="">
                               @if ($errors->has('name'))
                                   <p style="color: red">{{ $errors->first('name') }}</p>
                               @endif
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Mật khẩu (*)</label>
                              <input name="password" class="form-control" type="password" value="" id="example-date-input">
                               @if ($errors->has('password'))
                                   <p style="color: red">{{ $errors->first('password') }}</p>
                               @endif
                           </div>
                           <div class="form-group">
                              <label for="exampleInputPassword1">Email (*)</label>
                              <input name="email" class="form-control" type="text" value="" id="example-time-input">
                               @if ($errors->has('email'))
                                   <p style="color: red">{{ $errors->first('email') }}</p>
                               @endif
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group">
                              <label>Phân loại tài khoản (*)</label>
                              <select name="role" class="form-control" id="exampleSelect1">
                                  <option></option>
                                  @foreach($role as $roles)
                                 <option value="{{$roles->id}}">{{$roles->name}}</option>
                                  @endforeach
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Nhóm quyền (*)</label>
                              <select multiple name="permission[]" class="form-control" id="exampleSelect1">
                                  @foreach($permission as $permissions)
                                 <option value="{{$permissions->id}}">{{$permissions->name}}</option>
                                  @endforeach
                              </select>
                           </div>
                           <div class="form-group">
                              <label>Nhân viên (*)</label>
                              <select class="form-control" id="exampleSelect1">
                                 <option></option>
                                  @foreach($staff as $staffs)
                                 <option value="{{$staffs->id}}">{{$staffs->name}}</option>
                                  @endforeach
                              </select>
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
