@extends('admin.layout.main')
@section('title', 'Danh sach nhan vien')
@section('content')
<div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box">

                  <h4 class="page-title">Danh sách Nhân viên</h4>
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
                                 <button type="button" class="btn btn-default"><a href="{{route('listnhanvien.add')}}" class="active">Tạo mới</a></button>
                              </div>
                              <div id="datatable_filter" class="dataTables_filter" ><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                           </div>
                           <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                              <table id="tech-companies-1-clone" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th id="tech-companies-1-col-0-clone">STT</th>
                                          <th data-priority="1" id="tech-companies-1-col-1-clone">Họ và Tên</th>
                                           <th data-priority="1" id="tech-companies-1-col-1-clone">Anh dai dien</th>
                                          <th data-priority="3" id="tech-companies-1-col-2-clone">Điện thoại</th>
                                          <th data-priority="1" id="tech-companies-1-col-3-clone">Email</th>
                                          <th data-priority="3" id="tech-companies-1-col-4-clone">Địa chỉ</th>
                                          <th data-priority="3" id="tech-companies-1-col-5-clone">Chuc vu</th>
                                          <th data-priority="6" id="tech-companies-1-col-6-clone">Loại hợp đồng</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Mức lương</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($listStaffs as $key => $staffs)
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0">{{$key+1}}</th>

                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                             <span class="co-name">
                                                {{ $staffs->name}}
                                             </span>
                                          </td>
                                           <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                              @if($staffs->avatar)
                                                 <img src="{{asset('/staff/' .$staffs->avatar)}}" alt="" width="100px"
                                                      height="100px">
                                              @else
                                                 <img width="100px" src="http://placehold.it/150x150">
                                              @endif
                                          </td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                             {{ $staffs->phone}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">
                                             {{ $staffs->email}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">
                                             {{ $staffs->address}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5">
                                             {{ $staffs->position->name}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6">
                                             {{ $staffs->contract}}

                                          </td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">
                                             {{number_format( $staffs->wage, 0, ',', ' ')}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                             <div class="btn-group mt-1 mr-1">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="mdi mdi-format-list-bulleted-square"></i>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                   <a class="dropdown-item" href="{{route('staff.edit',$staffs->id)}}">
                                                      <i class="mdi mdi-lead-pencil"></i> 
                                                         Sửa
                                                   </a>
                                                <a class="dropdown-item btn-remove" href="{{ route('deleteStaff',$staffs->id) }}">
                                                      <i class="mdi mdi-delete"></i> 
                                                         Xoá
                                                   </a>
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