<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Requests\ValidateAddPosts;
use App\Http\Requests\ValidateEditPosts;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Models\Cate_posts;

class PostsController extends Controller
{
    public function index()
    {
        $listPosts = Post::all();
        return view('admin.san-pham.list-bai-viet.index',compact('listPosts'));

    }
    public function create()
    {
        $listCate_posts = Cate_posts::all();
        return view('admin.san-pham.list-bai-viet.add', compact('listCate_posts'));
    }
    public function store(ValidateAddPosts $request)
    {
        $get_image = $request->file('avatar');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
        $get_image->move('posts',$new_image);
        $posts = new Post;
        $posts->start_posts = $request->start_posts;
        $posts->title = $request->title;
        $posts->detail = $request->detail;
        $posts->id_posts_cate = $request->id_posts_cate;
        $posts['avatar'] = $new_image;
        $posts->save();
        Alert()->success('thành công','bạn đã thêm bài viết thành công');
        return redirect()->route('listposts');
    }

    public function show($id)
    {
       
    }

    public function edit($id)
    {
        $listPosts = Post::find($id);
        $listCate_posts = Cate_posts::all();
        return view('admin.san-pham.list-bai-viet.edit',['listPosts'=>$listPosts, 'listCate_posts'=>$listCate_posts]);
    }
    public function update(ValidateEditPosts $request, $id)
    {
         $get_image = $request->file('avatar');
         if($get_image){
             $get_name_image = $get_image->getClientOriginalName();
             $name_image = current(explode('.',$get_name_image));
             $new_image =  $name_image . rand(0,99) . '.' .$get_image->getClientOriginalExtension();
             $get_image->move('posts',$new_image);
             $posts = new Posts;
             $arr['start_posts'] = $request->start_posts;
             $arr['detail'] = $request->detail;
             $arr['title'] = $request->title;
             $arr['id_posts_cate'] = $request->id_posts_cate;
             $arr['avatar'] = $new_image;
             $posts->where('id', $id)->update($arr);
             // dd($posts);
         }else{
             $posts = new Post;
             // $arr['name'] = $request->name;
             $arr['start_posts'] = $request->start_posts;
             $arr['detail'] = $request->detail;
             $arr['title'] = $request->title;
             $arr['id_posts_cate'] = $request->id_posts_cate;
             $posts->where('id', $id)->update($arr);
             // dd($posts);
         }
        Alert()->success('Thành công','Cập nhật bài viết thành công');
        return redirect()->action('Sanpham/PostsController@index');
    }
    public function destroy($id)
    {
        Posts::where('id',$id)->delete();
        Alert()->success('Thành công','Xóa bài viết thành công');
        return back();
    }
}
