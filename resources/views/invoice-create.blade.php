@extends('auth.layouts')

@section('content')

<section class="content">
    
    <div class="box">
        <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Invoice</h1>
            <form action="/insert" method="POST">
           
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

                                <label>Name</label>
                                <select id="cus_name" name="cus_name"  class="form-control">
                                @foreach($list as $rec)
                                    <option value="{{$rec->id}}">{{$rec->cust_name}}</option>
                                    @endforeach
                                </select>
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Amount</label>
                                 <input autocomplete="off" required="" tabindex="2" type="number" class="form-control movenext" name="amount" id="amount" value="">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Status</label>
                                <select id="status" name="status"  class="form-control">
                                    <option value="0">Unpaid</option>
                                    <option value="1">Paid</option>
                                    <option value="2">Cancelled</option>
                                </select>
                            </div>  
                            <button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Create</button>
                            @csrf    
</form>
    </div>    
</div>
</section>  
@endsection