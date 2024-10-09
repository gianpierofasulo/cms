@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">Create Folder</h1>
<form action="{{ route('admin.folders.store') }}" method="post">

    @csrf
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">Add Folders</h6>
            <div class="float-right d-inline">
                <a href="{{ route('admin.folders.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
              
                    <div class="form-group col-md-6">
                        <label for="name">Folder Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="parent_id">Parent Folder</label>
                        <select name="parent_id" id="parent_id" class="form-control">
                            <option value="">Select Parent Folder</option>
                            @foreach ($parentFolders as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
               
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

