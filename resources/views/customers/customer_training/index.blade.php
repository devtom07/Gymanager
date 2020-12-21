@extends('customers.layouts.master')
@section('title', 'Lịch tập của khách hàng')
@section('content')
  <div class="container">
	<table class="table table-borderless" style="background: #fff">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Ngày tập</th>
      <th scope="col">Ca tập</th>
      <th scope="col">Huấn luyện viên</th>
      <th scope="col">Thơi gian tập</th>
    </tr>
  </thead>
  <tbody>
  @foreach($teachingSchedule as $key => $teachingSchedules)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$teachingSchedules->date}}</td>
      <td>{{$teachingSchedules->hymnal->name}}</td>
      <td>{{$teachingSchedules->pt->name}}</td>
      <td>{{$teachingSchedules->hymnal->start_hour}} - {{$teachingSchedules->hymnal->end_hour}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
  </div>
@endsection