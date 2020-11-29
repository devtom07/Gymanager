<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthurController extends Controller
{

    public function admin()
    {
        return view('authur.login');
    }
    public function login(Request $request){
        $user = [
            'email' =>$request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($user)){
            Auth::user()->last_login = new \DateTime();
            Auth::user()->save();
            alert()->success('Thành công','Bạn đã đăng nhâp thành công');
            return  redirect()->route('dashboard');
        }else{
            Session::put('message','Tài khoản hoặc mật khẩu không chính xác');
            return  redirect()->route('admin');
        }
    }
  public function logout(){
      Auth::logout();
      alert()->info('Thành công','Bạn đã đăng xuất thành công');
      return  redirect()->route('admin');

  }




    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
