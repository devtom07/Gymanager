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
                                 <button type="button" class="btn btn-default"><a href="{{route('customer.add')}}" class="active">Đăng ký</a></button><button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Hiện thêm thông tin <span class="caret"></span></button>
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
                              <div class="sticky-table-header" style="height: 49px; visibility: hidden; width: auto; top: -1px;">
                                 <table id="tech-companies-1-clone" class="table table-striped">
                                    <thead>
                                       <tr>
                                          <th id="tech-companies-1-col-0-clone">STT</th>
                                          <th data-priority="1" id="tech-companies-1-col-1-clone">Tên</th>
                                          <th data-priority="3" id="tech-companies-1-col-2-clone">Số điện thoại</th>
                                          <th data-priority="1" id="tech-companies-1-col-3-clone">Dịch vụ</th>
                                          <th data-priority="3" id="tech-companies-1-col-4-clone">Giá</th>
                                          <th data-priority="3" id="tech-companies-1-col-5-clone">Còn lại</th>
                                          <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày bắt đầu</th>
                                          <th data-priority="6" id="tech-companies-1-col-7-clone">Ngày hết hạn</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Nhân viên phụ trách</th>
                                          <th data-priority="6" id="tech-companies-1-col-8-clone">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <th data-org-colspan="1" data-columns="tech-companies-1-col-0">1 <span class="co-name">Phan Tuấn Anh</span></th>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">0944194857</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">Giảm cân</td>
                                          <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">600.000 VND</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">5</td>
                                          <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5">12/10/2020</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6">30/10/2020</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">Trần Văn Long</td>
                                          <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                          <div class="btn-group mt-1 mr-1">
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                        <a class="dropdown-item" href="#">Sửa</a>
                                                        <a class="dropdown-item" href="#">Xoá</a>
                                 
                                                    </div>
                                                </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <table id="tech-companies-1" class="table table-striped">
                                 <thead>
                                    <tr>
                                       <th id="tech-companies-1-col-0-clone">STT</th>
                                       <th data-priority="1" id="tech-companies-1-col-1-clone" style="text-alight:center">Tên</th>
                                       <th data-priority="3" id="tech-companies-1-col-2-clone">Số điện thoại</th>
                                       <th data-priority="1" id="tech-companies-1-col-3-clone">Dịch vụ</th>
                                       <th data-priority="3" id="tech-companies-1-col-4-clone">Giá</th>
                                       <th data-priority="3" id="tech-companies-1-col-5-clone">Còn lại</th>
                                       <th data-priority="6" id="tech-companies-1-col-6-clone">Ngày bắt đầu</th>
                                       <th data-priority="6" id="tech-companies-1-col-7-clone">Ngày hết hạn</th>
                                       <th data-priority="6" id="tech-companies-1-col-8-clone">Nhân viên phụ trách</th>
                                       <th data-priority="6" id="tech-companies-1-col-8-clone" >Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <th data-org-colspan="1" data-columns="tech-companies-1-col-0">1</th>
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">Phan Tuấn Anh</td>
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-1">0944194857</td>
                                       <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-2">Giảm cân</td>
                                       <td data-org-colspan="1" data-priority="1" data-columns="tech-companies-1-col-3">600.000 VND</td>
                                       <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-4">5</td>
                                       <td data-org-colspan="1" data-priority="3" data-columns="tech-companies-1-col-5">12/10/2020</td>
                                       <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-6">30/10/2020</td>
                                       <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-7">Trần Văn Long</td>
                                       <td data-org-colspan="1" data-priority="6" data-columns="tech-companies-1-col-8">
                                       <div class="btn-group mt-1 mr-1">
                                                    <button class="btn btn-success btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                       <i class="mdi mdi-chevron-down"></i>
                                                    </button>
                                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
                                                        <a class="dropdown-item" href="#">Sửa</a>
                                                        <a class="dropdown-item" href="#">Xoá</a>
                                 
                                                    </div>
                                                </div>
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
   <footer class="footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               2016 - 2019 © Uplon theme by <a href="#">Coderthemes</a>
            </div>
         </div>
      </div>
   </footer>
   <!-- end Footer -->
</div>
@endsection()