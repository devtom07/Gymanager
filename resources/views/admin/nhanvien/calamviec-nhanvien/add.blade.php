@extends('admin.main')
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
                                <li class="breadcrumb-item active">Tạo mới ca làm việc nhân viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới ca làm việc nhân viên</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới ca làm việc nhân viên</h4>
                        <div class="row">
                                <div class="col-xl-6">
                        <form>       
                                     <div class="form-group">
                                        <label>Tên lịch làm việc</label>
                                        <input class="form-control" type="text" value="" id="example-time-input">
                                    </div>
                           
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ca làm việc (*)</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option></option>
                                            <option>Ca sáng</option>
                                            <option>Ca chiều</option>
                                            <option>Ca tối</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nhân viên (*)</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option></option>
                                            <option>Trần Văn Long</option>
                                            <option>Nguyễn Hữu Tiến</option>
                                            <option>Phan Tuấn Anh</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ngày bắt đầu (*)</label>
                                        <input class="form-control" type="date" value="_/_/_" id="example-time-input">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chu kỳ (*)</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option></option>
                                            <option>Theo tuần</option>
                                            <option>Theo tháng</option>
                                            <option>Luân phiên</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Ngày kết thúc</label>
                                        <input class="form-control" type="date" value="_/_/_" id="example-time-input">
                                    </div>
                        
                                <button type="submit" class="btn btn-primary">Submit</button>
                           
                        </form> </div> </div>
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