@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add  Share Subscription</h1>
    <form action="{{ route('admin.sharesubscribe.store1') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Share Subscription </h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.sharesubscribe.index1') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                       <td><label for="">Shareholder *</label></td>
                       <td> <label for="">Subscribed Share </label></td>
                       <td><label for="">Price Per Share</label></td>
                       <td><label for="">Subscribed Date </label></td>
                       <td><label for="">PaidUp Share</label></td>
                    </tr>
                    <tr>
                   <td>
                     <div class="form-group">
                    <select name="shareholder" class="form-control">
                        <option value="Select">--Select--</option>
                           @foreach($client as $row)
                       <option value="{{ $row->id }}">{{ $row->firstname }} {{ $row->middlename }} {{ $row->lastname }}</option>
                         @endforeach
                    </select>
                </div>
                   </td>
                        <td> <input type="text" name="subscribed_share" class="form-control " value="{{ old('subscribed_share') }}" autofocus></td> 
                        <td> <input type="text" name="price_per_share" id="a1" readonly="readonly" defaultValue="1000" class="form-control" value="1000" autofocus></td>
                        <td><input id="datepicker" type="text" name="subscribed_date" class="form-control" value="{{ old('subscribed_date') }}"></td>
                        <td><input type="text" name="paidup_share" id="a2" class="form-control" value="{{ old('paidup_share') }}" autofocus onblur="calculate()"></td>
                        
                    </tr>

                    <tr>
                       <td><label for="">Payment Date </label></td>
                       <td> <label for="">Payment Amount </label></td>
                       <td><label for="">Refrence </label></td>
                       <td><label for="">Description </label></td> 
                       <td>Submit</td>
                    </tr>
                    <tr>
                        <td><input id="datepicker1" type="text" name="payment_date" class="form-control" value="{{ old('payment_date') }}"></td>
                        <td><input type="number" name="payment_amount" id="a3" class="form-control" value="{{ old('payment_amount') }}" autofocus></td>
                        <td><input type="text" name="refrence" class="form-control" value="{{ old('refrence') }}" autofocus></td>
                         <td><input type="text" name="description" class="form-control" value="{{ old('description') }}" autofocus></td> 
                         <td> <button type="submit" class="btn btn-success">Submit</button></td>
                       <!-- <td><input id="datepicker1" type="text" name="issue_date" class="form-control" value="{{ old('issue_date') }}"></td> -->
                    </tr>
                        
                    <!-- <tr>
                        <td><label for="">Detail</label></td>
                    </tr>
                    <tr>
                            <td><textarea name="detail" class="form-control editor" cols="30" rows="10">{{ old('detail') }}</textarea></td>
                    </tr> -->     
            </div>   
        </div>
    </form>

@endsection


<script type="text/javascript">
  calculate = function()
{
    var resources = document.getElementById('a1').value;
    var minutes = document.getElementById('a2').value; 
    document.getElementById('a3').value = parseInt(resources)*parseInt(minutes);

   }
</script>