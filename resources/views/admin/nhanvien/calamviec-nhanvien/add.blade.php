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
                        <form action="{{ route('calamviecnhanvien.post') }}" method="post">      
                         @csrf
                                     <div class="form-group">
                                        <label>Tên lịch làm việc</label>
                                        <input class="form-control" type="text" name="work_schedule_name" value="" id="example-time-input">
                                    </div>
                                       @error('work_schedule_name')
                                            <p style="color:red">{{$message}}</p>
                                        @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ca làm việc (*)</label>
                                        <select class="form-control" id="exampleSelect1" name="work_sift_id">
                                            @foreach($data as $work_sifts)
                                            <option value="{{ $work_sifts->id }}">{{ $work_sifts->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- nhan vien --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nhân viên (*)</label>
                                        <select class="form-control" name="staff_id" id="exampleSelect1">
                                            <option value="1">Trần Văn Long</option>
                                            <option value="2">Nguyễn Hữu Tiến</option>
                                            <option value="3">Phan Tuấn Anh</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ngày bắt đầu (*)</label>
                                        <input class="form-control" type="date" name="date_start" value="Y.m.d" id="example-time-input">
                                    </div>
                                    @error('date_start')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chu kỳ (*)</label>
                                        <input class="form-control" type="text" name="cycle" value="" id="example-time-input">
                                    </div>
                                    @error('cycle')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Ngày kết thúc</label>
                                        <input class="form-control" type="date" name="date_end" value="Y.m.d" id="example-time-input">
                                    </div>
                                    @error('date_end')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
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
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
@endsection()