
@extends('admin.layout.main')
@section('title', 'Danh sách ca tập')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Danh sách huấn luyện viên</h4>
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

                                            <div id="datatable_filter" class="dataTables_filter" ><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                                        </div>
                                        <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                            <table id="tech-companies-1-clone" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">STT</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Tên</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Số điện thoại</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Email</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Địa chỉ</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Trạng thái</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Số học viên</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($pt as $key => $pts)
                                                    <tr>
                                                        <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">{{$key + 1}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$pts->staff->name}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$pts->staff->phone}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$pts->staff->email}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$pts->staff->address}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$pts->staff->status}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$customer_pt}}</td>
                                                        <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
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
@endsection()
