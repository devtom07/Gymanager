<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewMemberRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Service;
use App\Models\NewMember;
use App\Models\Post;
use App\Models\Cate_posts;
class FontendController extends Controller
{
    public function index()
    {
        return view('fontend.index');
    }

    public function blogs(){
        $listPosts = Post::all();
        $cate = Cate_posts::all();
    	return view('fontend.blogs.index', compact('listPosts', 'cate'));
    }

    public function cateBlogs($id){
        // $listPosts = Post::all();
        $cate = Cate_posts::find($id);
        $post = Post::where('id_posts_cate',$id)->get();
        return view('fontend.blogs.cate_blog', compact('cate', 'post'));
    }

    public function newmember(){
    	$service = Service::all();
    	return view('fontend.newmember.index', compact('service'));
    }
    public function detailblog($id){
        $detail = Post::find($id);
        $cate = Cate_posts::all();
    	return view('fontend.blogs.detailblog', compact('detail','cate'));
	}
    public function service(){
    	return view('fontend.services.index');
    }
    public function about(){
    	return view('fontend.about.index');
	}
    public function addMember(NewMemberRequest $request){
        $new = new NewMember;
        $new->name_member = $request->name;
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
