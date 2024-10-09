@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Counter Item</h1>

    <form action="{{ url('admin/counter/update/'.$counter_item->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Counter Item</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.counter.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Counter Title *</label>
                            <input type="text" name="counter_title" class="form-control" value="{{ $counter_item->counter_title }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Counter Number *</label>
                            <input type="text" name="counter_number" class="form-control" value="{{ $counter_item->counter_number }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="">Counter Favicon</label>
                            <input type="text" name="counter_favicon" class="form-control" value="{{ $counter_item->counter_favicon }}">
                        </div>
                       
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection
