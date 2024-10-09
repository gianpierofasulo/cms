@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">File Manager</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 mt-2 font-weight-bold text-primary"> <a href="{{ route('admin.folders.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-undo"></i> Back</a></h6>
        <div class="float-right d-inline">
         <a href="{{ route('admin.folders.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Folder</a>
     </div>
 </div>
 <!-- --------======================================----------- -->
 <div class="container">
    <div class="row">
        <div class="col-12 col-lg-3">
            <div class="card addScrollTable">
                <div class="card-body">
                 <form action="{{ route('admin.folders.upload', $folder->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf     
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                        <label class="custom-file-label" for="inputGroupFile04"></label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Upload</button>
                    </div>
                </div>
            </form>

                <!-- <div class="d-grid"><a href="#" class="btn btn-success btn-sm w-100 mt-2 mb-3"><i class="fa fa-plus" aria-hidden="true"></i> File Upload</a> 
                </div> -->

                <h5 class="my-3">My Drive</h5>
                <div class="fm-menu">
                    <div class="list-group list-group-flush"> 
                        @foreach($subfolders as $file)
                        @if($file->name == '')
                        No File Found.
                        @else
                        <a href="{{ route('admin.folders.show', $file->id) }}" class="list-group-item py-1"><i class="fa fa-folder-open me-2 text-warning"></i><span>{{ $file->name }}</span></a>
                        @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                @php
                $totalFileSize = $imageCounts->sum('total_file_size');
                @endphp

                <h5 class="mb-0 text-primary font-weight-bold">File {{ $imageCounts->sum('total_files') }} <span class="float-end text-secondary">/ {{ formatFileSize($imageCounts->sum('total_file_size')) }}</span></h5>
                <p class="mb-0 mt-2"><span class="text-secondary">Used</span><span class="float-end text-primary">Upgrade</span>
                </p>

                <div class="progress mt-3"  style="height:7px;">
                    <div class="progress-bar progress-bar-image" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'jpg')->sum('total_file_size') + $imageCounts->where('file_type', 'png')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    <div class="progress-bar progress-bar-document" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'doc')->sum('total_file_size') + $imageCounts->where('file_type', 'pdf')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    <div class="progress-bar progress-bar-media" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'mp3')->sum('total_file_size') + $imageCounts->where('file_type', 'mp4')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    <div class="progress-bar progress-bar-other" role="progressbar" style="width: {{ ($imageCounts->whereNotIn('file_type', ['jpg', 'png', 'doc', 'pdf', 'mp3', 'mp4'])->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    <div class="progress-bar progress-bar-unknown" role="progressbar" style="width: {{ ($imageCounts->whereNull('file_type')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                </div>

                <div class="mt-3"></div>
                <div class="d-flex align-items-center">
                    <div class="fm-file-box bg-light-primary text-primary"><i class="fas fa-image"></i>
                    </div>
                    <div class="flex-grow-1 ms-2">
                        <h6 class="mb-0">Images</h6>
                        <div class="progress" style="height:7px;">
                         <div class="progress-bar progress-bar-image" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'jpg')->sum('total_file_size') + $imageCounts->where('file_type', 'png')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                     </div>
                     <p class="mb-0 text-secondary">{{ $imageCounts->where('file_type', 'jpg')->sum('total_files') + $imageCounts->where('file_type', 'png')->sum('total_files') }} files </p>
                 </div>
                 <h6 class="text-primary mb-0">{{ formatFileSize($imageCounts->where('file_type', 'jpg')->sum('total_file_size') + $imageCounts->where('file_type', 'png')->sum('total_file_size')) }}</h6>

             </div>
             <div class="d-flex align-items-center mt-3">
                <div class="fm-file-box bg-light-success text-success"><i class="fas fa-file"></i>
                </div>
                <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Documents</h6>
                    <div class="progress" style="height:7px;">
                        <div class="progress-bar progress-bar-document" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'doc')->sum('total_file_size') + $imageCounts->where('file_type', 'pdf')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    </div>
                    <p class="mb-0 text-secondary">{{ $imageCounts->where('file_type', 'doc')->sum('total_files') + $imageCounts->where('file_type', 'pdf')->sum('total_files') }} files</p>
                </div>
                <h6 class="text-primary mb-0">{{ formatFileSize($imageCounts->where('file_type', 'doc')->sum('total_file_size') + $imageCounts->where('file_type', 'pdf')->sum('total_file_size')) }}</h6>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div class="fm-file-box bg-light-danger text-danger"><i class="fas fa-video"></i>
                </div>
                <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Media Files</h6>
                    <div class="progress" style="height:7px;">
                        <div class="progress-bar progress-bar-media" role="progressbar" style="width: {{ ($imageCounts->where('file_type', 'mp3')->sum('total_file_size') + $imageCounts->where('file_type', 'mp4')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                    </div>
                    <p class="mb-0 text-secondary">{{ $imageCounts->where('file_type', 'mp3')->sum('total_files') + $imageCounts->where('file_type', 'mp4')->sum('total_files') }} files</p>
                </div>
                <h6 class="text-primary mb-0">{{ formatFileSize($imageCounts->where('file_type', 'mp3')->sum('total_file_size') + $imageCounts->where('file_type', 'mp4')->sum('total_file_size')) }}</h6>
            </div>
            <div class="d-flex align-items-center mt-3">
                <div class="fm-file-box bg-light-warning text-warning"><i class="fas fa-image"></i>
                </div>
                <div class="flex-grow-1 ms-2">
                    <h6 class="mb-0">Other Files</h6>
                    <div class="progress" style="height:7px;">
                     <div class="progress-bar progress-bar-other" role="progressbar" style="width: {{ ($imageCounts->whereNotIn('file_type', ['jpg', 'png', 'doc', 'pdf', 'mp3', 'mp4'])->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                 </div>
                 <p class="mb-0 text-secondary">{{ $imageCounts->whereNotIn('file_type', ['jpg', 'png', 'doc', 'pdf', 'mp3', 'mp4'])->sum('total_files') }} files</p>
             </div>
             <h6 class="text-primary mb-0">{{ formatFileSize($imageCounts->whereNotIn('file_type', ['jpg', 'png', 'doc', 'pdf', 'mp3', 'mp4'])->sum('total_file_size')) }}</h6>
         </div>
         <div class="d-flex align-items-center mt-3">
            <div class="fm-file-box bg-light-info text-info"><i class="fas fa-archive"></i>
            </div>
            <div class="flex-grow-1 ms-2">
                <h6 class="mb-0">Unknown Files</h6>
                <div class="progress" style="height:7px;">
                    <div class="progress-bar progress-bar-unknown" role="progressbar" style="width: {{ ($imageCounts->whereNull('file_type')->sum('total_file_size')) / $totalFileSize * 100 }}%"></div>
                </div>
                <p class="mb-0 text-secondary">{{ $imageCounts->whereNull('file_type')->sum('total_files') }} files</p>
            </div>
            <h6 class="text-primary mb-0">{{ formatFileSize($imageCounts->whereNull('file_type')->sum('total_file_size')) }}</h6>
        </div>
    </div>
</div>
</div>
<div class="col-12 col-lg-9">
    <div class="card">
        <!-- New added drag and drop -->
        <div class="content-utilities">
            <div class="page-nav">
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
            </div>
        </div>
        <hr>
        <!-- end new added -->
        <div class="card-body">
           <div class="row mt-3 addScroll">
            @if (!is_null($files))
            @foreach($files as $file)
            <div class="col-lg-3 text-center">
                <div class="images-list border magnific">
                 @if (in_array($file->extension, ['png', 'jpg', 'jpeg']))
                 <img class="file-preview" src="{{ asset($file->path) }}" alt="Image" data-fullscreen-src="{{ asset($file->path) }}"/>
                 <!-- <object class="magnific" data="{{ asset($file->path) }}" type="application/pdf" width="100%" height="100%"></object> -->
                 @else

                 <a href="{{ asset($file->path) }}" class="magnific" target="_blank" title="{{ ($file->filename) }}">
                    <img class="file-preview" src="{{ asset($file->path) }}" alt="File Preview" />
                    <!-- <i class="fa fa-search-plus"></i> -->
                </a>
                @endif
                <!-- <p class="m-0 p-2 bg-secondary text-white"><a href="{{ URL::to('admin/developer/delete/'.$file->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                Demo</p> -->
            </div><br>
        </div>
        @endforeach
        @endif
    </div>
    
    <!--end row-->
    <div class="d-flex align-items-center">
        <div>
            <h5 class="mb-0">Recent Files</h5>
        </div>
        <div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-outline-secondary">View all</a>
        </div>
    </div>
    <div class="table-responsive mt-3 addScrollTable">
        <table class="table table-striped table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th>Name <i class="bx bx-up-arrow-alt ms-2"></i>
                    </th>
                    <th>Last Modified</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               @if (!is_null($files))
               @foreach($files as $file)
               @if (in_array($file->extension, ['png', 'jpg', 'jpeg']))
               <img width="35" height="35" class="rounded-circle" src="{{ asset($file->path) }}" alt="Image" data-fullscreen-src="{{ asset($file->path) }}"/>
               @else   
               @endif
               <tr>
                <td>
                    <div class="d-flex align-items-center">
                       <a width="35" height="35" class="rounded-circle" href="{{ asset($file->path) }}" target="_blank" title="{{ ($file->filename) }}">
                           <img width="35" height="35" class="rounded-circle" src="{{ asset($file->path) }}" alt="Image">  </a>
                           <div><i class="bx bxs-file-doc me-2 font-24 text-success"></i>
                           </div>
                           <div class="font-weight-bold text-success">{{$file->filename}}</div>
                       </div>
                   </td>

                   <td>{{$file->updated_at}}</td>
                   <td><!-- <i class="fa fa-ellipsis-h font-24"></i> -->
                    <a href="{{ URL::to('admin/folders/delete/'.$file->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<style type="text/css">
    .addScrollTable{
      overflow-y:auto;
      height: 400px;
  }
  .addScroll{
      overflow-y:auto;
      height: 500px;
  }
  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.fm-file-box {
    font-size: 25px;
    background: #e9ecef;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: .25rem;
}
.ms-2 {
    margin-left: .5rem!important;
}

.fm-menu .list-group a {
    font-size: 16px;
    color: #5f5f5f;
    display: flex;
    align-items: center;
}
.list-group-flush>.list-group-item {
    border-width: 0 0 1px;
}
.list-group-item+.list-group-item {
    border-top-width: 0;
}
.py-1 {
    padding-top: .25rem!important;
    padding-bottom: .25rem!important;
}
.list-group-item {
    position: relative;
    display: block;
    padding: .5rem 1rem;
    text-decoration: none;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, .125);
}

.radius-15 {
    border-radius: 15px;
}
.fm-icon-box {
    font-size: 32px;
    background: #ffffff;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: .25rem;
}
.font-24 {
    font-size: 24px;
}
.ms-auto {
    margin-left: auto!important;
}
.font-30 {
    font-size: 30px;
}
.user-groups img {
    margin-left: -14px;
    border: 1px solid #e4e4e4;
    padding: 2px;
    cursor: pointer;
}

.rounded-circle {
    border-radius: 50%!important;
}
</style>
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
<style type="text/css">
    .progress-bar-image {
      background-color: #668cff;
  }

  .progress-bar-document {
      background-color: #5cd65c;
  }

  .progress-bar-media {
      background-color: #ff704d;
  }

  .progress-bar-other {
      background-color: #ffa64d;
  }

  .progress-bar-unknown {
      background-color: #66e0ff;
  }</style>
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