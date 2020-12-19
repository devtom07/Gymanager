@extends('fontend.layouts.index')
@section('title', 'Đăng kí form')
@section('content')
<main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center slider-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center pt-70">
                                <h1 style="font-size: 40px;color:white">Đăng kí để trở thành thành viên!!!</h1>
                                @if(session('thongbao'))
                                <h3 style="color: green">{{ session('thongbao') }}</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Contact form Start -->
        <div class="contact-form-main mt-100 mb-100">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span>Đăng ký qua form</span>
                                            <h1>Để được tư vấn các dịch vụ tốt nhất!</h1>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="{{ route('newmember.add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Họ và tên*">
                                            @error('name')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="phone" placeholder="Số điện thoại*" value="{{ old('phone') }}">
                                            @error('phone')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="service" id="select2" style="display: none;">
                                                <option value="Gói kèm HLV">Gói kèm HLV</option>
                                                <option value="Gói không HLV">Gói không HLV</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="email" value="{{ old('email') }}" placeholder="Email*">
                                            @error('email')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-65">
                                            <textarea name="content" id="message" placeholder="Thông tin">{{old('content') }}</textarea>
                                            @error('content')
                                            <p style="color: red">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn" type="submit">Đăng ký</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="{{url('fontend')}}/img/gallery/contact_form.png" alt="">
            </div>
        </div>
        <!-- Contact form End -->
    </main>
    @endsection