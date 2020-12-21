@extends('admin.layout.main')
@section('title', 'Danh sách khách hàng')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Danh sách khách hàng</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">
                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-wrapper">
                                        <div class="btn-toolbar">
                                            <div class="btn-group focus-btn-group">
                                                <!-- <button type="button" class="btn btn-default"><span
                                                            class="glyphicon glyphicon-screenshot"></span> Lọc
                                                </button> -->
                                            </div>
                                            <div class="btn-group dropdown-btn-group pull-right">
                                                <button type="button" class="btn btn-default"><a
                                                            href="{{route('customer.add')}}" class="active">Đăng ký</a>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive fixed-solution" data-pattern="priority-columns">

                                            <table id="tech-companies-1" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th id="tech-companies-1-col-0-clone">STT</th>
                                                    <th data-priority="1" id="tech-companies-1-col-1-clone"
                                                        style="text-alight:center">Tên
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Số điện
                                                        thoại
                                                    </th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Dịch vụ</th>
                                                    <th data-priority="3" id="tech-companies-1-col-4-clone">Giá</th>
{{--                                                    <th data-priority="3" id="tech-companies-1-col-5-clone">Còn lại</th>--}}
                                                    <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày bắt
                                                        đầu
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-7-clone">Ngày hết
                                                        hạn
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($customers as $key => $customer)

                                                    <tr>
                                                        <th data-org-colspan="1"
                                                            data-columns="tech-companies-1-col-0">{{$key+1}}</th>
                                                        <td data-org-colspan="1" data-priority="1"
                                                            data-columns="tech-companies-1-col-1">{{$customer->customer->name}}</td>
                                                        <td data-org-colspan="1" data-priority="1"
                                                            data-columns="tech-companies-1-col-1">{{$customer->customer->phone}}</td>
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-2">{{$customer->name}}</td>
                                                        <td data-org-colspan="1" data-priority="1"
                                                            data-columns="tech-companies-1-col-3">{{$customer->total_package}}</td>
{{--                                                        <td id="days" data-org-colspan="1" data-priority="3"--}}
{{--                                                            data-columns="tech-companies-1-col-4"></td>--}}
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-5">{{$customer->start_date}}</td>
                                                        <td id="endDate" data-org-colspan="1" data-priority="6"
                                                            data-columns="tech-companies-1-col-6">{{$customer->end_date}}</td>
                                                        <td data-org-colspan="1" data-priority="6"
                                                            data-columns="tech-companies-1-col-8">
                                                            <div class="btn-group mt-1 mr-1">
                                                                <button class="btn btn-success btn-sm dropdown-toggle"
                                                                        type="button" data-toggle="dropdown"
                                                                        aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-chevron-down"></i>
                                                                </button>
                                                                <div class="dropdown-menu" x-placement="bottom-start"
                                                                     style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                                    <a class="dropdown-item  btn-show"
                                                                       id="show_customer" data-id="{{$customer->customer->id}}"
                                                                       data-toggle="modal"
                                                                       data-target="#exampleModalCenter"> Chi tiết</a>
                                                                    <a class="dropdown-item"
                                                                       href="{{route('customer.edit',$customer->customer->id)}}">Sửa</a>
                                                                    <a class="dropdown-item"
                                                                       href="{{route('customer.delete',$customer->customer->id)}}">Xoá</a>

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end .table-responsive -->
                                </div>
                                <!-- end .table-rep-plugin-->
                            </div>
                            <!-- end .responsive-table-plugin-->
                        </div>
                        <!-- end card-box -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>
        <!-- end content -->
        <!-- Footer Start -->

        <!-- end Footer -->
    </div>
    @include('admin.customer.show_detail')

@endsection()