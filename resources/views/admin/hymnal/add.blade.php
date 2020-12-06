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

                            <h4 class="page-title">Tạo mới ca tập</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <form action="{{route('hymnal.store')}}" method="post" enctype="multipart/form-data">
                                        <div class=" form-group">
                                            <label for="">Tên ca làm tập (*)</label>
                                            <input value="{{old('name')}}" type="text" class="form-control" name="name"
                                                   placeholder="Tên ca làm việc">
                                        </div>
                                        @error('name')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="">Giờ bắt đầu(*)</label>
                                            <input class="form-control" type="time" name="start_hour" value="H:i:s"
                                                   id="example-date-input">
                                        </div>
                                        @error('hour_start')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label>Giờ kết thúc (*)</label>
                                            <input class="form-control" type="time" name="end_hour" value="H:i:s"
                                                   id="example-time-input">
                                        </div>
                                        @error('end_hour')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label>Mô tả </label>
                                            <textarea id="editor1"  type="text" class="form-control" name="describe" placeholder="">{{old('describe')}}</textarea>

                                        </div>
                                        @error('describe')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror

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