@extends('admin.layout.main')
@section('title', 'Thêm tài khoản khách hàng')
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
                                <li class="breadcrumb-item active">Tạo mới tài khoản khách hàng</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Tạo mới tài khoản khách hàng</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="header-title mb-4">Tạo mới tài khoản khách hàng</h4>
                        <div class="row">
                            <div class="col-xl-6">
                                <form action="{{ route('customer_account.add') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Tên tài khoản khách</label>
                                        <input class="form-control" type="text" name="name" value="{{  old('name')}}" id="example-time-input">
                                    </div>
                                    @error('name')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên khách hàng (*)</label>
                                        <select class="form-control"  name="id_customer" >
                                            @foreach($customer as $customers)
                                            <option value="{{ $customers->id }}">{{ $customers->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- nhan vien --}}
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">email(*)</label>
                                        <!-- <input type="text" name="cycle"> -->
                                        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                                    </div>
                                    @error('email')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">password(*)</label>
                                        <!-- <input type="text" name="cycle"> -->
                                        <input type="password" name="passsword" class="form-control">
                                    </div>
                                    @error('passsword')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Trạng thái (*)</label>
                                        <select name="status" class="form-control">
                                        	<option value="Còn hiệu lực">Còn hiệu lực</option>
                                        	<option value="Hết hiệu lực">Hết hiệu lực</option>
                                        </select>
                                    </div>
                                    @error('status')
                                    <p style="color:red">{{$message}}</p>
                                    @enderror
                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </form>
                            </div>
                        </div>
                        <!-- end col -->
                        <!-- end row -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <!-- end row -->
        </div>
    </div>
    <!-- end content -->
    <!-- Footer Start -->
    <!-- end Footer -->
</div>
@endsection