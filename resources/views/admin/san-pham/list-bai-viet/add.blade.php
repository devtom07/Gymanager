@extends('admin.layout.main')
@section('title', 'Tạo mới bài viết')
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
                                <li class="breadcrumb-item active">Tạo mới bài viết</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới bài viết</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <h4 class="header-title mb-4">Tạo mới sản phẩm</h4> --}}
                        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh sản phẩm (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1" placeholder="">
                                    </div>
                                    @error('avatar')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tiêu đề (*)</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputPassword1" placeholder="">
                                    </div>
                                    @error('title')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Danh mục bài viết</label>
                                        <select class="form-control" id="exampleSelect1" name="id_posts_cate">
                                            @foreach ($listCate_posts as $item)
                                                <option value="{{$item->id}}">
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_posts_cate')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Ngày viết</label>
                                        <input class="form-control" type="date" name="start_posts" placeholder="" >
                                    </div>
                                    @error('start_posts')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <textarea  class="form-control" type="text" name="detail" placeholder="" ></textarea>
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