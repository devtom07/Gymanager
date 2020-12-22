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

                            <h4 class="page-title">  <i class="mdi mdi-calendar"></i> Lịch học</h4>
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
                                                            href="{{route('pt.addTrainingPt',$id)}}" class="active">Thêm mới lịch
                                                        học</a>
                                                </button>

                                            </div>
                                            <div class="dataTables_length" id="datatable_length">

                                            </div>
                                            <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="form-control form-control-sm"
                                                            placeholder="" aria-controls="datatable"></label></div>
                                        </div>
                                        <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                            <table id="tech-companies-1-clone" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th data-priority="3" id="tech-companies-1-col-2-clone">STT</th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Ngày tập
                                                    </th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Ca tập
                                                    </th>

                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Học viên
                                                    </th>
                                                    <th data-priority="1" id="tech-companies-1-col-3-clone">Thời gian
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($teachingSchedule as $key => $teachingSchedules)
                                                    <tr>
                                                        <td data-org-colspan="1" data-priority="1"
                                                            data-columns="tech-companies-1-col-1">{{$key + 1}}</td>
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-2">{{$teachingSchedules->date}}</td>
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-2">{{$teachingSchedules->hymnal->name}}</td>
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-2">{{$teachingSchedules->customer->name}}</td>
                                                        <td data-org-colspan="1" data-priority="3"
                                                            data-columns="tech-companies-1-col-2">{{$teachingSchedules->hymnal->start_hour}} - {{$teachingSchedules->hymnal->end_hour}}</td>
                                                        <td data-org-colspan="1" data-priority="6"
                                                            data-columns="tech-companies-1-col-8">
                                                            <a class="dropdown-item"
                                                               href="{{route('pt.editTrainingPt',$teachingSchedules->id)}}"><i
                                                                        class="mdi mdi-calendar-edit"></i></a>
                                                            <a class="dropdown-item btn-remove"
                                                               href="{{route('pt.destroyTrainingPt',$teachingSchedules->id)}}"><i
                                                                        class="mdi mdi-delete"></i></a>

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
