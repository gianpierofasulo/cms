@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Share Subscription</h1>

    <form action="{{ url('admin/sharesubscribe/update/'.$sharesubscribe->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Share Subscription</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.sharesubscribe.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                       <td><label for="">Select Shareholder *</label></td>
                       <td> <label for="">Subscribed Share </label></td>
                       <td><label for="">Price Per Share</label></td>
                       <td><label for="">Subscribed Date </label></td>
                       <td><label for="">PaidUp Share</label></td>
                    </tr>

                    <tr>
                        <td><div class="form-group">
                            <select name="shareholder" class="form-control">
                                @foreach($client as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $sharesubscribe->shareholder) selected @endif>{{ $row->firstname }} {{ $row->middlename }}</option>
                                @endforeach
                            </select>
                        </div></td>

                      <!--  <td><div class="form-group">
                            <select name="shareholder" class="form-control">
                                @foreach($client as $row)
                                    <option value="{{ $row->id }}" @if($row->id == $sharesubscribe->id) selected @endif>{{ $row->firstname }} {{ $row->middlename }}</option>
                                @endforeach
                            </select>
                        </div></td> -->
                        <td><input type="number" name="subscribed_share" class="form-control" value="{{ $sharesubscribe->subscribed_share }}" autofocus></td>
                        <td> <input type="number" name="price_per_share" id="a1" class="form-control" value="{{ $sharesubscribe->price_per_share }}" readonly="readonly" autofocus></td>
                        <td><input id="datepicker" type="text" name="subscribed_date" class="form-control" value="{{ $sharesubscribe->subscribed_date }}"></td>
                        <td> <input type="number" name="paidup_share" onblur="calculate()" id="a2" class="form-control" value="{{ $sharesubscribe->paidup_share }}" autofocus></td>    
                       </tr>
                     <tr>
                       <td><label for="">Payment Date </label></td>
                       <td> <label for="">Payment Amount </label></td>
                       <td><label for="">Refrence </label></td>
                       <td><label for="">Description </label></td> 
                       <td>Submit</td>
                    </tr>
                    <tr>
                        <td><input id="datepicker1" type="text" name="payment_date" class="form-control" value="{{ $sharesubscribe->payment_date }}"></td>
                        <td><input type="number" name="payment_amount" readonly="readonly" id="a3" class="form-control" value="{{ $sharesubscribe->payment_amount }}"></td>
                        <td><input type="text" name="refrence" class="form-control" value="{{ $sharesubscribe->refrence }}"></td>
                        <td><input type="text" name="description" class="form-control" value="{{ $sharesubscribe->description }}"></td>
                         <td><button type="submit" class="btn btn-success">Update</button></td>

                       <!-- <td><input type="number" name="per_value" id="a2" onblur="calculate()" class="form-control" value="{{ $sharesubscribe->per_value }}"></td>
                        <td><input type="number" name="capital" id="a3" disabled="disabled" class="form-control" value="{{ $sharesubscribe->capital=$sharesubscribe->payment_amount * $sharesubscribe->per_value }}"></td>-->
                       <!-- <td><input id="datepicker1" type="text" name="issue_date" class="form-control" value="{{ $sharesubscribe->issue_date }}"></td>-->
                    </tr>
                    <table>
                           
      <!--  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <div style="text-align: center;" class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Behind The Scine </h6>
            </div>
                 <tr>
                    <td><label for="">Existing Photo</label></td>
                    <td><label for="">Change Photo</label></td>

                    <td><label for="">Phone</label></td>
                    <td> <label for="">E-mail</label></td>
                    <td> <label for="">Address</label></td>
                </tr>
                <tr>
                    <td><img src="{{ asset('public/uploads/'.$sharesubscribe->photo) }}" alt="" height="60" width="50" class=""></td>
                   <td><input type="file" name="photo"></td>
                    <td><input type="tel" name="phone" class="form-control" value="{{ $sharesubscribe->phone }}"></td>
                    
                    <td><input type="email" name="email" class="form-control" value="{{ $sharesubscribe->email }}"></td>
                    <td><input type="text" name="address" class="form-control" value="{{ $sharesubscribe->address }}"></td>
                   
                </tr>
            </table> -->
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