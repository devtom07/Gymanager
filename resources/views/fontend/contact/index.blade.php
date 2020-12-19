@extends('fontend.layouts.index')
@section('title', 'Liên hệ')
@section('content')
 <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 d-flex align-items-center slider-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 pt-70 text-center">
                                <h2>Liên Hệ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--?  Contact Area start  -->
        <section class="contact-section">
            <div class="container">
                
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Liên Hệ Với Chúng Tôi</h2>
                        @if(session('thongbao'))
                    <h5 class="alert-success alert">{{ session('thongbao') }}</h5>
                    @endif
                    </div>

                    <div class="col-lg-8">
                        <form class="form-contact contact_form" method="post" action="{{ route('contact.add') }}" >
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="title" id="subject" type="text" placeholder="Tiêu đề" value="{{ old('title') }}">
                                    </div>
                                    @error('title')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="desc" id="message" cols="30" rows="9"placeholder=" Nội dung"></textarea>
                                    </div>
                                    @error('desc')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="name"  type="text" placeholder="Họ và tên" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                                    </div>
                                    @error('email')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" type="number" placeholder="Số điện thoại" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                    <p style="color: red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Số 35 Lê Đức Thọ</h3>
                                <p>Việt Nam </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>0392146603</h3>
                                <p>Thứ 2 đến chủ nhật 6am to 8pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>gymanager@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection