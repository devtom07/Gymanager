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

                  <h4 class="page-title">Danh sách ca làm việc của nhân viên</h4>
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
                                 <button type="button" class="btn btn-default"><a href="{{route('calamviecnhanvien.add')}}" class="active">Tạo mới</a></button>
                                 <!-- <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hiện thêm thông tin <span class="caret"></span></button> -->
                                 @if(session('thongbao'))
                                 <div class="alert alert-success">
                                     {{ session('thongbao') }}
                                 </div>
                                 @endif
                                 <!-- <ul class="dropdown-menu">
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-1" id="toggle-tech-companies-1-col-1" value="tech-companies-1-col-1"> <label for="toggle-tech-companies-1-col-1">Email</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-2" id="toggle-tech-companies-1-col-2" value="tech-companies-1-col-2"> <label for="toggle-tech-companies-1-col-2">Trạng thái</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-3" id="toggle-tech-companies-1-col-3" value="tech-companies-1-col-3"> <label for="toggle-tech-companies-1-col-3">Ngày bắt đầu</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-4" id="toggle-tech-companies-1-col-4" value="tech-companies-1-col-4"> 
                                       <label for="toggle-tech-companies-1-col-4">Ngày kết thúc</label>
                                    </li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-5" id="toggle-tech-companies-1-col-5" value="tech-companies-1-col-5"> <label for="toggle-tech-companies-1-col-5">Avarta</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-6" id="toggle-tech-companies-1-col-6" value="tech-companies-1-col-6"> <label for="toggle-tech-companies-1-col-6">Bid</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-7" id="toggle-tech-companies-1-col-7" value="tech-companies-1-col-7"> <label for="toggle-tech-companies-1-col-7">Ask</label></li>
                                    <li class="checkbox-row"><input type="checkbox" name="toggle-tech-companies-1-col-8" id="toggle-tech-companies-1-col-8" value="tech-companies-1-col-8"> <label for="toggle-tech-companies-1-col-8">1y Target Est</label></li>
                                 </ul> -->
                              </div>
                              <!-- <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div> -->
                              <div id="datatable_filter" class="dataTables_filter" ><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                            
                           </div>
                           <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                              <div class="sticky-table-header" style="height: 49px; visibility: hidden; width: auto; top: -1px;">
                                 {{-- <table id="tech-companies-1-clone" class="table table-striped">
                                    <thead>
                                       <tr>
                                          
                                          <th data-priority="1" id="tech-companies-1-col-1-clone">Ca làm việc</th>
                                          <th data-priority="3" id="tech-companies-1-col-2-clone">Nhân viên</th>
                                          <th data-priority="1" id="tech-companies-1-col-3-clone">Ngày bắt đầu</th>
                                          <th data-priority="3" id="tech-companies-1-col-4-clone">Chu kỳ</th>
                                          <th data-priority="3" id="tech-companies-1-col-5-clone">Tên lịch làm việc</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Ngày kết thúc</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0"><span class="co-name">Ca sáng</span></th>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">Long</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">01/11/2020</td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">Theo tuần</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">Lịch của Long</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7"></td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                          <div class="btn-group mt-1 mr-1">
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-format-list-bulleted-square"></i>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-lead-pencil"></i> Sửa</a>
                                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete"></i> Xoá</a>
                                 
                                                    </div>
                                                </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table> --}}
                              </div>
                              <table id="tech-companies-1-clone" class="table table-striped">
                                    <thead>
                                       <tr>
                                          
                                          <th data-priority="1" id="tech-companies-1-col-1-clone">Ca làm việc</th>
                                          <th data-priority="3" id="tech-companies-1-col-2-clone">Nhân viên</th>
                                          <th data-priority="1" id="tech-companies-1-col-3-clone">Ngày bắt đầu</th>
                                          <th data-priority="3" id="tech-companies-1-col-4-clone">Chu kỳ</th>
                                          <th data-priority="3" id="tech-companies-1-col-5-clone">Tên lịch làm việc</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Ngày kết thúc</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($work_staffs as $work_staff)
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0"><span class="co-name">
                                            
                                          {{ $work_staff->workSift->name }}-({{ $work_staff->workSift->hour_start }}-{{ $work_staff->workSift->hour_end }})
                                          </span></th>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">{{ $work_staff->Staff->name }}</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{ $work_staff->date_start }}</td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">{{ $work_staff->cycle }}</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">{{ $work_staff->work_schedule_name }}</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">{{ $work_staff->date_end }}</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                          <div class="btn-group mt-1 mr-1">
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-format-list-bulleted-square"></i>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                        <a class="dropdown-item" href="{{ route('suacalamviecnhanvien', ['id'=>$work_staff->id]) }}"><i class="mdi mdi-lead-pencil"></i> Sửa</a>
                                                        <a class="dropdown-item" href="{{ route('xoacalamviecvn', ['id'=>$work_staff->id]) }}"><i class="mdi mdi-delete"></i> Xoá</a>
                                 
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