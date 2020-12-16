@extends('admin.layout.main')
@section('title', 'Chương trình PT')
@section('content')
    <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h4 class="page-title">Quản lý chương trình PT</h4>
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
                                            <div class="btn-group dropdown-btn-group pull-right">
                                                <button type="button" class="btn btn-default"><a
                                                            href="{{route('ptProgram.add')}}" class="active">Đăng ký
                                                        chương trình PT</a>
                                                </button>

                                            </div>
                                            <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="datatable"></label></div>
                                        </div>
                                        <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                            <table id="tech-companies-1-clone" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thời gian
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thứ 2</th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thứ 3
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">
                                                        {{$weekday}}
                                                        <br>
                                                        {{$day->toDateString()}}

                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thứ 5</th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thứ 6</th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Thứ 7</th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Chủ Nhật
                                                    </th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1"></td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1"></td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2"></td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2"></td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2"></td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2"></td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-8">
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-8">
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-8">
                                                    </td>
                                                </tr>

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

@endsection