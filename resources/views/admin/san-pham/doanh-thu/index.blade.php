@extends('admin.layout.main')
@section('title', 'Danh sach nhan vien')
@section('content')
    @include('sweetalert::alert')

<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">

                        <h4 class="page-title">Các sản phẩm đã bán</h4>

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
                                                    href="{{route('listproduct')}}" class="active">Xem sản phẩm</a></button>

                                                    <button type="button" class="btn btn-default"><a
                                                        href="{{route('product.sanpham_ban')}}" class="active">Xem giỏ hàng
                                                        </a></button>
                                        </div>
                                        <div class="dataTables_length" id="datatable_length">

                                        <!-- <label>Show <select
                                                    name="datatable_length" aria-controls="datatable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label> -->
                                                </div>
                                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="datatable"></label></div>
                                    </div>
                                    <div class="table-responsive fixed-solution" data-pattern="priority-columns">
                                        <table id="tech-companies-1-clone" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th id="tech-companies-1-col-0-clone">STT</th>
                                                    <th data-priority="1" id="tech-companies-1-col-1-clone">Tên sản phẩm
                                                    </th>
                                                    <th data-priority="1" id="tech-companies-1-col-1-clone">Ảnh sản
                                                        phẩm</th>
                                                    <th data-priority="1" id="tech-companies-1-col-1-clone">Giá</th>
                                                    <th data-priority="3" id="tech-companies-1-col-5-clone">Số lượng
                                                    </th>
                                                    <th data-priority="6" id="tech-companies-1-col-8-clone">Tổng tiền
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                              @foreach($listRevenue as $key => $listRevenues)
                                                <tr>
                                                    <th data-org-colspan="1" data-columns="tech-companies-1-col-0">
                                                      {{$key+1}} </th>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">
                                                        <span class="co-name">
                                                            {{$listRevenues->name}}

                                                        </span>
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">
                                                        <img class="img-responsive" width="100px"
                                                             src="{{asset('product/'.$listRevenues->product->avatar)}}">
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="1"
                                                        data-columns="tech-companies-1-col-1">
                                                        {{$listRevenues->price}}

                                                    </td>
                                                    <td data-org-colspan="1" data-priority="6"
                                                        data-columns="tech-companies-1-col-7">
                                                        {{$listRevenues->quantity}}
                                                    </td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2">
                                                        {{$listRevenues->total}}

                                                    </td>
                                                    <td data-org-colspan="1" data-priority="3"
                                                        data-columns="tech-companies-1-col-2">

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