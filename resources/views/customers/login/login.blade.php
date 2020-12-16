@extends('customers.login.index')
@section('content')
<div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{asset('admin')}}/images/logogym.gif" alt="" width="200px">
                            </a>
                        </div>
                        <div class="login-form">
                        <form action="{{route('loginCustomer')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="text" name="email" placeholder="Name accounts" value="{{ old('email') }}">
                                </div>
                                @error('email')
                                <p style="color:red">{{$message}}</p>
                                @enderror
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                @error('password')
                                <p style="color:red">{{$message}}</p>
                                @enderror
                                @if(session('message'))
                                <p style="color:red">{{ session('message') }}</p>
                                @endif
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection