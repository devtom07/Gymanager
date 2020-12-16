@extends('admin.layout.main')
@section('title', 'Tạo mới ca làm việc')
@section('content')
    @foreach($hymnal as $hymnals)
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Cập nhật ca tập</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <form action="{{route('hymnal.update',$hymnals->id)}}" method="post" enctype="multipart/form-data">
                                        <div class=" form-group">
                                            <label for="">Tên ca làm tập (*)</label>
                                            <input value="{{$hymnals->name}}" type="text" class="form-control" name="name"
                                                   placeholder="Tên ca làm việc">
                                        </div>
                                        @error('name')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label for="">Giờ bắt đầu(*)</label>
                                            <input  value="{{$hymnals->start_hour}}" class="form-control" type="time" name="start_hour"
                                                   id="example-date-input">
                                        </div>
                                        @error('hour_start')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label>Giờ kết thúc (*)</label>
                                            <input value="{{$hymnals->end_hour}}" class="form-control" type="time" name="end_hour" value="H:i:s"
                                                   id="example-time-input">
                                        </div>
                                        @error('end_hour')
                                        <p style="color:red">{{$message}}</p>
                                        @enderror
                                        <div class="form-group">
                                            <label>Mô tả </label>
                                            <textarea id="editor1"  type="text" class="form-control" name="describe" placeholder="">{{$hymnals->describe}}</textarea>

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
    @endforeach
@endsection()