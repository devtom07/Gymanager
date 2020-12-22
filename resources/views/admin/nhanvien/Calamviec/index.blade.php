@extends('admin.layout.main')
@section('title', 'Đăng ký khách hàng')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Danh sách ca làm việc</h4>
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
                                                    href="{{route('calamviec.store')}}" class="active">Tạo
                                                    mới</a></button>
                                                 
                                        </div>
                                        <div class="dataTables_length" id="datatable_length">
                                       
                                                </div>
                                                <div id="datatable_filter" class="dataTables_filter" ><label><input id="myInput" type="text" placeholder="Tìm kiếm ..." class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                                    </div>
                                    <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                    
                                        <table id="tech-companies-1-clone" class="table table-striped">
                                            <thead>
                                                <tr>

                                                    <th data-priority="1" id="tech-companies-1-col-1-clone">Tên ca làm
                                                        việc</th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Giờ bắt đầu
                                                    </th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Giờ nghỉ
                                                        trưa
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">Kết thúc giờ
                                                        nghỉ trưa
                                                    <th data-priority="3" id="tech-companies-1-col-5-clone">Giờ kết thúc
                                                    </th>
                                                    </th>
                                                    <th data-priority="3" id="tech-companies-1-col-5-clone">Trạng thái
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">
                                                @foreach($listWorkSift as $listwork)
                                                <tr>
                                                    <th data-org-colspan="1" data-columns="tech-companies-1-col-0"><span
                                                            class="co-name">{{$listwork->name}}</span></th>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">{{$listwork->hour_start}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2">
                                                        {{$listwork->hour_start_center}}</td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-3">
                                                        {{$listwork->hour_end_center}}</td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-5-col-10">
                                                        {{$listwork->hour_end}}</td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-4"><button type="button"
                                                            class="btn btn-success btn-rounded waves-effect waves-light">{{$listwork->status}}</button></td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-8">
                                                        <div class="btn-group mt-1 mr-1">
                                                            <button class="btn btn-success btn-sm dropdown-toggle"
                                                                type="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="mdi mdi-format-list-bulleted-square"></i>
                                                            </button>
                                                            <div class="dropdown-menu" x-placement="bottom-start"
                                                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                                <a class="dropdown-item"
                                                                    href="{{route('calamviec.edit',$listwork->id)}}"><i
                                                                        class="mdi mdi-lead-pencil"></i> Sửa</a>
                                                                <a class="dropdown-item btn-remove"
                                                                    href="{{route('calamviec.delete',$listwork->id)}}"><i
                                                                        class="mdi mdi-delete"></i> Xoá</a>

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
