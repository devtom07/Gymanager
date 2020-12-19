<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Contact;
class AdminController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }

    public function contact(){
        $contact= Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        Alert()->success('Thông báo', 'Bạn đã xóa thành công!!');
        return redirect()->back();
    }

    public function create()
    {
        //
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
