<?php

namespace App\Http\Controllers\Sanpham;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cate_posts;
class CatePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $listCategory = Cate_posts::All();
        return view('admin.san-pham.danh-muc-bai-viet.index', compact('listCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.san-pham.danh-muc-bai-viet.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cate_post = new Cate_posts;
        $cate_post->name=$request->name;
        $cate_post->save();
        // dd($cate_post);
        Alert()->success('Thông báo!', 'Thêm thành công!!');
        return redirect(route('listcate_posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $cate_post=Cate_posts::find($id);
        $cate_post->delete();
        Alert()->success('Thông báo', 'Bạn đã xóa thành công!');
        return back();
    }
}
