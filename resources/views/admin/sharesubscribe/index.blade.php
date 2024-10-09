@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Share Subscription</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Company</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.sharesubscribe.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Shareholder</th>
                        <th>Subscribed Share</th>
                        <th>Price Per Share</th>
                        <th>Subscribed Date</th>
                        <th>PaidUp Share</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($sharesubscribe as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$row->shareholder}}</td>
                            <td>{{$row->subscribed_share}}</td>
                            <td>{{$row->currency}} {{$row->price_per_share}}</td>
                            <td>{{$row->subscribed_date}}</td>
                            <td>{{$row->paidup_share}}</td>
                            <td>
                                <a href="{{ URL::to('admin/sharesubscribe/detail/'.$row->id) }}" class="btn btn-success btn-sm btn-block" target="_blank">Detail</a>
                                <a href="{{ URL::to('admin/sharesubscribe/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="{{ URL::to('admin/sharesubscribe/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
