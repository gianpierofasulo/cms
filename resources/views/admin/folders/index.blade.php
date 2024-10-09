@extends('admin.admin_layouts')
@section('admin_content')

<style type="text/css">
    .card-box {
      padding: 20px;
      border-radius: 3px;
      margin-bottom: 30px;
      background-color: #fff;
    }

    .file-man-box {
      padding: 20px;
      border: 1px solid #e3eaef;
      border-radius: 5px;
      position: relative;
      margin-bottom: 20px
    }

    .file-man-box .file-close {
      color: #f1556c;
      position: absolute;
      line-height: 24px;
      font-size: 24px;
      right: 10px;
      top: 10px;
      visibility: hidden
    }

    .file-man-box .file-img-box {
      line-height: 10px;
      text-align: center
    }

    .file-man-box .file-img-box img {
      height: 64px
    }

    .file-man-box .file-download {
      font-size: 32px;
      color: #98a6ad;
      position: absolute;
      right: 10px
    }

    .file-man-box .file-download:hover {
      color: #313a46
    }

    .file-man-box .file-man-title {
      padding-right: 25px
    }

    .file-man-box:hover {
      -webkit-box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02);
      box-shadow: 0 0 24px 0 rgba(0, 0, 0, .06), 0 1px 0 0 rgba(0, 0, 0, .02)
    }

    .file-man-box:hover .file-close {
      visibility: visible
    }
    .text-overflow {
      text-overflow: ellipsis;
      white-space: nowrap;
      display: block;
      width: 100%;
      overflow: hidden;
    }
    h5 {
      font-size: 15px;
    }
    .addScroll{
      overflow-y:auto;
      height: 500px;
    }
  </style>
<h1 class="h3 mb-3 text-gray-800">File Manager</h1>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 mt-2 font-weight-bold text-primary">View Folders</h6>
    <div class="float-right d-inline">
      <a href="{{ route('admin.folders.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Folder</a>
    </div>
  </div>
  <div class="content addScroll">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card-box">
            <div class="card-header">
              <div class="d-flex justify-content-between align-items-right">
                <h6 class="card-title">{{ __('My Files') }}</h6>
                <div class="col-md-2 float-right">
                  <button id="list-view-btn"><i class="fa fa-bars"></i> List</button>
                  <button id="grid-view-btn"><i class="fa fa-th-large"></i> Grid</button>
                </div>
              </div>
            </div>
            <!-- Grid view -->
            <div id="grid-view" style="display: block;">
              <div class="row">
                 @php
                $totalFileSize = $imageCounts->sum('total_file_size');
                @endphp

                @foreach($folders as $key => $file)
                @if($file->parent_id ==NULL)
                <div class="col-lg-3 col-xl-2" style="display: {{ $key < 19 ? 'block' : 'none' }};">  
                  <div style="border: solid orange 1px; margin-bottom: 5px;margin-right: 5px" class="file-man-box"><a href="{{ URL::to('admin/folders/delete1/'.$file->id) }}" class="file-close" onClick="return confirm('Are you sure?');">
                    <i class="fa fa-trash-alt"></i></a>
                    <div class="file-img-box"> <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"><i class="fa fa-folder fa-4x mb-3 text-warning"></i> </a>
                    </div><a href="{{ route('admin.folders.show', $file->id) }}" class="file-download"><i class="fa fa-download"></i></a>
                    <div class="file-man-title">
                      <h5 class="mb-0 text-overflow"> <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"> {{ $file->name }}</a></h5>
                      <p class="mb-0"><small>{{ formatFileSize($imageCounts->where('file_type', 'jpg')->sum('total_file_size') + $imageCounts->where('file_type', 'png')->sum('total_file_size')) }}</small></p>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
              </div>
            </div>
            <div class="text-center mt-3">
              <button id="loadMoreBtn" onClick="loadMore()" type="button" class="btn btn-outline-danger w-md waves-effect waves-light"><i class="mdi mdi-refresh"></i> Load More Files</button>
            </div>
            
            <!-- <div id="grid-view" style="display: block;">
             <div class="row">
              @foreach($folders as $file)
              @if($file->parent_id ==NULL)
              <div class="col-lg-3 col-xl-2">
                <div style="border: solid orange 1px; margin-bottom: 5px;margin-right: 5px" class="file-man-box"><a href="{{ URL::to('admin/folders/delete1/'.$file->id) }}" class="file-close" onClick="return confirm('Are you sure?');">
                  <i class="fa fa-trash-alt"></i></a>
                  <div class="file-img-box"> <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"><i class="fa fa-folder fa-4x mb-3 text-warning"></i> </a>
                  </div><a href="#" class="file-download"><i class="fa fa-download"></i></a>
                  <div class="file-man-title">
                    <h5 class="mb-0 text-overflow"> <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"> {{ $file->name }}</a></h5>
                    <p class="mb-0"><small>568.8 kb </small></p>
                  </div>
                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div> -->

          <!-- List view -->
          <ul id ="list-view" style = "display:none;"class = "list-group">
            @foreach($folders as $file)
            @if($file->parent_id ==NULL)
            <li style= "margin-bottom:10px;"class= "list-group-item d-flex justify-content-between align-items-center">
             <a class="parent-folder" href="{{ route('admin.folders.show', $file->id) }}"><i class="fa fa-folder fa-2x mb-1 text-warning"></i>  {{ $file->name }}</a>
             <div>
              <a href="{{ URL::to('admin/folders/delete1/'.$file->id) }}" onClick = "return confirm('Are you sure?');"><i class = "fa fa-trash-alt"></i></a>
              <!-- <a href="#" ><i class = "fa fa-download"></i></a> -->
            </div>
          </li>
          @endif
          @endforeach
        </ul>


        

<!-- =================== -->


</div>
</div>
<!-- end col -->
</div>
<!-- end row -->
</div>
<!-- container -->
</div>
<!-- ============ -->


<div class="card-header"><h6>Files and folders</h6></div>
<div class="card-body">
  <div class="row">

   <!-- file Folder -->
   <div class="col-xl-6 col-md-6 mb-4">
    <!-- Folder Doughnt CHART -->
    <div class="card border-left-danger shadow">
      <div class="card-header">
        <h6 class="card-title">{{ __('10 folders') }}</h6>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="FolderChart" class="chart-design"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>

  <!-- Job By Location -->
  <div class="col-xl-6 col-md-6 mb-4">
    <!-- FIle Pie CHART -->
    <div class="card border-left-danger shadow">
      <div class="card-header">
        <h6 class="card-title">{{ __('Files by Folders') }}</h6>
      </div>
      <div class="card-body">
        <div class="chart">
          <canvas id="FileFChart" class="chart-design"></canvas>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
</div>

<script type="text/javascript">
  // Function to switch between grid and list view
  $(document).ready(function(){
    $("#grid-view-btn").click(function(){
      $("#grid-view").show();
      $("#list-view").hide();
    });
    $("#list-view-btn").click(function(){
      $("#grid-view").hide();
      $("#list-view").show();
    });
  });
</script>

<script>
    var visibleCount = 10;
    var totalData = {{ count($folders) }};
    function loadMore() {
      visibleCount += 10;
      document.querySelectorAll('#grid-view .col-lg-3.col-xl-2').forEach(function(elem, index) {
        elem.style.display = index < visibleCount ? 'block' : 'none';
      });
      if (visibleCount >= totalData) {
      document.getElementById('loadMoreBtn').style.display = 'none'; // Hide the button when all data is visible
    }
  }
</script>

<script src="{{ asset('public/backend/vendor/chart.js/Chart.js') }}"></script>
<script>
            //- Folders PIE CHART -
            //-------------
            var folderChart = $('#FolderChart').get(0).getContext('2d')
            var FolderData = {
              labels: {!! json_encode($folderChart->pluck('name')->all()) !!},
              datasets: [{
                data: {!! json_encode($folderChart->pluck('total')->all()) !!},
                backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
                '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
                ],
              }]
            }
            var folderChartOptions = {
              maintainAspectRatio: false,
              responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(folderChart, {
              type: 'pie',
              data: FolderData,
              options: {
                responsive: true,
                plugins: {
                  legend: {
                    position: 'right',
                  },
                  title: {
                    display: true,
                    text: 'Folder',
                  }
                },
              },
            }
            // var donutChart = new Chart(locationChart, {
            //     type: 'pie',
            //     data: FolderData,
            //     options: folderChartOptions
            // }
            )

            // file
            var fileChart = $('#FileFChart').get(0).getContext('2d');
            var fileData = {
              labels: {!! json_encode($filesChart->pluck('name')->all()) !!},
              datasets: [{
                data: {!! json_encode($filesChart->pluck('t')->all()) !!},
                backgroundColor: [
                '#b91d47',
                '#00aba9',
                '#2b5797',
                '#e8c3b9',
                '#1e7145',
                '#00c0ef',
                '#3c8dbc',
                '#d2d6de',
                '#AE4CCF',
                '#FF5F7E',
                '#99FEFF',
                '#000000',
                '#FB3640'
                ],
              }]
            };

            var fileChartOptions = {
              maintainAspectRatio: false,
              responsive: true,
            };

            var donutChart = new Chart(fileChart, {
    type: 'doughnut',  // Changed from 'pie' to 'doughnut'
    data: fileData,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'right',
        },
        title: {
          display: true,
          text: 'Files Count by Category',
        },
      },
    },
  });
</script>

<script>
       // Example using jQuery to handle the AJAX request
       $('.parent-folder').contextmenu(function (e) {
         e.preventDefault();

         var parentFolder = $(this).data('folder-name');
         var newFolderName = prompt('Enter the name of the new subfolder:', '');

         if (newFolderName) {
           $.ajax({
             type: 'POST',
             url: '/subfolder/create',
             data: {
               parent_folder: parentFolder,
               new_folder_name: newFolderName
             },
             success: function (response) {
                   // Handle success response here
                 },
                 error: function (xhr) {
                   // Handle error response here
                 }
               });
         }
       });
     </script>
     @endsection



