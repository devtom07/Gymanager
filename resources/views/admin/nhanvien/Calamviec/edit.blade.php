@extends('admin.layout.main')
@section('title', 'Tạo mới ca làm việc')
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
                                <li class="breadcrumb-item active">Tạo mới ca làm việc</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Cập nhật ca làm việc</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Cập nhật ca làm việc</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post">
                                    <div class=" form-group">
                                        <label for="exampleInputEmail1">Tên ca làm việc (*)</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Tên ca làm việc" value="{{$work_sift->name}}">
                                    </div>
                                    @error('name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giờ bắt đầu(*)</label>
                                        <input class="form-control" type="time" name="hour_start"
                                            id="example-date-input" value="{{$work_sift->hour_start}}">
                                    </div>
                                    @error('hour_start')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giờ nghỉ trưa (*)</label>
                                        <input class="form-control" type="time" name="hour_start_center"
                                            id="example-time-input" value="{{$work_sift->hour_start_center}}">
                                    </div>
                                    @error('hour_start_center')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Kết thúc giờ nghỉ trưa (*)</label>
                                        <input class="form-control" type="time" name="hour_end_center"
                                            id="example-time-input" value="{{$work_sift->hour_end_center}}">
                                    </div>
                                    @error('hour_end_center')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Giờ kết thúc (*)</label>
                                        <input class="form-control" type="time" name="hour_end" id="example-time-input"
                                            value="{{$work_sift->hour_end}}">
                                    </div>
                                    @error('hour_end')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {{csrf_field()}}
                                </form>
                            </div>
                        </div>
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
