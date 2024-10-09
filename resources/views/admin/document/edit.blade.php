@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Document</h1>

    <form action="{{ url('admin/document/update/'.$document->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="current_photo" value="{{ $document->document_photo }}">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Document</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.document.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="document_name" class="form-control" value="{{ $document->document_name }}" autofocus>
                </div>
                
                <div class="form-group">
                    <label for="">Document Icon (Font Awesome 5 Codes) *</label>
                    <input type="text" name="document_url" class="form-control" value="{{ $document->document_url }}" autofocus>
                    <div class="text-danger">Example: "fa fa-file-pdf"</div>
                </div>
                <div class="form-group">
                    <label for="">Existing Document or File</label>
                    <div>
                        <img src="{{ asset('public/uploads/'.$document->document_photo) }}" alt="" class="w_200">
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="">Change Document or File</label>
                    <div>
                        <input type="file" name="document_photo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Status </label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr1" value="Public" @if($document->status == 'Public') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr1">Public</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="rr2" value="Private" @if($document->status == 'Private') checked @endif>
                            <label class="form-check-label font-weight-normal" for="rr2">Private</label>
                        </div>
                        <lable class="text-danger">If you make all files private, make sure you hide them in the Document Section by going to this link: <a href="https://www.dynamicmfi.com/admin/page/home/edit">https://www.dynamicmfi.com/admin/menu/view</a> Find Document Section and Hide </lable>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </form>

@endsection