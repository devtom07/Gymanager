<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;

class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.index');
    }

    public function contact(){
    	return view('fontend.contact.index');
    }
    public function blogs(){
    	return view('fontend.blogs.index');
    }
    public function newmember(){
    	return view('fontend.newmember.index');
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
