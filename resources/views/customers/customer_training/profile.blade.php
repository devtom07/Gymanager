@extends('customers.layouts.master')
@section('title', 'Thông tin khách hàng')
@section('content')
<style>
	.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
</style>
<div class="container emp-profile">
            <form method="post">
                 @foreach($customer_account as $profile)
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="{{ asset('customer/'.$profile->customer->avatar) }}" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">                   
                        <div class="profile-head">
                                    <h5>
                                        {{ $profile->customer->name }}
                                        
                                    </h5>
                                    <h6>
                                      Giới tính:  {{ $profile->customer->sex }}
                                    </h6>
                                    <p class="proile-rating">Trình độ : <span>{{ $profile->customer->level }}/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông tin khách hàng</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-4">
                        {{-- <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> --}}
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                @foreach($customer_account as $profile)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tên khách hàng</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $profile->customer->name }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mã khách hàng</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $profile->customer->code }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $profile->customer->email }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Số điện thoại</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $profile->customer->phone }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Giới tính</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $profile->customer->sex }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                @foreach($customer as $customera)
                                @foreach($customera -> services  as $services)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tên gói tập</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                               {{ $services->name }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ngày bắt đầu tập</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $services->start_date }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Ngày kết thúc tập</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $services->end_date }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                                        @endforeach
                                        @foreach($service as $sevices)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Giá</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $sevices->package->price }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>dịch vụ free</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $sevices->package->free_service }}</p>
                                            </div>
                                        </div>
                                        @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection