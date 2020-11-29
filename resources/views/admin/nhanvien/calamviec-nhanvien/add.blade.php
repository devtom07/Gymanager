@extends('admin.main')
@section('title', 'Tạo mới ca làm việc')
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
                                <li class="breadcrumb-item active">Tạo mới ca làm việc nhân viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới ca làm việc nhân viên</h4>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <!-- end page title --> 
=======
            <!-- end page title -->
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới ca làm việc nhân viên</h4>
                        <div class="row">
<<<<<<< HEAD
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
=======
                            <div class="col-xl-6">
                                <form action="{{ route('calamviecnhanvien.post') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên lịch làm việc</label>
                                        <input class="form-control" type="text" name="work_schedule_name" value=""
                                            id="example-time-input" placeholder="Tên lịch làm việc">
                                    </div>
                                    @error('work_schedule_name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
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
<<<<<<< HEAD
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
=======
                                        <input class="form-control" type="date" name="date_start" value="Y.m.d"
                                            id="example-time-input">
                                    </div>
                                    @error('date_start')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Chu kỳ (*)</label>
                                        <input class="form-control" type="text" name="cycle" value=""
                                            id="example-time-input" placeholder="Mời bạn nhập chu kỳ">
                                    </div>
                                    @error('cycle')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Ngày kết thúc</label>
                                        <input class="form-control" type="date" name="date_end" value="Y.m.d"
                                            id="example-time-input">
                                    </div>
                                    @error('date_end')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </div>
                        </div>
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
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