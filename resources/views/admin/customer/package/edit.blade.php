@extends('admin.main')
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
                        <form action="{{ route('package.edit', ['id'=>$package->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">tên gói tâp(*)</label>
                                        <input type="text" class="form-control" name="name" value="{{ $package->name }}" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá (*)</label>
                                        <input type="number" class="form-control" name="price" value="{{ $package->price }}" placeholder="">
                                        {{-- <img src="public/admin/images" alt=""> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kiểu sử dụng (*)</label>
                                        <select name="type_use" value="{{ $package->type_use }}" id="">
                                            <option value="theo ngày">Theo ngày</option>
                                            <option value="theo tuần">Theo tuần</option>
                                            <option value="theo tháng">Theo tháng</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Đang tập" name="status" checked>
                                                <label for="inlineRadio1">Đang tập </label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Nghỉ tập" name="status">
                                                <label for="inlineRadio2">Nghỉ tập</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">dịch vụ free (*)</label>
                                        <select class="form-group" name="free_service[]" value="{{ $package->free_service }}" id="free_service" multiple>
                                            <option value="khăn">khăn</option>
                                            <option value="vé xe">vé xe</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả</label>
                                        <input class="form-control" type="text" name="desc" value="{{ $package->desc }}" placeholder="Địa chỉ">
                                    </div>
                                    <div class="form-group">
                                        <label>Ca tập (*)</label>
                                        <select class="form-control" id="exampleSelect1" value="{{ $package->id_catap }}" name="id_catap">
                                            <option value="ca 1">ca 1</option>
                                            <option value="ca 2">ca 2</option>
                                            <option value="ca 3">ca 3</option>
                                            <option value="ca 4">ca 4</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày bắt đầu(*)</label>
                                        <input type="date" class="form-control" name="start_date" value="{{ $package->start_date }}" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày kết thúc(*)</label>
                                        <input type="date" class="form-control" name="end_date" value="{{ $package->end_date }}" placeholder="">
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