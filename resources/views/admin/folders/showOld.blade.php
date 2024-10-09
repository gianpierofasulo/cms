
@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Files & Folders</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 mt-2 font-weight-bold text-primary">View Folders</h6>

            <div class="float-right d-inline">
                    <ul class="flex-grow justify-end pr-2">
                    <li>
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
   
    <div class="well well-sm">
        <strong>Display</strong>
        <div class="btn-group">
            <a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-th-list">
            </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                class="fa fa-th-large"></span>Grid</a>
        </div>
    </div>

	<!-- File upload form -->
		<form action="{{ route('admin.folders.upload', $folder->id) }}" method="POST" enctype="multipart/form-data">
		    @csrf
    		<div class="card-body">
            <div class="row">
    
            <div class="col-md-6">
    		    <input type="file" name="file" class="custom-file-input">
                 <label class="custom-file-label" for="customFile">Choose file</label>
    		  <div class="d-inline">
    		       <button class="btn btn-primary btn-sm" type="submit">Upload</button>
    		  </div>
    		</div>
    		</div>
    		</div>
		</form>

        @foreach($subfolders as $file)
    @if($file->name == '')
        No File Found.
    @else
        <div class="col-md-2">
            <div class="card text-center" style="width:10rem;">
                <div class="card-body">
                    <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}" oncontextmenu="showPasswordPrompt(event, {{ $file->id }})">
                        <i class="fa fa-folder fa-4x text-warning"></i> <br />
                        {{ $file->name }}
                    </a>
                </div>
            </div>
        </div>
    @endif
@endforeach

<script>
    function showPasswordPrompt(event, folderId) {
        event.preventDefault(); // Prevent the default right-click context menu

        var password = prompt("Enter the folder password:");
        if (password != null && password !== "") {
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action", "{{ route('verify.password') }}");

            var folderIdField = document.createElement("input");
            folderIdField.setAttribute("type", "hidden");
            folderIdField.setAttribute("name", "folder_id");
            folderIdField.setAttribute("value", folderId);

            var passwordField = document.createElement("input");
            passwordField.setAttribute("type", "hidden");
            passwordField.setAttribute("name", "password");
            passwordField.setAttribute("value", password);

            form.appendChild(folderIdField);
            form.appendChild(passwordField);

            document.body.appendChild(form);
            form.submit();
        }
    }
</script>
	<div class="card-body">
    <div class="row">
        @foreach($subfolders as $file)
                <!-- <h2 class="mt_30">{{_('Core Value')}} </h2> -->
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
                    @else
                        <a href="{{ asset($file->path) }}" target="_blank">
                            <img class="file-preview" src="{{ asset($file->path) }}" alt="File Preview" />
                        </a>
                    @endif
                </div>
            </div><br />
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
    .file-preview.fullscreen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 9999;
        object-fit: contain;
    }
</style>

<!-- Add JavaScript -->
<script>
    // Enable full-screen preview on image click
    const filePreviews = document.querySelectorAll('.file-preview');
    filePreviews.forEach(filePreview => {
        filePreview.addEventListener('click', function() {
            if (this.classList.contains('fullscreen')) {
                this.classList.remove('fullscreen');
            } else {
                // Toggle fullscreen class on clicked image
                filePreviews.forEach(fp => fp.classList.remove('fullscreen'));
                this.classList.add('fullscreen');
            }
        });
    });
</script>



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

@foreach($subfolders as $subfolder)
    <!-- <a href="{{ route('admin.folders.show', $subfolder->id) }}">{{ $subfolder->name }}</a> -->

   <!--  <div class="col-md-12"><i class="fa fa-folder fa-2x mb-3 text-warning"></i> <a class="parent-folder" href="{{ route('admin.folders.show', $subfolder->id) }}" data-folder-id="{{ $subfolder->id }}">{{ $subfolder->name }}</a>
    </div> -->



<!-- <div class="container">
    <div class="row">
        <div class="col-md-12">
            <i class="fa fa-folder fa-2x mb-3 text-warning"></i>
            <a class="parent-folder" href="{{ route('admin.folders.show', $subfolder->id) }}">{{ $subfolder->name }}</a>
        </div>
    </div>
</div> -->
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

<style type="text/css">
	.folder-container {
  /* Styles for normal view */
}

.folder-container.grid-view {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  gap: 20px;
  /* Additional styles for grid view */
}


</style>
<script>
	$(function() {
  // Toggle between grid and normal view
  $('#gridViewBtn').on('click', function() {
    $('#folderContainer').toggleClass('grid-view');
  });
});
</script>
<!-- Grid View Button -->
<!-- <button id="gridViewBtn">Grid View</button>
<div id="folderContainer" class="folder-container">
    <div class="folder-item">
        <i class="fa fa-folder fa-2x mb-3 text-warning"></i>
        <a class="parent-folder" href="{{ route('admin.folders.show', $subfolder->id) }}">{{ $subfolder->name }}</a>
    </div>
</div> -->






    <!-- must review  -->

    <!-- <div class="dropdown">
                    <a class="parent-folder dropdown-toggle" href="#" data-folder-id="{{ $subfolder->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $subfolder->name }}
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item create-subfolder" href="#">Create Subfolder</a>
                        <a class="dropdown-item rename-folder" href="#" data-folder-id="{{ $subfolder->id }}">Rename Folder</a>
                        <a class="dropdown-item share-folder" href="#" data-folder-id="{{ $subfolder->id }}">Share Folder</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item delete-folder" href="#" data-folder-id="{{ $subfolder->id }}">Delete Folder</a>
                    </div>
                </div> -->

                <!-- Modal for renaming folder -->
<div class="modal fade" id="renameFolderModal" tabindex="-1" role="dialog" aria-labelledby="renameFolderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="renameFolderModalLabel">Rename Folder</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="text" id="newFolderName" class="form-control" placeholder="Enter the new name for the folder">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="renameFolderBtn">Rename</button>
            </div>
        </div>
    </div>
</div>


@endforeach

<!-- Display the files within the folder -->
@if (!is_null($files))
@foreach($files as $file)
    <p>{{ $file->filename }}</p>
@endforeach
@endif

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            var selectedFolderId;
            var selectedFolderName;

            // Right-click event on folder
            $('.folder').on('contextmenu', function (e) {
                e.preventDefault();

                selectedFolderId = $(this).data('folder-id');
                selectedFolderName = $(this).data('folder-name');

                var contextMenu = $('#folderContextMenu');
                contextMenu.css({
                    display: 'block',
                    left: e.pageX,
                    top: e.pageY
                });
            });

            // Click event to hide context menu on clicking anywhere else
            $(document).on('click', function () {
                $('#folderContextMenu').hide();
            });

            // Rename folder option
            $('#renameFolderOption').on('click', function (e) {
                e.preventDefault();
                $('#newFolderName').val(selectedFolderName);
                $('#renameFolderModal').modal('show');
            });

            // Delete folder option
            $('#deleteFolderOption').on('click', function (e) {
                e.preventDefault();
                if (confirm('Are you sure you want to delete the folder?')) {
                    $.ajax({
                        type: 'DELETE',
                        url: '/subfolder/' + selectedFolderId,
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.success);
                            // Perform any additional logic or update the view if necessary
                        },
                        error: function (xhr) {
                            alert('An error occurred while deleting the folder.');
                        },
                    });
                }
            });

            // Create subfolder option
            $('#createSubfolderOption').on('click', function (e) {
                e.preventDefault();
                var newFolderName = prompt('Enter the name of the new subfolder:', '');
                if (newFolderName) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('subfolder.create') }}',
                        data: {
                            parent_folder_id: selectedFolderId,
                            new_folder_name: newFolderName,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.success);
                            // Perform any additional logic or update the view if necessary
                        },
                        error: function (xhr) {
                            alert('An error occurred while creating the subfolder.');
                        },
                    });
                }
            });

            // Rename folder modal button click
            $('#renameFolderBtn').on('click', function (e) {
                e.preventDefault();
                var newFolderName = $('#newFolderName').val();
                if (newFolderName) {
                    $.ajax({
                        type: 'PUT',
                        url: '/subfolder/' + selectedFolderId + '/rename',
                        data: {
                            new_folder_name: newName,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.success);
                            $('#renameFolderModal').modal('hide');
                            // Perform any additional logic or update the view if necessary
                        },
                        error: function (xhr) {
                            alert('An error occurred while renaming the folder.');
                        },
                    });
                }
            });
        });
    </script>


<!-- @section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('.dropdown-menu').on('click', function (e) {
                e.stopPropagation();
            });

            $('.parent-folder').on('contextmenu', function (e) {
                e.preventDefault();
                var folderId = $(this).data('folder-id');
                var menu = $('#context-menu');

                menu.data('folder-id', folderId);
                menu.css({
                    display: 'block',
                    left: e.clientX,
                    top: e.clientY
                });
            });

            $('.menu-item').on('click', function () {
                var itemId = $(this).data('item-id');
                var folderId = $('#context-menu').data('folder-id');

                if (itemId === 'create-subfolder') {
                    var newFolderName = prompt('Enter the name of the new subfolder:', '');
                    if (newFolderName) {
                        $.ajax({
                            type: 'POST',
                            url: '{{ route('subfolder.create') }}',
                            data: {
                                parent_folder_id: folderId,
                                new_folder_name: newFolderName,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function (response) {
                                alert(response.success);
                            },
                            error: function (xhr) {
                                alert('An error occurred while creating the subfolder.');
                            },
                        });
                    }
                }

                if (itemId === 'rename-folder') {
                    var newFolderName = prompt('Enter the new name for the folder:', '');
                    if (newFolderName) {
                        $.ajax({
                            type: 'PUT',
                            url: '/subfolder/' + folderId + '/rename',
                            data: {
                                new_folder_name: newFolderName,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function (response) {
                                alert(response.success);
                            },
                            error: function (xhr) {
                                alert('An error occurred while renaming the folder.');
                            },
                        });
                    }
                }

                if (itemId === 'share-folder') {
                    $.ajax({
                        type: 'POST',
                        url: '/subfolder/' + folderId + '/share',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            alert(response.success);
                        },
                        error: function (xhr) {
                            alert('An error occurred while sharing the folder.');
                        },
                    });
                }

                if (itemId === 'delete-folder') {
                    if (confirm('Are you sure you want to delete the folder?')) {
                        $.ajax({
                            type: 'DELETE',
                            url: '/subfolder/' + folderId,
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function (response) {
                                alert(response.success);
                            },
                            error: function (xhr) {
                                alert('An error occurred while deleting the folder.');
                            },
                        });
                    }
                }

                $('#context-menu').hide();
            });

            $(document).on('click', function () {
                $('#context-menu').hide();
            });
        });
    </script> -->
@endsection



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('.parent-folder').contextmenu(function(event) {
                event.preventDefault();

                var parentFolderId = $(this).data('folder-id');
                var newFolderName = prompt('Enter the name of the new subfolder:', '');

                if (newFolderName) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('subfolder.create') }}',
                        data: {
                            parent_folder_id: parentFolderId,
                            new_folder_name: newFolderName,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.success);
                        },
                        error: function(xhr) {
                            alert('An error occurred while creating the subfolder.');
                        },
                    });
                }
            });
        });
    </script> -->
@endsection