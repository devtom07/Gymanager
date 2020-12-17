@extends('customers.layouts.master')
@section('title','Đổi mật khẩu')
@section('content')
	<div class="container">
	<form method="post" action="{{ route('changePassword.a', Auth::guard('customer_accounts')->user()->id) }}">
		@csrf
		<div class="form-group" style="position:relative;">
			<label>Mật khẩu cũ</label>
			<input type="password" name="current_password" class="form-control">
			<a style="position: absolute;top:54%;right: 10px;color: red;" href="javascript:void(0)"><i class="fa fa-eye"></i></a>
			@error('current_password')
			<p style="color: red">{{ $message }}</p>
			@enderror
		</div>	
		<div class="form-group" style="position:relative;">
			<label>Mật khẩu mới</label>
			<input type="password" name="password" class="form-control">
			<a style="position: absolute;top:54%;right: 10px;color: red;" href="javascript::void(0)"><i class="fa fa-eye"></i></a>
			@error('password')
			<p style="color: red">{{ $message }}</p>
			@enderror
		</div>	
		<div class="form-group" style="position:relative;">
			<label>Nhập lại mật khẩu mới</label>
			<input type="password" name="password_confirm" class="form-control">
			<a style="position: absolute;top:54%;right: 10px;color: red;" href="javascript:void(0)"><i class="fa fa-eye"></i></a>
			@error('password_confirm')
			<p style="color: red">{{ $message }}</p>
			@enderror
		</div>
		<button type="submit" class="btn btn-success">Cập nhập</button>	
	</form>
	</div>
@endsection
@section('script')
    <script>
        $(function(){
            $(".form-group a").click(function(){
                let $this = $(this);
                if ($this.hasClass('active')) {
                    $this.parents('.form-group').find('input').attr('type','password')
                    $this.removeClass('active');
                }else{
                    $this.parents('.form-group').find('input').attr('type','text')
                    $this.addClass('active');
                }
            });
        });
    </script>
@endsection