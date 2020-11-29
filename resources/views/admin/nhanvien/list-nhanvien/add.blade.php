@extends('admin.main')
@section('title', 'Tạo mới nhân viên')
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
                                <li class="breadcrumb-item active">Tạo mới nhân viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới nhân viên</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới nhân viên</h4>
                        <form action="{{route('listnhanvien.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ma nhan vien (*)</label>
                                        <input type="text" class="form-control" name="code" id="exampleInputEmail1" placeholder="Ma nhan vien">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Họ và tên">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline col-md-3">
                                                <input type="radio" id="inlineRadio1" value="Nam" name="gender" checked>
                                                <label for="inlineRadio1">Nam</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Nữ" name="gender">
                                                <label for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" placeholder="">
                                        {{-- <img src="public/admin/images" alt=""> --}}
                                    </div>
                                    @error('avatar')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại (*)</label>
                                        <input type="number" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Số điện thoại">
                                    </div>
                                    @error('phone')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
<<<<<<< HEAD

=======
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Đi làm" name="status" checked>
                                                <label for="inlineRadio1">Đang làm </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Nghỉ làm" name="status">
                                                <label for="inlineRadio2">Nghỉ việc</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email (*)</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="email">
                                    </div>
                                    @error('email')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input class="form-control" type="text" name="address" placeholder="Địa chỉ">
                                    </div>
                                    @error('address')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Loại hợp đồng (*)</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline col-md-3">
                                                <input type="radio" id="inlineRadio1" value="Chính thức" name="contract" checked>
                                                <label for="inlineRadio1">Chính thức</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Thử việc" name="contract">
                                                <label for="inlineRadio2">Thử việc</label>
                                            </div>
                                        </div>
                                    </div>
                                    @error('contract')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input class="form-control" type="number" name="wage" placeholder="Mức lương (VND)" >
                                    </div>
                                    @error('wage')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chức danh</label>
                                        <select class="form-control" id="exampleSelect1" name="title">
                                            @foreach ($listTitle as $item)
                                                <option value="{{$item->id}}">
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('title')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
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