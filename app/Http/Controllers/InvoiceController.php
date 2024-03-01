<?php

namespace App\Http\Controllers;
use App\models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function InvoiceList(){
        $invoice= new Invoice;
        $list = Invoice::select('customers.*', 'invoices.*')
        ->join('customers', 'customers.id', '=', 'invoices.id')
        ->where('customers.status','=','0')
        ->get();
        //dd($list);
        return view('invoice-list', compact('list'));
    }
    public function InvoiceCreate(){
        
        $list = DB::table('test.customers')->where('status','0')->get();
        return  view('invoice-create',compact('list'));
    }
    public function InsertInvoice(Request $request){
        //dd($request);
      
        $request->validate([
            'cus_name' => 'required|string|max:250',
        ]);
       
        $data=[
            'cust_id' => $request->cus_name,
            'amount' => $request->amount,
            'status' => $request->status,
            'created_date'=>date('Y-m-d H:i:s')
            
        ];
        $result = DB::table('invoices')->insert($data);
        if($result){
         return redirect()->route('invoice.list')
         ->withSuccess('Created Successfully!');
        }else{
         return redirect()->route('invoice.create')
         ->withSuccess('Failed!');
        }
    }
    public function InvoiveView(Request $request, int $id){
        $list = DB::table('test.customers')->where('status','0')->get();
        $invoices= Invoice::query()
        ->where('id', '=', $id)
        ->get();
        return view('invoice-view-page',compact('invoices','list'));
    }
    public function update(Request $request, int $invoice_id){
        $request->validate([
            'cus_name' => 'required|string|max:250',
        ]);
        $data=[
            'cust_id' => $request->cus_name,
            'amount' => $request->amount,
            'status' => $request->status,
            'modified_date'=>date('Y-m-d H:i:s')
            
        ];
        
      
       $result = DB::table('invoices')
        ->where('id', $invoice_id)
        ->update($data);
        if($result){
         return redirect()->route('invoice.list')
         ->withSuccess('Update Successfully!');
        }else{
         return redirect()->route('invoice.edit')
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
            return redirect()->route('invoice.list')
            ->withSuccess('Failed!');
           }
        
    }
}
