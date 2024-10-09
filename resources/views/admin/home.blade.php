@extends('admin.admin_layouts')

@section('admin_content')

@php
$total_post = DB::table('blogs')->count();
$total_projects = DB::table('projects')->count();
$total_services = DB::table('services')->count();
$total_team_members = DB::table('team_members')->count();
$total_photos = DB::table('photos')->count();
$total_branch = DB::table('branches')->count();
$total_videos = DB::table('videos')->count();
$total_menus = DB::table('menus')->count();

$total_customers = DB::table('customers')->count();


$total_roles = DB::table('roles')->count();

$total_subscribers = DB::table('subscribers')->count();
$total_management = DB::table('senior_managements')->count();
$total_directors = DB::table('board_directors')->count();
$total_applications = DB::table('job_applications')->count();
$total_partners = DB::table('partners')->count();
$total_documents = DB::table('documents')->count();
$total_admins = DB::table('admins')->count();

$total_sliders = DB::table('sliders')->count();
$total_completed_orders = DB::table('orders')->where('payment_status','Completed')->count();
$total_pending_orders = DB::table('orders')->where('payment_status','Pending')->count();


$incomplete = DB::table('setup_guides')->where('status', 0)->count();


@endphp

<div class="row">
    <div class="col-xl-12 col-md-12 mb-2">
        <h1 class="h3 mb-3 text-gray-800">{{ __('Dashboard')}}</h1>
    </div>
</div>

<!-- Box Start -->
<div class="row dashboard-page">

      

       <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Posts')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_post }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        
<!-- {{ $incomplete}} -->

    <!-- @require('admin.setupguide'); -->

        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                         <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Job Applicants')}}</div>
                         <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_applications}}</div>
                     </div>
                     <div class="col-auto">
                        <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <!--  <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Admins')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_admins}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

       

        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Roles')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_roles}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-key fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Branchs')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_branch }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-building fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Projects')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_projects }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


      <!--  <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Services')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_services }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bullhorn fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Team Members')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_team_members }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-id-card fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Photos')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_photos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Videos')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_videos }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-house-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Sliders')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_sliders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-globe fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    -->

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Customers')}}</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_customers }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-bars fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <!-- BAR CHART -->
        <div class="card border-left-danger shadow">
            <div class="card-header">
                <h6 class="card-title">{{ __('your_earnings_overview_of_this_year') }}</h6>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="barChart" class="chart-design"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- Subscriber chart -->
    <div class="col-xl-6 col-md-6 mb-4">
        <!-- BAR CHART -->
        <div class="card border-left-danger shadow">
            <div class="card-header">
                <h6 class="card-title">{{ __('subscriber_overview_of_this_year') }}</h6>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="SubscriberBarChart" class="chart-design"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
        <!-- BLOG BAR CHART -->
        <div class="card border-left-danger shadow">
            <div class="card-header">
                <h6 class="card-title">{{ __('blog_count_by_category') }}</h6>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="BlogsChart" class="chart-design"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- Job By Location -->
    <div class="col-xl-6 col-md-6 mb-4">
        <!-- BLOG BAR CHART -->
        <div class="card border-left-danger shadow">
            <div class="card-header">
                <h6 class="card-title">{{ __('jobs_by_location') }}</h6>
            </div>
            <div class="card-body">
                <div class="chart">
                    <canvas id="JoblocationChart" class="chart-design"></canvas>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    <!-- file Folder -->
    <div class="col-xl-6 col-md-6 mb-4">
        <!-- Folder Doughnt CHART -->
        <div class="card border-left-danger shadow">
            <div class="card-header">
                <h6 class="card-title">{{ __('folders') }}</h6>
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
                <h6 class="card-title">{{ __('Files') }}</h6>
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


       <!-- <div class="col-xl-6 col-md-6 mb-4">
             <canvas class="card col-md-6 border-left-danger shadow" id="locationChart" style="width:100%;max-width:600px"></canvas>
         </div> -->
         
         <!-- chart for blog -->
        <!-- <div class="col-xl-6 col-md-6 mb-4">
            <canvas class="card col-md-6 border-left-danger shadow" id="blogChart" style="width:100%;max-width:600px"></canvas>
        </div></br> -->
        
        <script>
  //subscriber chart
  var areaChartData = {
    labels: {!! json_encode($subscriber1['months1']) !!},
    datasets: [{
        label: 'Subscribers',
        backgroundColor: ['#2b5797', '#00aba9', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
        '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
        ],
        borderColor: 'rgba(60,141,188,0.8)',
        pointRadius: false,
        pointColor: '#3b8bba',
        pointStrokeColor: 'rgba(60,141,188,1)',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
                    // data: {!! json_encode($earnings) !!}
                    data: {!! json_encode($subscriber1['amount1']) !!}
                }, ]
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#SubscriberBarChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp = areaChartData.datasets
            barChartData.datasets = temp

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false,
                display: false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
            // end subscriber

            // earning or order chart
            var areaChartData = {
                // labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                labels: {!! json_encode($earnings['months']) !!},
                datasets: [{
                    label: 'Earnings',
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
                    '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
                    ],
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    // data: {!! json_encode($earnings) !!}
                    data: {!! json_encode($earnings['amount']) !!}
                }, ]
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp = areaChartData.datasets
            barChartData.datasets = temp

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false,
                display: false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })
            // end earning

              //-------------
            //- Jobs PIE CHART -
            //-------------
            var JoblocationChart = $('#JoblocationChart').get(0).getContext('2d')
            var locationData = {
                labels: {!! json_encode($popular_countries->pluck('job_location')->all()) !!},
                datasets: [{
                    data: {!! json_encode($popular_countries->pluck('total')->all()) !!},
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
                    '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
                    ],
                }]
            }
            var JoblocationChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(JoblocationChart, {
                type: 'pie',
                data: locationData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'right',
                        },
                        title: {
                            display: true,
                            text: 'Jobs Location',
                        }
                    },
                },
            }
            // var donutChart = new Chart(locationChart, {
            //     type: 'pie',
            //     data: locationData,
            //     options: locationChartOptions
            // }
            )

            // blog
            //-------------
            //- blog PIE CHART -
            //-------------
            var BlogChart = $('#BlogsChart').get(0).getContext('2d');
            var BlogData = {
                labels: {!! json_encode($blog->pluck('category_name')->all()) !!},
                datasets: [{
                    data: {!! json_encode($blog->pluck('count')->all()) !!},
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

            var BlogChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
            };

            var donutChart = new Chart(BlogChart, {
    type: 'doughnut',  // Changed from 'pie' to 'doughnut'
    data: BlogData,
    options: {
      responsive: true,
      plugins: {
        legend: {
          position: 'right',
      },
      title: {
          display: true,
          text: 'Blogs Count by Category',
      },
  },
},
});


        //     var BlogChart = $('#BlogsChart').get(0).getContext('2d')
        //     var BlogData = {
        //         labels: {!! json_encode($blog->pluck('category_name')->all()) !!},
        //         datasets: [{
        //             data: {!! json_encode($blog->pluck('count')->all()) !!},
        //             backgroundColor : [
        //             '#b91d47',
        //             '#00aba9',
        //             '#2b5797',
        //             '#e8c3b9',
        //             '#1e7145',
        //             '#00c0ef', '#3c8dbc', '#d2d6de', '#AE4CCF',
        //             '#FF5F7E', '#99FEFF', '#000000', '#FB3640'
        //             ],
        
        //         }]
        //     }
        //     var BlogChartOptions = {
        //         maintainAspectRatio: false,
        //         responsive: true,
        //     }
        //     //Create pie or douhnut chart
        //     // You can switch between pie and douhnut using the method below.
        //     var donutChart = new Chart(BlogChart, {
        //         type: 'pie',
        //         data: BlogData,
        //         options: {
        //             responsive: true,
        //             plugins: {
        //                 legend: {
        //                     position: 'right',
        //                 },
        //                 title: {
        //                     display: true,
        //                     text: 'Blogs Count by Category',
        //                 }
        //             },
        //         },
        //     // var donutChart = new Chart(BlogChart, {
        //     //     type: 'pie',
        //     //     data: BlogData,
        //     //     options: BlogChartOptions
        // })
//-------------
            //- Jobs PIE CHART -
            //-------------
            var folderChart = $('#FolderChart').get(0).getContext('2d')
            var FolderData = {
                labels: {!! json_encode($folders->pluck('name')->all()) !!},
                datasets: [{
                    data: {!! json_encode($folders->pluck('total')->all()) !!},
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
            //     options: locationChartOptions
            // }
            )

            // file
            var fileChart = $('#FileFChart').get(0).getContext('2d');
            var fileData = {
                labels: {!! json_encode($filesD->pluck('name')->all()) !!},
                datasets: [{
                    data: {!! json_encode($filesD->pluck('t')->all()) !!},
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
          text: 'Folder file Count',
      },
  },
},
});
            
</script>
<!--         <div class="row"> -->        
 <div class="col-12 col-lg-5">
    <div class="card">
        <div class="card-header">
            <div class=" d-flex justify-content-between align-items-center">
                <h6 class="card-title">{{ __('recently_published_jobs') }}</h6>
                <a href="{{ route('admin.job.index') }}" class="btn btn-dark">{{ __('view_all') }}</a>
            </div>
        </div>
        <div class="card-table table-responsive p-0">
            <table class="table table-vcenter mb-0">
                <thead>
                    <tr>
                        <th>{{ __('title') }}</th>
                        <th>{{ __('Job_vacancy') }}</th>
                        <th>{{ __('job_type') }}</th>
                        <th>{{ __('action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($latest_jobs->count() > 0)
                    @foreach ($latest_jobs as $latest)
                    <tr>
                        <td>
                            <a href="{{ route('admin.job.index') }}">
                                {{ $latest->job_title }}
                            </a>
                        </td>
                        <td class="text-muted">
                            {{ $latest->job_vacancy  }}</td>
                            <td class="text-muted">{{  $latest->job_type }}
                            </td>
                            <td class="text-muted">
                                <a href="{{ route('admin.job.index') }}" class="btn btn-info ml-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="4" class="text-center">
                                <div class="empty py-5">
                                    <p message="{{ __('no_data_found') }}" />
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end jobs -->
    <div class="col-xl-7 col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 class="card-title">{{ __('recently_purchased_orders') }}</h6>
                    <a href="{{ route('admin.order.index') }}" class="btn btn-dark">{{ __('view_all') }}</a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('order_no') }}</th>
                            <th>{{ __('amount') }}</th>
                            <th>{{ __('customer_type') }}</th>
                            <th>{{ __('payment_provider') }}</th>
                            <th>{{ __('payment_status') }}</th>
                            <th>{{ __('created_time') }}</th>
                            <th></th>
                            <th class="text-center">{{ __('actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($latest_earnings->count() > 0)
                        @foreach ($latest_earnings as $earning)
                        <tr>
                            <td>
                                #{{ $earning->txnid }}
                            </td>
                            <td class="text-muted">
                                {{
                                    $earning->paid_amount
                                }}
                            </td>
                            <td class="text-muted">
                                @if ($earning->customer_type == 'Guest')
                                <span class="badge badge-secondary">{{ ucfirst(Str::replace('_', ' ', $earning->customer_type)) }}</span>
                                @else
                                <span class="badge badge-primary">{{ $earning->customer_type }}</span>
                                @endif
                            </td>
                            <td class="text-muted">
                               {{ $earning->payment_method }}
                           </td>
                           <td>
                            @if ($earning->payment_status == 'Completed')
                            <span class="badge badge-success">{{ __('paid') }}</span>
                            @else
                            <span class="badge badge-warning">{{ __('unpaid') }}</span>
                            @endif
                        </td>
                        <td class="text-muted">
                            {{ $earning->created_at }}
                        </td>
                        <td class="text-muted">
                            <td class="d-flex">
                                <a href="{{ URL::to('admin/order/detail/'.$earning->id) }}" class="btn btn-primary mr-1" target="_blank"><i class="fas fa-eye"></i></a>

                                <a href="{{ URL::to('admin/order/invoice/'.$earning->id) }}" class="btn btn-info btn-sm btn-block" target="_blank"><i class="fas fa-download"></i></a>

                                            <!-- <form action=""
                                                method="POST">
                                                @csrf
                                                <button type="submit" class="btn btn-info">
                                                    <i class=" fas fa-download"></i>
                                                </button>
                                            </form> -->
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <div class="empty py-5">
                                                <p message="{{ __('no_data_found') }}" />
                                            </div>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

                

                <!--<div class="col-xl-3 col-md-6 mb-4">-->
                <!--    <div class="card border-left-success shadow h-100 py-2">-->
                <!--        <div class="card-body">-->
                <!--            <div class="row no-gutters align-items-center">-->
                <!--                <div class="col mr-2">-->
                <!--                    <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Subscriber')}}</div>-->
                <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_subscribers }}</div>-->
                <!--                </div>-->
                <!--                <div class="col-auto">-->
                <!--                    <i class="fas fa-award fa-2x text-gray-300"></i>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-xl-3 col-md-6 mb-4">-->
                <!--    <div class="card border-left-success shadow h-100 py-2">-->
                <!--        <div class="card-body">-->
                <!--            <div class="row no-gutters align-items-center">-->
                <!--                <div class="col mr-2">-->
                <!--                    <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Senior Management')}}</div>-->
                <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_management }}</div>-->
                <!--                </div>-->
                <!--                <div class="col-auto">-->
                <!--                    <i class="fas fa-user-friends fa-2x text-gray-300"></i>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="col-xl-3 col-md-6 mb-4">-->
                <!--    <div class="card border-left-success shadow h-100 py-2">-->
                <!--        <div class="card-body">-->
                <!--            <div class="row no-gutters align-items-center">-->
                <!--                <div class="col mr-2">-->
                <!--                    <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Board Directors')}}</div>-->
                <!--                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_directors }}</div>-->
                <!--                </div>-->
                <!--                <div class="col-auto">-->
                <!--                    <i class="fas fa-users fa-2x text-gray-300"></i>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                

        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Total Partners')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_partners}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-handshake fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

      <!--  <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Completed Orders')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_completed_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-globe fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

      <!--  <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h4 font-weight-bold text-success mb-1">{{ __('Pending Orders')}}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_pending_orders }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        

    </div>
    <hr class="sidebar-divider my-0">

   
  <!--<footer style=" background: linear-gradient(to right, #0062E6, #33AEFF);" id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">-->
  <!--  <div class="container text-center">-->
  <!--    <small>  <span class="float-left">Devloped By: devethio</span> <span class="float-right">V1.0</span>-->
  <!--          <a class="active" href="mailto:example@gmail.com">example@gmail.com</a></small>-->
       
  <!--  </div>-->
  <!--</footer>-->
  
    

        <script>
        // Get the canvas element
        const canvas = document.getElementById('subscriberChart');
        // Get the data passed from the controller
        const data = {!! $subscriber !!};
        // Retrieve unique created_at values
        const labels = [...new Set(data.map(item => item.created_at))];
        // Filter data for subs_active = 1 and subs_active = 0
        const subsActive1Data = data
        .filter(item => item.subs_active === 1)
        .map(item => item.count);
        const subsActive0Data = data
        .filter(item => item.subs_active === 0)
        .map(item => item.count);
        // Create the chart
        new Chart(canvas, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                {
                    label: 'Subscribers Active = 1',
                    data: subsActive1Data,
                    backgroundColor: 'rgba(75, 192, 192, 0.8)'
                },
                {
                    label: 'Subscribers Active = 0',
                    data: subsActive0Data,
                    backgroundColor: 'rgba(255, 99, 132, 0.8)'
                }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: '\Carbon\Carbon::parse(Created At)->format('Y')'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Count'
                        }
                    }
                },
            }
        });
    </script>
    <script>
        // Get the canvas element
        const canvas = document.getElementById('blogChart');
        // Get the data passed from the controller
        const data = {!! $blog !!};
        // Get the labels and counts from the data
        const labels = data.map(item => item.category_name);
        const counts = data.map(item => item.count);

        const blogColors = [
        "#b91d47",
        "#00aba9",
        "#2b5797",
        "#e8c3b9",
        "#1e7145"
        ];
        // Create the chart
        new Chart(canvas, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    //label: category_name,
                    data: counts,
                    backgroundColor: blogColors
                }

                ],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'right',
                    },
                    title: {
                        display: true,
                        text: 'Blogs Count by Category',
                    }
                },
            },
        });
    </script>
    @endsection


    <script src="{{ asset('public/backend/vendor/chart.js/Chart.js') }}"></script>
    <script src="{{ asset('public/backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('public/backend/js/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('public/backend/js/demo/chart-bar-demo.js') }}"></script>

