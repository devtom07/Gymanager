@extends('admin.layout.main')
@section('title', 'Xếp lịch học')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title"><i class="mdi mdi-calendar"></i> Cập nhật lịch học</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-xl-6">
                                    <form action="{{route('pt.updateTrainingPt',$teachingSchedule->id)}}}" method="post" enctype="multipart/form-data">
                                        <div class=" form-group">
                                            <label for="">Ca tập</label>
                                            <select name="hymnal" class="custom-select mb-3">
                                                <option>Chọn ca tập ...</option>
                                                @foreach($hymnal as $hymnals)
                                                    @if($teachingSchedule->id_hymnal == $hymnals->id)
                                                        <option selected value="{{$hymnals->id}}">{{$hymnals->name}}</option>
                                                    @else
                                                        <option value="{{$hymnals->id}}">{{$hymnals->name}}</option>

                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        @if($errors->first('hymnal'))
                                            <p class="text-danger">{{ $errors->first('hymnal') }}</p>
                                        @endif
                                        <div class="form-group">
                                            <label for="">Ngày tập</label>
                                            <input class="form-control" type="date" name="date"
                                                   value="{{$teachingSchedule->date}}"
                                                   id="example-date-input">
                                        </div>
                                        @if($errors->first('date'))
                                            <p class="text-danger">{{ $errors->first('date') }}</p>
                                        @endif

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