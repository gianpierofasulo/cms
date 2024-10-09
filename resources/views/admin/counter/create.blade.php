@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Counter Item</h1>

    <form action="{{ route('admin.counter.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Counter Item</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.counter.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Counter Title *</label>
                            <input type="text" name="counter_title" class="form-control" value="{{ old('counter_title') }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Counter Number *</label>
                            <input type="text" name="counter_number" class="form-control" value="{{ old('counter_number') }}" autofocus>
                        </div>

                        <div class="form-group">
                            <label for="">Counter Favicon</label>
                            <input type="text" name="counter_favicon" class="form-control" value="{{ old('counter_favicon') }}" autofocus>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>

@endsection