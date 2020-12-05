@extends('admin.main')
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
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Gymmanager</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Danh sách khách hàng</li>
                     </ol>
                  </div>
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
                              <div class="btn-group focus-btn-group"><button type="button" class="btn btn-default"><span class="glyphicon glyphicon-screenshot"></span> Lọc</button></div>
                              <div class="btn-group dropdown-btn-group pull-right">
                                 <button type="button" class="btn btn-default"><a href="{{route('package.create')}}" class="active">Thêm gói</a></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hiện thêm thông tin <span class="caret"></span></button>
                                 @if(session('thongbao'))
                                 <div class="alert alert-success">{{ session('thongbao') }}</div>
                                 @endif
                                 <ul class="dropdown-menu">
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
                                 </ul>
                              </div>
                           </div>
                           <div class="table-responsive fixed-solution" data-pattern="priority-columns">

                              <table id="tech-companies-1" class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th id="tech-companies-1-col-0-clone">STT</th>
                                       <th data-priority="1" id="tech-companies-1-col-1-clone" style="text-alight:center">Tên</th>
                                       <th data-priority="3" id="tech-companies-1-col-2-clone">Giá</th>
                                       <th data-priority="1" id="tech-companies-1-col-3-clone">Kiểu sử dụng</th>
                                       <th data-priority="3" id="tech-companies-1-col-4-clone">Dịch vụ miễn phí</th>
                                       <th data-priority="3" id="tech-companies-1-col-5-clone">Hạn ngày sử dụng</th>
                                       <th data-priority="6" id="tech-companies-1-col-6-clone">Ca tập</th>
                                       <th data-priority="6" id="tech-companies-1-col-7-clone">Trạng thái</th>
                                       <th data-priority="6" id="tech-companies-1-col-8-clone" >Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach($package as $key => $packages)
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0">{{$key+1}}</th>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                             <span class="co-name">
                                                {{ $packages->name}}
                                             </span>
                                          </td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                             {{ $packages->price}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">
                                             {{ $packages->type_use}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">
                                             {{ $packages->free_service}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">
                                            từ {{ $packages->start_date}} đến {{ $packages->end_date}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5">
                                             {{ $packages->hymnal->name}}
                                          </td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">
                                             <button type="button" class="btn btn-success btn-rounded waves-effect waves-light">
                                                   {{ $packages->status}}
                                             </button>
                                          </td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                             <div class="btn-group mt-1 mr-1">
                                                <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                   <i class="mdi mdi-format-list-bulleted-square"></i>
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                   <a class="dropdown-item" href="{{route('package.edit',$packages->id)}}">
                                                      <i class="mdi mdi-lead-pencil"></i> 
                                                         Sửa
                                                   </a>
                                                   <a class="dropdown-item btn-remove" href="{{route('package.delete',$packages->id)}}">
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