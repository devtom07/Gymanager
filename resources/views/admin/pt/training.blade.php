@extends('admin.layout.main')
@section('title','lịch dạy')
@section('content')
    <div class="container">
    <table class="table table-borderless" style="background: #fff;margin-top:100px;margin-left: 120px ">
        <thead>
        <tr>
            <th scope="col">Stt</th>
            <th scope="col">Ngày tập</th>
            <th scope="col">Ca tập</th>
            <th scope="col">Học viên</th>
            <th scope="col">Thơi gian tập</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachingSchedule as $key => $teachingSchedule)
        <tr>
            <th scope="row">{{$key +1 }}</th>
            <td>{{$teachingSchedule->date}}</td>
            <td>{{$teachingSchedule->hymnal->name}}</td>
            <td>{{$teachingSchedule->customer->name}}</td>
            <td>{{$teachingSchedule->hymnal->start_hour}} - {{$teachingSchedule->hymnal->end_hour}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>


@endsection