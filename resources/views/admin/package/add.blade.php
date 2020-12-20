@extends('admin.layout.main')
@section('title', 'Tạo mới nhân viên')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
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
                                <li class="breadcrumb-item active">Tạo mới gói tập</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới gói tập</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới gói tập</h4>
                        <form action="{{ route('package.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">tên gói tâp(*)</label>
                                        <input type="text" class="form-control" placeholder="tên gói tập" name="name" value="{{ old('name') }}" placeholder="">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá (*)</label>
                                        <input type="number" class="form-control" placeholder="Giá" name="price" value="{{ old('price') }}" placeholder="">
                                        {{-- <img src="public/admin/images" alt=""> --}}
                                    </div>
                                    @error('price')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kiểu sử dụng (*)</label>
                                        <select name="type_use" class="form-group" id="">
                                            <option value="theo ngày">Theo ngày</option>
                                            <option value="theo tuần">Theo tuần</option>
                                            <option value="theo tháng">Theo tháng</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Đang hoạt dộng" name="status" checked>
                                                <label for="inlineRadio1">Đang hoạt dộng </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Hết hạn" name="status">
                                                <label for="inlineRadio2">Hết hạn</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Dich vu free</label><br>
                                        <input type="radio" id="male" checked name="free_service" value="Nước">
                                        <label for="male">Nước</label><br>
                                        <input type="radio" id="female" name="free_service" value="Vé xe">
                                        <label for="female">Vé xe</label><br>
                                        <input type="radio" id="female" name="free_service" value="không">
                                        <label for="female">Không</label><br>
                                    </div>
                                    @error('free_service')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                   
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input class="form-control" type="text" name="desc" value="{{ old('desc') }}" placeholder="Mô tả">
                                    </div>
                                    @error('desc')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày bắt đầu(*)</label>
                                        <input type="date" class="form-control" name="start_date" value="{{ old('start_date') }}" placeholder="">
                                    </div>
                                    @error('start_date')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày kết thúc(*)</label>
                                        <input type="date" class="form-control" name="end_date" value="{{ old('end_date') }}" placeholder="">
                                    </div>
                                    @error('end_date')
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