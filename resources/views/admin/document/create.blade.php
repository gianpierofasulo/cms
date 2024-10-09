@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Add Document</h1>
    <form action="{{ route('admin.document.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Document</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.document.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="row">
            <div class="card-body">
                <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="document_name" class="form-control" value="{{ old('document_name') }}" autofocus>
                </div>
            </div>
               <div class="col-md-6">
                <div class="form-group">
                    <label for="">Document Icon (Font Awesome 5 Codes) *</label>
                    <input type="text" name="document_url" class="form-control" value="{{ old('document_url') }}" autofocus>
                    <div class="text-danger">Example: "fa fa-file-pdf"</div>
                </div>
            </div>
                <div class="form-group">
                    <label for="">Document or File *</label>
                    <div>
                        <input type="file" name="document_photo">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="">Visiblity Status </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Public" checked>
                            <label class="form-check-label font-weight-normal" for="rr1">Public</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Private">
                            <label class="form-check-label font-weight-normal" for="rr2">Private</label>
                        </div><br>
                        <lable class="text-danger">If you make all files private, make sure you hide them in the Document Section by going to this link: 
                            <a href="{{ url('/admin/page/home/edit') }}">Click Here</a> Find Document Section and Hide </lable>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
        </div>
    </form>

@endsection
