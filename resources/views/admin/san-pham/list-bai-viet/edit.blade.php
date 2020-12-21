@extends('admin.layout.main')
@section('title', 'Sửa bài viết')
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
                                <li class="breadcrumb-item active">Sửa bài viết</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sửa bài viết</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <h4 class="header-title mb-4">Sua nhân viên</h4> --}}
                    <form action="{{route('posts.update',$listPosts->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên bài viết (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ $listPosts->name}}">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="avatar" value="{{$listPosts->avatar}}">
                                    
                                        {{-- <img src="{{asset('/staff/' .$listPosts->avatar)}}" alt="" width="100px" height="100px"> --}}
                                    </div>
                                    @error('avatar')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tiêu đề (*)</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputPhone1" value="{{ $listPosts->title}}">
                                    </div>
                                    @error('title')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Danh mục bài viết</label>
                                        <select class="form-control" id="exampleSelect1" name="id_cate_posts">
                                            @foreach ($listCate_posts as $item)
                                                <option value="{{$item->id }}"
                                                    <?php if($item->id == $listPosts->id_cate_posts):?>
                                                        selected
                                                    <?php endif?>
                                                    >
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('id_cate_posts')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <input class="form-control" type="text" name="detail"  value="{{ $listPosts->detail}}">
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
