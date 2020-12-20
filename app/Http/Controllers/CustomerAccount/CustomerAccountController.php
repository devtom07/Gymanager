<?php

namespace App\Http\Controllers\CustomerAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAccount;
use App\Models\Customer;
use App\Http\Requests\CustomerAccountRequest;
use App\Http\Requests\CustomerAccount\CustomerAccountEditRequest;
use DB;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cutomer_account = CustomerAccount::with('customer')->orderBy('id','desc')->get();
        return view('admin.customer_account.index', compact('cutomer_account'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $customer = Customer::all();
        return view('admin.customer_account.add',compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerAccountRequest $request)
    {
        //
        $customer_account = new CustomerAccount;
        $customer_account->name=$request->name;
        $customer_account->email=$request->email;
        $customer_account->password=\Illuminate\Support\Facades\Hash::make($request->password);
        $customer_account->status=$request->status;
        $customer_account->id_customer=$request->id_customer;
        $customer_account->save();
        // dd($customer_account);
        Alert()->success('Thông báo', 'Thêm thành công!!');
        return redirect()->route('customer_account');
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
        $customer_account = CustomerAccount::find($id);
        $customer = Customer::all();
        return view('admin.customer_account.edit', compact('customer_account','customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerAccountEditRequest $request, $id)
    {
        //
        $customer_account=CustomerAccount::find($id);
        $customer_account->name=$request->name;
        $customer_account->email=$request->email;
        // $customer_account->password=\Illuminate\Support\Facades\Hash::make($request->password);
        $customer_account->id_customer=$request->id_customer;
        $customer_account->status=$request->status;
        $customer_account->update();
        Alert()->success('Thông báo', 'Sửa thành công!!');
        return redirect(route('customer_account'));
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
        $customer_account=CustomerAccount::find($id);
        $customer_account->delete();
        Alert()->success('Thông báo', 'Xóa thành công!!');
        return redirect()->back()->with('thongbao','Xóa thành công');
    }

    public function search(Request $request){
        if ($request->ajax()) {
            $output='';
            $customer_account = CustomerAccount::where('name','LIKE','%' . $request->searchAcc .'%')
                                // ->orWhere('email','LIKE','%' . $request->search .'%')
                                ->get();
            if ($customer_account) {
                foreach ($customer_account as $key => $cutomer_accounts) {
                        $output .='<tr>
                            <td>'. $key + 1 . '</td>
                            <td>'. $customer_accounts->name . '</td>
                            <td>'. $customer_accounts->email . '</td>
                            <td>'. $customer_accounts->status . '</td>

                        </tr>';
                    }    
            }
            return Response($output);
        }
    }
}
