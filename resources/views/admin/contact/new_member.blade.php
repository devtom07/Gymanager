@extends('admin.layout.main')
@section('title', 'Danh sách khách hàng đăng kí')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<div class="content-page">
   <div class="content">
      <!-- Start Content-->
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box">

                  <h4 class="page-title">Danh sách khách hàng đăng kí</h4>
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
                           <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                              <div class="btn-group focus-btn-group">
                                 <div id="datatable_filter" class="dataTables_filter" ><label><input id="myInput" type="text" placeholder="Tìm kiếm ..." class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div>
                             </div>
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
                                          
                                          <th data-priority="1" id="tech-companies-1-col-1-clone">STT</th>
                                          <th data-priority="3" id="tech-companies-1-col-2-clone">Tên</th>
                                          <th data-priority="1" id="tech-companies-1-col-3-clone">Số điện thoại</th>
                                          <th data-priority="3" id="tech-companies-1-col-4-clone">Dịch vụ</th>
                                          <th data-priority="3" id="tech-companies-1-col-5-clone">Email</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Ghi chú</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Trạng thái</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody id='myTable'>
                                      @foreach($list as $key=> $list)
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0"><span class="co-name">
                                           {{--  @if(is_array($work_staff->work_sift_id) )
                                            @foreach(
                                            json_decode($work_staff->work_sift_id)  as $item)
                                            <li>{{$work_sift->find($item)->name }}</li>
                                          @endforeach
                                          @endif --}}
                                          {{ $key+1 }}
                                          </span></th>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">{{ $list->name_member }}</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">{{ $list->phone }}</td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">
                                            {{-- @foreach($service as $service ) --}}
                                            {{ $list->name }}
                                            {{-- @endforeach --}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">{{ $list->email }}</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">{{ $list->content }}</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">
                                            @if($list->statuss == 1)
                                            <input class="btn btn-success" type="submit" value="Đã xử lý">
                                                @else
                                            <input class="btn btn-success" type="submit" value="Chưa xử lý">
                                                @endif

                                          </td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                          <a class="" href="{{ route('listForm.delete', ['id'=>$list->id]) }}"><i class="mdi mdi-delete"></i> Xoá</a></td>
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