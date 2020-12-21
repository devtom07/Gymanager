@extends('admin.layout.main')
@section('title', 'Tạo mới nhân viên')
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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Gymanager</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Tạo mới sản phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <h4 class="header-title mb-4">Tạo mới sản phẩm</h4> --}}
                        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Tên sản phẩm">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh sản phẩm (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    @error('avatar')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá (*)</label>
                                        <input type="number" class="form-control" name="price" id="exampleInputPassword1" placeholder="">
                                    </div>
                                    @error('price')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <select class="form-control" id="exampleSelect1" name="cate_id">
                                            @foreach ($listCategory as $item)
                                                <option value="{{$item->id}}">
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input class="form-control" type="number" name="quantity" placeholder="">
                                    </div>
                                    @error('quantity')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea id="editor1" class="form-control" type="text" name="detail" placeholder="" ></textarea>
                                    </div>
                                    @error('detail')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- end col -->
                        <!-- end row -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
@endsection()