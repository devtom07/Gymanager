@extends('admin.main')
@section('title','Sửa tài khoản')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-title mb-4">
            <div class="d-flex justify-content-start">
                <div class="image-container">
                    <img src="http://laravel-training.local/storage/images/1603351081_8613549_9be24318e4be276aaf5961a08cd7ae53.png" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail">
                    <form action="http://laravel-training.local/users/upload/1" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="nF6vzGJtEs08JEi1AQ86JJ0MrHymVjEUjQGVvSFg">                                                <div class="middle mt-3">
                            <input class="form-control" type="file" onchange="this.form.submit()" id="profilePicture" name="cover">
                        </div>
                    </form>
                    <div class="userData mt-3">
                        <p style="color: #0a0a0a;font-size: 20px; font-family: inherit">Thông tin
                            cá nhân</p>
                    </div>
                </div>
                <div class="ml-auto">
                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="true">Chi
                            tiết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="connectedServices-tab" data-toggle="tab" href="#connectedServices" role="tab" aria-controls="connectedServices" aria-selected="false">Chỉnh sửa</a>
                    </li>
                </ul>
                <div class="tab-content ml-1" id="myTabContent">
                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style=" font-family: inherit">Tên</label>
                            </div>
                            <div class="col-md-8 col-6">
                                ADMIN
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Email</label>
                            </div>
                            <div class="col-md-8 col-6">
                                ADMIN@gmail.com
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Số điện thoại</label>
                            </div>
                            <div class="col-md-8 col-6">
                                0982047922
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Địa chỉ</label>
                            </div>
                            <div class="col-md-8 col-6">

                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3 col-md-2 col-5">
                                <label style="font-family: inherit">Chức vụ</label>
                            </div>
                            <div class="col-md-8 col-6">
                                SupperAdmin<br>
                                Quản lí sản phẩm<br>
                                Quản trị thương hiệu<br>
                                Quản lí vận chuyển<br>
                                Quản lí Sale<br>
                                Quản trị Slide<br>
                                Quản trị danh mục<br>
                                (<a class="pos" href="#" data-key="1" data-toggle="modal" data-target=".bs-example-modal-sm">Click để thêm chức vụ</a>)
                            </div>
                        </div>
                        <hr>
                        <hr>
                        <div class="row" style="margin-left: 400px">
                            <a href="http://laravel-training.local/users/list" class="btn btn-secondary waves-effect">
                                Trở về
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="connectedServices" role="tabpanel" aria-labelledby="ConnectedServices-tab">
                        <form method="post" action="http://laravel-training.local/users/update/1">
                            <input type="hidden" name="_token" value="nF6vzGJtEs08JEi1AQ86JJ0MrHymVjEUjQGVvSFg">                                                                                <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style=" font-family: inherit" class="">Tên (*)</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        <input class="form-control " type="text" name="name" value="ADMIN">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-family: inherit" class="">Số điện thoại (*)</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        <input class="form-control " type="text" name="phone" value="0982047922">
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3 col-md-2 col-5">
                                        <label style="font-family: inherit">Địa chỉ</label>
                                    </div>
                                    <div class="col-md-8 col-6">
                                        <input class="form-control" type="text" name="address" value="">
                                    </div>
                                </div>


                                <hr>
                                <div class="row mt-2">
                                    <div class="col-sm-3 col-md-2 col-5">
                                    </div>
                                    <div class="col-md-8 col-6">
                                        <div>
                                            <p>Ghi chú: Mục tích dấu (*) là bắt buộc!!!</p>
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Cập nhập">
                                        <a class="btn btn-secondary" href="">Trở
                                            lại</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
