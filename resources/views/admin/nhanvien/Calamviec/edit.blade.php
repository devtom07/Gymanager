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
                                <li class="breadcrumb-item active">Tạo mới ca làm việc</li>
                            </ol>
                        </div>
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
                        <form>
                           
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên ca làm việc (*)</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên ca làm việc">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày tạo (*)</label>
                                        <input class="form-control" type="date" value="_/_/_" id="example-date-input">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giờ làm việc (*)</label>
                                        <input class="form-control" type="time" value="hh:dd:ss" id="example-time-input">
                                    </div>
                                    <div class="form-group">
                                        <label>Giờ kết thúc (*)</label>
                                        <input class="form-control" type="time" value="hh:dd:ss" id="example-time-input">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="option1" name="radioInline" checked="">
                                                <label for="inlineRadio1">Còn hiệu lực</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="option2" name="radioInline">
                                                <label for="inlineRadio2"> Hết hạn</label>
                                            </div>
                                        </div>
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