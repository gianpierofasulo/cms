@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Document</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Document</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.document.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>File</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $i=0; @endphp
                        @foreach($document as $row)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><i class='{{ ($row->document_url) }}' style='color: red;font-size: 30px'></i></i></td>
                            <td>{{ $row->document_name }}</td>
                            <!-- <td>{{ $row->document_url }}</td>-->
                            <td> <object data="{{ asset('public/uploads/'.$row->document_photo) }}" type="application/pdf" width="100%" height="100%">
                            </object>
                            <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download><i class="fa fa-download"> </i>Dawnload</a>
                            <a class="btn btn-success btn-sm" target="_blank" href="{{ asset('public/uploads/'.$row->document_photo) }}"><i class="fa fa-eye"> </i>Read</a></td>
                            <td>
                               <a href="{{ URL::to('admin/document/edit/'.$row->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>

                               <!-- <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download><i class="fa fa-download"> </i>Dawnload</a> -->

                               <a href="{{ URL::to('admin/document/delete/'.$row->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a> 
                            </td>
                           
                            <!--<td>
                                <a href="{{ asset('public/uploads/'.$row->document_photo) }}" class="btn btn-primary btn-sm" download>
                                <img src="{{ asset('public/uploads/'.$row->document_photo) }}" alt="" class="w_150"> <i class="fa fa-download"></i> </a>
                            </td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
