@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">Storage Usage</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 mt-2 font-weight-bold text-primary">View Folders</h6>
    <div class="float-right d-inline">
      <a href="{{ route('admin.folders.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New Folder</a>
    </div>
  </div>
  <div class="container">
    <div class="card mt-3">
      <div class="card-header"><h6>Files and folders</h6></div>
      <div class="card-body">
        <div class="row">

          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-danger shadow">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead>
                      <tr>
                        <th>Table</th>
                        <th>Size (MB)</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($storageUsage as $table)
                      <tr>
                        <td>{{ $table['Table'] }}</td>
                        <td>{{ $table['Size (MB)'] }}</td>
                      </tr>
                      @endforeach
                      <tr>
                        <td><strong>Total</strong></td>
                        <td><strong>{{ $totalSize }}</strong></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div> 
            </div>
          </div>

          <div class="col-xl-12 col-md-12 mb-4">
            <div class="card border-left-danger shadow">
              <canvas id="tableSizesChart" width="400" height="200"></canvas>
            </div>
          </div>

        </div>

      </div>
    </div>


  </div>



</div>
<script src="{{ asset('public/backend/vendor/chart.js/Chart.js') }}"></script>
<script>
    // Get the data for the chart
    let tableSizes = @json($storageUsage);

    // Extract table names and sizes from the data
    let tableNames = tableSizes.map(table => table['Table']);
    let tableSizesInMB = tableSizes.map(table => table['Size (MB)']);

    // Create a new Chart instance
    let ctx = document.getElementById('tableSizesChart').getContext('2d');
    let barChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: tableNames,
        datasets: [{
          label: 'Table Sizes (MB)',
          data: tableSizesInMB,
                backgroundColor: 'rgba(75, 192, 192, 0.5)', // Customize the color
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        </script>
        @endsection



