<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewMemberRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\NewMember;
class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.index');
    }

    public function blogs(){
    	return view('fontend.blogs.index');
    }
    public function newmember(){
    	return view('fontend.newmember.index');
    }
    public function detailblog(){
    	return view('fontend.blogs.detailblog');
	}
    public function service(){
    	return view('fontend.services.index');
	}
    public function addMember(NewMemberRequest $request){
        $new = new NewMember;
        $new->name = $request->name;
        $new->phone = $request->phone;
        $new->service = $request->service;
        $new->email = $request->email;
        $new->content = $request->content;
        $new->save();
        // Alert()->success('Thông báo!', 'Bạn đã đăng kí thành công');
        return redirect()->back()->with('thongbao', 'Bạn đã đăng kí thàng công!!!Cảm ơn!!');
    }

    public function contact(){
        return view('fontend.contact.index');
    }

    public function addContact(ContactRequest $request){
    	// alert('aaaa');
    	$contact = new Contact;
    	$contact->title=$request->title;
    	$contact->desc=$request->desc;
    	$contact->name=$request->name;
    	$contact->email=$request->email;
    	$contact->phone=$request->phone;
    	$contact->save();
    	// Alerts()->success('Thông báo', 'Thành công!!!');
    	return redirect()->route('contact')->with('thongbao', 'Bạn gửi cho admin thành công');
    }
}
