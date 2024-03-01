<?php

namespace App\Http\Controllers;
use App\models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Log;

class CustomerController extends Controller
{
    public function Create(){
      return  view('customer-create');
    }

    public function CustomerList(){
        $customer = new Customer;
        $list = Customer::query()
        ->where('status', '=', '0')
        ->get();


        //$list = $customer->get();
        return view('customer-list', compact('list'));
    }

    public function InsertData(Request $request){
       
       
        $request->validate([
           'cus_name' => 'required|string|max:250',
           'email' => 'required|email|max:250|unique:users',
           'cus_address'=>'required',
           'cus_mobile' => 'required|max:11'
       ]);
      
       $data=[
           'cust_name' => $request->cus_name,
           'cust_address' => $request->cus_address,
           'cust_email' => $request->email,
           'cust_mobile'=>$request->cus_mobile,
           'status'=>0,
           'created_date'=>date('Y-m-d H:i:s')
           
       ];
       $result = DB::table('test.customers')->insert($data);
       if($result){
        return redirect()->route('list')
        ->withSuccess('Created Successfully!');
       }else{
        return redirect()->route('create')
        ->withSuccess('Failed!');
       }
       
    }
    public function view(Request $request, int $id){

        $customers = Customer::query()
        ->where('id', '=', $id)
        ->get();
        return view('customerviewpage',compact('customers'));
    }
public function update(Request $request, int $customer_id){
    $request->validate([
        'cus_name' => 'required|string|max:250',
        'email' => 'required|email|max:250|unique:users',
        'cus_address'=>'required',
        'cus_mobile' => 'required|max:11'
    ]);
   
    $data=[
        'cust_name' => $request->cus_name,
        'cust_address' => $request->cus_address,
        'cust_email' => $request->email,
        'cust_mobile'=>$request->cus_mobile,
        'status'=>0,
        'modified_date'=>date('Y-m-d H:i:s')
        
    ];
  
   $result = DB::table('test.customers')
    ->where('id', $customer_id)
    ->update($data);
    if($result){
     return redirect()->route('list')
     ->withSuccess('Update Successfully!');
    }else{
     return redirect()->route('customer.edit')
     ->withSuccess('Failed!');
    }
}
public function delete(Request $request, int $id){
    $data=['status'=>1,
    'modified_date'=>date('Y-m-d H:i:s')];

    $result = DB::table('test.customers')
    ->where('id', $id)
    ->update($data);
    if($result){
        
    return response()->json(['success' => true]);
       }else{
        return redirect()->route('list')
        ->withSuccess('Failed!');
       }
    
}

}
