@extends('admin.main')
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
                                <li class="breadcrumb-item active">Tạo mới nhân viên</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới nhân viên</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Sua nhân viên</h4>
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ma  nhan vien (*)</label>
                                        <input type="text" class="form-control" name="code" id="exampleInputEmail1" value="{{ $listStaffs->code}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ và tên (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{ $listStaffs->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline col-md-3">
                                                <input type="radio" id="inlineRadio1" value="Nam" name="gender"{{ $listStaffs->gender == 'Nam' ? 'checked' : ''}}>
                                                <label for="inlineRadio1">Nam</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Nữ" name="gender" {{ $listStaffs->gender == 'Nữ' ? 'checked' : ''}}>
                                                <label for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="exampleInputEmail1">
                                        {{-- <img src="{{asset('public/admin/images/' .$listStaffs->new_image)}}" alt=""> --}}
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Số điện thoại (*)</label>
                                        <input type="number" class="form-control" name="phone" id="exampleInputPassword1" value="{{ $listStaffs->phone}}">
                                    </div>
                                    {{-- <div class="form-group">
                                        <label>Ca lam viec</label>
                                        <select class="form-control" id="exampleSelect1" name="work_sift_id">
                                            @foreach ($listWorkSift as $item)
                                                <option
                                                    <?php if($item->id == $listStaffs->work_sift_id):?>
                                                        selected
                                                    <?php endif?>
                                                    >
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="form-group">
                                        <label>Trạng thái</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline">
                                                <input type="radio" id="inlineRadio1" value="Còn hiệu lực" name="status" {{ $listStaffs->status == 'Còn hiệu lực' ? 'checked' : ''}}>
                                                <label for="inlineRadio1">Còn hiệu lực</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Hết hạn" name="status" {{ $listStaffs->status == 'Hết hạn' ? 'checked' : ''}}>
                                                <label for="inlineRadio2"> Hết hạn</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Email (*)</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputPassword1"  value="{{ $listStaffs->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Địa chỉ</label>
                                        <input class="form-control" type="text" name="address"  value="{{ $listStaffs->address}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại hợp đồng (*)</label>
                                        <div class="mt-4">
                                            <div class="radio radio-info form-check-inline col-md-3">
                                                <input type="radio" id="inlineRadio1" value="Chính thức" name="contract" checked>
                                                <label for="inlineRadio1">Chính thức</label>
                                            </div>
                                            <div class="radio form-check-inline">
                                                <input type="radio" id="inlineRadio2" value="Thử việc" name="contract">
                                                <label for="inlineRadio2">Thử việc</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mức lương</label>
                                        <input class="form-control" type="number" name="wage"  value="{{ $listStaffs->wage}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Chức danh</label>
                                        <select class="form-control" id="exampleSelect1" name="title">
                                            @foreach ($listTitle as $item)
                                                <option
                                                    <?php if($item->id == $listTitle->title):?>
                                                        selected
                                                    <?php endif?>
                                                    >
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
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