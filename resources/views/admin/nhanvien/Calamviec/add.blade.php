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

                        <h4 class="page-title">Tạo mới ca làm việc</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới ca làm việc</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <form method="post" enctype="multipart/form-data">
                                    <div class=" form-group">
                                        <label for="">Tên ca làm việc (*)</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Tên ca làm việc">
                                    </div>
                                    @error('name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Giờ bắt đầu(*)</label>
                                        <input class="form-control" type="time" name="hour_start" value="H:i:s"
                                            id="example-date-input">
                                    </div>
                                    @error('hour_start')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Giờ nghỉ trưa (*)</label>
                                        <input class="form-control" type="time" name="hour_start_center" value="H:i:s"
                                            id="example-time-input">
                                    </div>
                                    @error('hour_start_center')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="">Kết thúc giờ nghỉ trưa (*)</label>
                                        <input class="form-control" type="time" name="hour_end_center" value="H:i:s"
                                            id="example-time-input">
                                    </div>
                                    @error('hour_end_center')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Giờ kết thúc (*)</label>
                                        <input class="form-control" type="time" name="hour_end" value="H:i:s"
                                            id="example-time-input">
                                    </div>
                                    @error('hour_end')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    {{-- <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Còn hiệu lực" name="status" checked>
                                                <label for="inlineRadio1">Còn hiệu lực</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Hết hạn" name="status">
                                                <label for="inlineRadio2"> Hết hạn</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <select class="form-control" id="exampleSelect1" name="status">
                                            <option value="Hoạt động">Hoạt động</option>
                                            <option value="Không hoạt động">Không hoạt động</option>
                                        </select>
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