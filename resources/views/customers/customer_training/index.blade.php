@extends('customers.layouts.master')
@section('content')
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
    <tr>
      <th scope="row">1</th>
      <td>12/02/2020</td>
      <td>ca2</td>
      <td>Nguyễn Hữu Tiến</td>
      <td>18:00-19:00</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>12/02/2020</td>
      <td>ca4</td>
      <td>Nguyễn Hữu Tiến</td>
      <td>19:00-20:00</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>12/02/2020</td>
      <td>ca1</td>
      <td>Nguyễn Hữu Tiến</td>
      <td>17:00-18:00</td>
    </tr>
  </tbody>
</table>
@endsection