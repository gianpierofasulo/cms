


<!-- end -->
@if(!empty($subfolders))
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
        @endif

<div class="bg-white p-3">
<div class="row mt-2">

@if(!empty($files))
        @foreach($files as $file)
<div class="col-lg-4 text-center">
	@if (in_array($file->extension, ['png', 'jpg', 'jpeg']))
<div class="{{ asset($file->path) }}" data-fullscreen-src="{{ asset($file->path) }}" alt="file_image">
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



<div class="col-lg-4 text-center">
<div class="images-list border">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK9DkWY2BgUcJMNZXyAz6Cpmiq-AhC098wtOnBL-3foioVeyaI">
<p class="m-0 p-2 bg-secondary text-white">Designer</p>
</div>
</div>
<div class="col-lg-4 text-center">
<div class="images-list border">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxK2Mc2iU_bKarcgB-RfJxzXHzpCjwhH1kLXnmuO0tASdC3Akm">
<p class="m-0 p-2 bg-secondary text-white">CEO</p>
</div>
</div>
</div>

</div>



<!-- end -->