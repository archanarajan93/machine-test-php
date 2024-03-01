@extends('auth.layouts')

@section('content')

<section class="content">
    
                <div class="box">
                    <div class="box-body table-responsive" style="padding-left: 247px;">
                    <h1>Customer Invoice Details</h1>
                    <button style="background:#1c8f4f; color:#fff"><a href="{{ route('invoice.create') }}">Add</a></button>
        <table width=80% border=1>
            <thead>
                <tr>
                    <td style="background: #dbd3d3;">Name</td>
                    <td style="background: #dbd3d3;">Address</td>
                    <td style="background: #dbd3d3;">Email Id</td>
                    <td style="background: #dbd3d3;">Mobile No.</td>
                    <td style="background: #dbd3d3;">Amount</td>
                    <td style="background: #dbd3d3;">Status</td>
                    <td style="background: #dbd3d3;"></td>
                </tr>
            </thead>
            <tbody>
            @foreach($list as $rec)
                <tr>
                    <td>{{$rec->cust_name}}</td>
                    <td>{{$rec->cust_address}}</td>
                    <td>{{$rec->cust_email}}</td>
                    <td>{{$rec->cust_mobile}}</td>
                    <td>{{$rec->amount}}</td>
                    
                    <td>
                    
                        @if ($rec->status == 0)
                          Unpaid
                        @elseif ($rec->status == 1)
                          Paid
                        @else
                            Cancelled
                        @endif
                    </td>
                    <td>
                        
                        <button><a  href="{{ route('invoice.edit',$rec->id)}}">Edit </a> </button>
                        <button class=btn-delete data-id="{{$rec->id}}" >Delete </button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
</section>  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('.btn-delete').click(function() {
    var id = $(this).attr('data-id');
    var url = '/invoice/' + id;
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url: url,
      type: 'DELETE',
      success: function(data) {
        location.reload();
        $(`tr[data-id="${id}"]`).remove();
      },
      error: function(xhr) {
        // Handle error
        console.log(xhr.responseText);
      }
    });
  });
});
</script>
@endsection

