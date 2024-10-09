@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Customer</h1>

    <div class="row">
        <div class="col-md-12">
            <form action="{{ url('admin/customer/update/'.$customer->id) }}" method="post">
                @csrf
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Customer</h6>
                        <div class="float-right d-inline">
                            <a href="{{ route('admin.customer.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer Name *</label>
                                    <input type="text" name="customer_name" class="form-control" value="{{ $customer->customer_name }}" autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="">Customer Email *</label>
                                    <input type="text" name="customer_email" class="form-control" value="{{ $customer->customer_email }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Phone *</label>
                                    <input type="text" name="customer_phone" class="form-control" value="{{ $customer->customer_phone }}" autofocus>
                                </div>


                                <div class="form-group">
                                    <label for="">Customer Country *</label>
                                    <input type="text" name="customer_country" class="form-control" value="{{ $customer->customer_country }}" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="">Customer Address</label>
                                    <input type="text" name="customer_address" class="form-control" value="{{ $customer->customer_address }}" autofocus>
                                </div>
                                </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Customer State</label>
                                    <input type="text" name="customer_state" class="form-control" value="{{ $customer->customer_state }}" autofocus>
                                </div>
                            
                                <div class="form-group">
                                    <label for="">Customer City</label>
                                    <input type="text" name="customer_city" class="form-control" value="{{ $customer->customer_city }}" autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="">Customer Zip</label>
                                    <input type="text" name="customer_zip" class="form-control" value="{{ $customer->customer_zip }}" autofocus>
                                </div>

                                <div class="form-group">
                                    <label for="">Customer Type *</label>
                                    <select name="customer_status" class="form-control">
                                        <option value="Active" @if($customer->customer_status == 'Active') selected @endif>Active</option>
                                        <option value="Pending" @if($customer->customer_status == 'Pending') selected @endif>Pending</option>
                                    </select>
                                </div>
                               </div>
                            </div>
                            <button type="submit" class="btn btn-success float-right">Update</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
