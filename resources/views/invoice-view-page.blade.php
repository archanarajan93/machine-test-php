@extends('auth.layouts')

@section('content')

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Create Customer</h1>
                    @foreach($invoices as $rec)
        <form action="{{ route('invoice.update',$rec->id)}}" method="POST">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">

<label>Name</label>
<select id="cus_name" name="cus_name"  class="form-control">
@foreach($list as $record)
    <option value="{{$record->id}}" {{ old('status', $rec->status) == 0 ? 'selected' : '' }}>{{$record->cust_name}}</option>
    
    @endforeach
</select>

</div>  
<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
<label>Amount</label>
 <input autocomplete="off" required="" tabindex="2" type="number" class="form-control movenext" name="amount" id="amount" value="{{$rec->amount}}">

</div>  
<div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
<label>Status</label>
<select id="status" name="status"  class="form-control">
    <option value="0" {{ old('status', $rec->status) == 0 ? 'selected' : '' }}>Unpaid</option>
    <option value="1" {{ old('status', $rec->status) == 1 ? 'selected' : '' }}>Paid</option>
    <option value="2" {{ old('status', $rec->status) == 2 ? 'selected' : '' }}>Cancelled</option>
</select>
</div>  
<button type="submit" style="background:#000; color:#fff;margin: 13px;" class="btn"> Update</button>
@csrf                 
</form>
@endforeach  
    </div>    
</div>
</section>  
@endsection