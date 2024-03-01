@extends('auth.layouts')

@section('content')

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Customer</h1>
                    @foreach($customers as $rec)
        <form action="{{ route('customer.update',$rec->id)}}" method="POST">
        @csrf   
     
    <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Name</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_name" id="cus_name" value="{{$rec->cust_name}}">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Address</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_address" id="cus_address" value="{{$rec->cust_address}}">
                                
                            </div>  
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Email Id</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="email" id="email" value="{{$rec->cust_email}}">
                                
                            </div>  <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <label>Mobile</label>
                                 <input autocomplete="off" required="" tabindex="2" type="text" class="form-control movenext" name="cus_mobile" id="cus_mobile" value="{{$rec->cust_mobile}}">
                               
                            </div>  
                            <button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Update</button>
                           
                           
</form>
@endforeach  
    </div>    
</div>
</section>  
@endsection