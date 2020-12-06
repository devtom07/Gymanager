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
                                        <input class="form-control" type="text" name="work_schedule_name" value="{{  old('work_schedule_name')}}" id="example-time-input">
                                    </div>
                                    @error('work_schedule_name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ca làm việc (*)</label>
                                        <select class="form-control" id="calamviec" name="work_sift_id[]" multiple>
                                            @foreach($data as $work_sifts)
                                            <option value="{{ $work_sifts->id }}">{{ $work_sifts->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- nhan vien --}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nhân viên (*)</label>
                                        <select class="form-control" name="staff_id" id="exampleSelect1">
                                            @foreach($dataStaff as $staff)
                                            <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Ngày bắt đầu (*)</label>
                                        <input class="form-control" type="date" name="date_start" value="{{ old('date_start') }}" id="date_start">
                                    </div>
                                    @error('date_start')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chu kỳ (*)</label>
                                        <!-- <input type="text" name="cycle"> -->
                                        <select class="form-control" name="cycle" id="chuki" onclick="clickDate()">
                                            <option value="week">Tuần</option>
                                            <option value="month">Tháng</option>
                                            <option value="year">Năm</option>
                                        </select>
                                    </div>
                                    @error('cycle')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Ngày kết thúc</label>
                                        <input class="form-control" type="date" name="date_end" value="{{ old('date_end') }}" id="date_end">
                                    </div>
                                    @error('date_end')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>

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
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
<script type="text/javascript" charset="utf-8" >
    
</script>
@endsection()
