
@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Files & Folders</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Folders</h6>

            <div class="float-right d-inline">
                    <ul class="flex-grow justify-end pr-2">
                    <li style="padding-left:1rem;padding-right:1rem">
                        <a href="{{ route('admin.folders.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> View All</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.folders.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Folder</a>
                    </li>
                </ul>
            </div>
        </div>

<!-- Display the subfolders -->
<div class="container">
   
    <!-- <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="fa fa-th-large"></span>Grid</a>
        </div>
    </div> -->







  
   <!--  <div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-2 mb-2">Drag & Drop File Uploading using Laravel 8 Dropzone JS</h1>
   
            <form action="{{ route('admin.folders.upload', $folder->id) }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <div>
                    <h3>Upload Multiple Image By Click On Box</h3>
                </div>
            </form>
        </div>
    </div>
</div> -->
   
<!-- <div class="card mt-3">
        <div class="card-header"><h2>Add/remove Multiple Input Todo Fields Dynamically using Jquery In Laravel 8</h2></div>
       <div class="card-body">
            <form action="{{ url('admin.folders.upload', $folder->id) }}" method="POST">
                @csrf
            
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                @if (Session::has('success'))
                    <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
 
                <table class="table table-bordered" id="dynamicAddRemove">  
                    <tr>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    <tr>  
                        <td><input type="text" name="moreFields[0][title]" placeholder="Enter title" class="form-control" /></td>  
                        <td><button type="button" name="add" id="add-btn" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table> 
             
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div> -->
 
</div>
    
<script type="text/javascript">
    
    var i = 0;
        
    $("#add-btn").click(function(){
    
        ++i;
    
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="moreFields['+i+'][title]" placeholder="Enter title" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
</script>


	<!-- File upload form -->
    <div class="card-body">
            <div class="row">
            <div class="col-md-12">
    <form action="{{ route('admin.folders.upload', $folder->id) }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                
            </form>
        </div>
    </div>
</div>

 



	<div class="card-body">
    <div class="row">
        @foreach($subfolders as $file)
                @if($file->name == '')
                No File Found.
                @else
                 <div class="col-md-2">
                <!-- <i class="fa fa-folder fa-2x mb-3 text-warning"></i>  -->
                <div class="card text-center" style="width: 10rem;">
                	<div class="card-body">
                <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"><i class="fa fa-folder fa-4x text-warning"></i> <br>{{ $file->name }}</a></div>
            </div><br>
            </div>
                @endif
        @endforeach

@if (!is_null($files))
        @foreach($files as $file)
        <div class="col-md-2">
            <div class="card text-center" style="width:10rem;">
                <div class="card-body">
                    <!-- Check if the file is an image -->
                    @if (in_array($file->extension, ['png', 'jpg', 'jpeg']))
                        <img class="file-preview" src="{{ asset($file->path) }}" alt="Image" data-fullscreen-src="{{ asset($file->path) }}"/>
                        <!-- <object class="magnific" data="{{ asset($file->path) }}" type="application/pdf" width="100%" height="100%"></object> -->
                    @else
                        <a href="{{ asset($file->path) }}" target="_blank">
                            <img class="file-preview" src="{{ asset($file->path) }}" alt="File Preview" />
                        </a>
                    @endif
                </div>
            </div><br/>
        </div>
    @endforeach
@endif

<!-- Add CSS -->
<style>
    .file-preview {
        max-width: 100%;
        height: auto;
        cursor: pointer;
    }
    .file-preview-fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 9999;
        object-fit: contain;
    }
    .close-button {
        position: fixed;
        top: 20px;
        right: 20px;
        color: white;
        font-size: 30px;
        cursor: pointer;
        z-index: 10000;
    }
</style>


<div id="closeButton" class="close-button" style="display: none;" onclick="closePreview()">X</div>



       <!--  @if (!is_null($files))
            @foreach($files as $file)
                <div class="col-md-2">
                    <div class="card text-center" style="width: 10rem;">
                        <div class="card-body">
                            <img src="{{ asset($file->path) }}" alt="Image" type="application/pdf" />
                             <object data="{{ asset($file->path) }}" type="application/pdf" width="100%" height="100%"></object>
                            <embed src="{{ asset($file->path) }}" type="application/pdf" width="500" height="600"> 
                        </div>
                    </div><br />
                </div>
            @endforeach
        @endif -->

    </div>
</div>



</div>

<!-- File upload form -->
<!-- <form action="{{ route('admin.folders.upload', $folder->id) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
    <input type="file" name="file">
    <button type="submit">Upload</button>
    </div>
</div>
</div>
</form> -->
</div>
<!-- ------------------- -->
<div class="card shadow mb-4">
<div class="container main-section pt-20">
<div class="row">
<div class="col-lg-12 col-sm-12 col-12">
<div class="row">
<div class="col-lg-4 col-12 bg-white tab-head">
<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-file" aria-hidden="true"></i> Sub-folders</a>
</li>
<!-- <li class="nav-item">
<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-picture-o" aria-hidden="true"></i> Images</a>
</li> -->
</ul>
</div>
<div class="col-lg-12 main-tab">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<div class="row m-0">
<div class="col-lg-4 document bg-white pt-3">
<span class="badge badge-success pl-2 pr-2">Excel</span>
<span class="badge badge-info pl-2 pr-2">Word</span>
<span class="badge badge-danger pl-2 pr-2">PowerPoint</span>
<span class="badge badge-warning text-white pl-2 pr-2">PDF</span>
<h5 class="pt-2 m-0"><strong>Folders</strong></h5>


 @foreach($subfolders as $file)
                @if($file->name == '')
                No File Found.
                @else
      <p class="pt-2 m-0"> <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"><i class="fa fa-folder-open pl-2 text-warning pr-1" aria-hidden="true"></i> {{ $file->name }}</a></p>
      @endif
      @endforeach


<div class="card-body">
            <div class="row">
            <div class="col-md-12">
    <form action="{{ route('admin.folders.upload', $folder->id) }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                
            </form>
        </div>
    </div>
</div>
<a href="#" class="btn btn-success btn-sm w-100 mt-2 mb-3"><i class="fa fa-plus" aria-hidden="true"></i> File Upload</a>
</div>
<div class="col-lg-8 document-left-list">
<div class="bg-white document-left-list-second p-3">
<div class="row">

<div class="col-lg-4 text-center">
<div class="document-list border">
<i class="fa fa-file-excel-o" aria-hidden="true"></i>
<p class="m-0 p-2 bg-danger text-white">Excel gatabase 2017 1.2 MB</p>
</div>
</div>

<div class="col-lg-4 text-center">
<div class="document-list border">
<i class="fa fa-file-excel-o" aria-hidden="true"></i>
<p class="m-0 p-2 bg-info text-white">Excel gatabase 2016 1.4 MB</p>
</div>
</div>
<div class="col-lg-4 text-center">
<div class="document-list border">
<i class="fa fa-file-word-o" aria-hidden="true"></i>
<p class="m-0 p-2 bg-primary text-white">Word gatabase 2017 1.2 MB</p>
</div>
</div>
</div>
<div class="row mt-3">
    @if (!is_null($files))
        @foreach($files as $file)
<div class="col-lg-4 text-center">
<div class="images-list border">
     @if (in_array($file->extension, ['png', 'jpg', 'jpeg']))
                        <img class="file-preview" src="{{ asset($file->path) }}" alt="Image" data-fullscreen-src="{{ asset($file->path) }}"/>
                        <!-- <object class="magnific" data="{{ asset($file->path) }}" type="application/pdf" width="100%" height="100%"></object> -->
                    @else
                    <a href="{{ asset($file->path) }}" target="_blank">
                        <img class="file-preview" src="{{ asset($file->path) }}" alt="File Preview" />
                    </a>
                    @endif
<p class="m-0 p-2 bg-secondary text-white">Developer</p>
</div>
</div>
@endforeach
@endif
</div>

</div>
</div>
</div>
</div>
<!-- end -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end -->
<!-- Add JavaScript -->
<script>
    // Enable full-screen preview on image click
    const filePreviews = document.querySelectorAll('.file-preview');
    filePreviews.forEach(filePreview => {
        filePreview.addEventListener('click', function() {
            if (this.classList.contains('fullscreen')) {
                this.classList.remove('fullscreen');
                document.getElementById('closeButton').style.display = 'none';
            } else {
                // Toggle fullscreen class on clicked image
                filePreviews.forEach(fp => {
                    fp.classList.remove('fullscreen');
                    document.getElementById('closeButton').style.display = 'none';
                });
                this.classList.add('fullscreen');
                document.getElementById('closeButton').style.display = 'block';
            }
        });
    });
</script>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

@endsection