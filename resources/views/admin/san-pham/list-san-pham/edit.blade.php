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
                                <li class="breadcrumb-item active">Sửa sản phẩm</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Sửa sản phẩm</h4>
                    </div>
                </div>
            </div>
            <!-- end page title --> 
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        {{-- <h4 class="header-title mb-4">Sua nhân viên</h4> --}}
                    <form action="{{route('product.update',$listProducts->id)}}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên sản phẩm (*)</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName1" value="{{ $listProducts->name}}">
                                    </div>
                                    @error('name')
                                            <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ảnh đại diện (*)</label>
                                        <input type="file" class="form-control" name="avatar" id="avatar" value="{{$listProducts->avatar}}">
                                    
                                        {{-- <img src="{{asset('/staff/' .$listProducts->avatar)}}" alt="" width="100px" height="100px"> --}}
                                    </div>
                                    @error('avatar')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Giá (*)</label>
                                        <input type="number" class="form-control" name="price" id="exampleInputPhone1" value="{{ $listProducts->price}}">
                                    </div>
                                    @error('price')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Loại sản phẩm</label>
                                        <select class="form-control" id="exampleSelect1" name="cate_id">
                                            @foreach ($listCategory as $item)
                                                <option value="{{$item->id }}"
                                                    <?php if($item->id == $listProducts->cate_id):?>
                                                        selected
                                                    <?php endif?>
                                                    >
                                                    {{ $item->name}}  
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('cate_id')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <label>Số lượng</label>
                                        <input class="form-control" type="number" name="quantity"  value="{{ $listProducts->quantity}}">
                                    </div>
                                    @error('quantity')
                                        <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label>Chi tiết</label>
                                        <input class="form-control" type="text" name="detail"  value="{{ $listProducts->detail}}">
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
{{-- @section('js')
<script>
    function encodeImageFileAsURL(element) {
        var file = element.files[0];
        if(file === undefined){
            $("#img-preview").attr("src", "<?= Staff . $listStaffs->avatar ?>");
            return false;
        }
        var reader = new FileReader();
        reader.onloadend = function() {
            $("#img-preview").attr("src", reader.result);
        }
        reader.readAsDataURL(file);
    }
</script>
@endsection --}}