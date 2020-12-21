
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

                            <h4 class="page-title">Danh sách ca tập</h4>
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
                                                <button type="button" class="btn btn-default"><a href="{{route('hymnal.add')}}" class="active">Tạo mới</a></button>
                                            </div>
                                            <div class="dataTables_length" id="datatable_length">
                                            </div>
                                            <div id="datatable_filter" class="dataTables_filter" ><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                                        </div>
                                        <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                            <table id="tech-companies-1-clone" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Mã</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Tên</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Thời gian bắt đầu</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Thời gian Kết thúc</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Mô tả</th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody id="listHymnal">
                                                @foreach($hymnal as $key => $hymnals)
                                                    <tr>
                                                        <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">{{$hymnals->code}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$hymnals->name}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$hymnals->start_hour}}</td>
                                                        <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$hymnals->end_hour}}</td>
                                                            <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{$hymnals->describe}}</td>
                                                        <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                                            <div class="btn-group mt-1 mr-1">
                                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <i class="mdi mdi-format-list-bulleted-square"></i>
                                                                </button>
                                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                                    <a class="dropdown-item" href="{{route('hymnal.edit',$hymnals->id)}}"><i class="mdi mdi-lead-pencil"></i> Sửa</a>
                                                                    <a class="dropdown-item btn-remove" href="{{route('hymnal.delete',$hymnals->id)}}"><i class="mdi mdi-delete"></i> Xoá</a>
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
@endsection()
