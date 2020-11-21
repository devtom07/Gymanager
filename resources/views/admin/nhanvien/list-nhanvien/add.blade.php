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
                        <form action="{{route('listnhanvien.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Họ và tên">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" placeholder="">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại (*)</label>
                                        <input type="number" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Số điện thoại">
                                    </div>
                                    <div class="form-group">
                                        <label>Ca lam viec</label>
                                        <select  class="form-control" id="exampleSelect1" name="work_sift_id">
                                            @foreach ($listWorkSift as $item)
                                        <option value="{{$item->id}}">
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="0" name="status" checked>
                                                <label for="inlineRadio1">Còn hiệu lực</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="1" name="status">
                                                <label for="inlineRadio2"> Hết hạn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email (*)</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input class="form-control" type="text" name="address" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại hợp đồng (*)</label>
                                        <select class="form-control" id="exampleSelect1" name="contract">
                                            <option></option>
                                            <option value="hợp đồng lao động">Hợp đồng lao động</option>
                                            <option value="thực tập">Thực tập</option>
                                            <option value="hợp đồng pt">Hợp đồng PT</option>
                                            <option value="hợp đồng nhân viên">Hợp đồng nhân viên</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input class="form-control" type="number" name="wage" placeholder="Mức lương (VND)" >
                                    </div>
                                    <div class="form-group">
                                        <label>Chức danh</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option></option>
                                            <option>Maketing</option>
                                            <option>Kế toán</option>
                                            <option>Nhân viên lễ tân</option>
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