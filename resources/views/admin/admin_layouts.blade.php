@php
$g_setting = DB::table('general_settings')->where('id', 1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="demo company">
    <meta name="keywords" content="Nigus Abate,web developer">
    <meta name="author" content="Nigus Abate">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('public/uploads/'.$g_setting->favicon) }}" rel="shortcut icon" type="image/png">

    <title>{{ __('Admin Panel')}}</title>

    @include('admin.includes.styles')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>


    
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @if($g_setting->sidebar_color != Null)
      <ul style="background: {{ '#'.$g_setting->sidebar_color }}!important;" class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        @else
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    @endif


        @php
        $url = Request::path();
        $conName = explode('/',$url);
        if(!isset($conName[3]))
        {
            $conName[3] = '';
        }
        if(!isset($conName[2]))
        {
            $conName[2] = '';
        }
        @endphp

        <!-- Sidebar - Brand -->
      
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
          <div class="sidebar-brand-text">  <img width="50" class="img-profile circle shadow-sm" src="{{ asset('public/uploads/'.$g_setting->favicon) }}">
            {{ __('Admin Panel')}}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Dashboard -->
        <li class="nav-item @if($conName[1] == 'dashboard') active @endif">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-fw fa-home"></i>
                <span>{{ __('Dashboard')}}</span>

            </a>
        </li>

        @php $arr_one = array(); @endphp
        @if(session('role_id')!=1)
            @php
                $row = array();
                $access_data = DB::table('role_permissions')
        ->join('role_pages', 'role_permissions.role_page_id', 'role_pages.id')
        ->where('role_id', session('role_id'))
        ->get();
            @endphp
            @foreach($access_data as $row)
                @php
                    if($row->access_status == 1):
                    $arr_one[] = $row->page_title;
                    endif;
                @endphp
            @endforeach
        @endif

        <!-- General Settings -->
        @php if( in_array('General Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'setting' && $conName[2] == 'general') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
                <i class="fas fa-cog"></i>
                <span>{{ __('General Settings')}}</span>
            </a>
            <div id="collapseSetting" class="collapse @if($conName[1] == 'setting' && $conName[2] == 'general') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                  <!--  <a class="collapse-item @if($conName[3] == 'exportDatabase') active @endif" href="{{ route('admin.general_setting.exportDatabase') }}">{{ __('exportDatabase')}}</a>-->
                    <a class="collapse-item @if($conName[3] == 'payment') active @endif" href="{{ route('settings.payment') }}">{{ __('auto_payment')}}</a>

                    <a class="collapse-item @if($conName[3] == 'system') active @endif" href="{{ route('admin.general_setting.system') }}">{{ __('General')}}</a>   

                    <a class="collapse-item @if($conName[3] == 'mail') active @endif" href="{{ route('admin.general_setting.mail') }}">{{ __('E-mail')}}</a>          

                    <a class="collapse-item @if($conName[3] == 'logo') active @endif" href="{{ route('admin.general_setting.logo') }}">{{ __('Logo')}}</a>
                    <!-- <a class="collapse-item @if($conName[3] == 'favicon') active @endif" href="{{ route('admin.general_setting.favicon') }}">{{ __('Favicon')}}</a> -->
                    <a class="collapse-item @if($conName[3] == 'loginbg') active @endif" href="{{ route('admin.general_setting.loginbg') }}">{{ __('Login Background')}}</a>
                    <a class="collapse-item @if($conName[3] == 'authorizedshare') active @endif" href="{{ route('admin.general_setting.authorizedshare') }}">{{ __('Authorized Share')}}</a>
                      <!-- <a class="collapse-item @if($conName[3] == 'pricepershare') active @endif" href="{{ route('admin.general_setting.pricepershare') }}">{{ __('Per Share')}}</a> -->
                    <a class="collapse-item @if($conName[3] == 'topbar') active @endif" href="{{ route('admin.general_setting.topbar') }}">{{ __('Top Bar')}}</a>
                    <a class="collapse-item @if($conName[3] == 'banner') active @endif" href="{{ route('admin.general_setting.banner') }}">{{ __('Banner')}}</a>
                    <a class="collapse-item @if($conName[3] == 'footer') active @endif" href="{{ route('admin.general_setting.footer') }}">{{ __('Footer')}}</a>
                    <a class="collapse-item @if($conName[3] == 'sidebar') active @endif" href="{{ route('admin.general_setting.sidebar') }}">{{ __('Sidebar')}}</a>
                    <!-- <a class="collapse-item @if($conName[3] == 'color') active @endif" href="{{ route('admin.general_setting.color') }}">{{ __('Color')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'preloader') active @endif" href="{{ route('admin.general_setting.preloader') }}">{{ __('Preloader')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'stickyheader') active @endif" href="{{ route('admin.general_setting.stickyheader') }}">{{ __('Sticky Header')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'googleanalytic') active @endif" href="{{ route('admin.general_setting.googleanalytic') }}">{{ __('Google Analytic')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'googlerecaptcha') active @endif" href="{{ route('admin.general_setting.googlerecaptcha') }}">{{ __('Google Recaptcha')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'tawklivechat') active @endif" href="{{ route('admin.general_setting.tawklivechat') }}">{{ __('Tawk Live Chat')}}</a> -->
                    <!-- <a class="collapse-item @if($conName[3] == 'cookieconsent') active @endif" href="{{ route('admin.general_setting.cookieconsent') }}">{{ __('Cookie Consent')}}</a> -->
                </div>
            </div>
        </li>
        @endif

        <!-- Page Settings -->
        @php if( in_array('Page Settings', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'page') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePageSettings" aria-expanded="true" aria-controls="collapsePageSettings">
                <i class="fas fa-paste"></i>
                <span>{{ __('Page Settings')}}</span>
            </a>
            <div id="collapsePageSettings" class="collapse @if($conName[1] == 'page') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item @if($conName[2] == 'home') active @endif" href="{{ route('admin.page_home.edit') }}">{{ __('Home')}}</a> 
                              
                   <a class="collapse-item @if($conName[2] == 'about') active @endif" href="{{ route('admin.page_about.edit') }}">{{ __('About')}}</a>
                    <a class="collapse-item @if($conName[2] == 'service') active @endif" href="{{ route('admin.page_service.edit') }}">{{ __('Service')}}</a>

                    <a class="collapse-item @if($conName[2] == 'branch') active @endif" href="{{ route('admin.page_branch.edit') }}">{{ __('Branch')}}</a>

                    <a class="collapse-item @if($conName[2] == 'senior_management') active @endif" href="{{ route('admin.page_senior.edit') }}">{{ __('Senior Management')}}</a>

                    <a class="collapse-item @if($conName[2] == 'board') active @endif" href="{{ route('admin.page_board.edit') }}">{{ __('Board Director')}}</a>

                    <a class="collapse-item @if($conName[2] == 'shop') active @endif" href="{{ route('admin.page_shop.edit') }}">{{__('Shop')}}</a>
                    <a class="collapse-item @if($conName[2] == 'blog') active @endif" href="{{ route('admin.page_blog.edit') }}">{{ __('Blog')}}</a>
                    <a class="collapse-item @if($conName[2] == 'project') active @endif" href="{{ route('admin.page_project.edit') }}">{{ __('Project')}}</a>
                    <a class="collapse-item @if($conName[2] == 'faq') active @endif" href="{{ route('admin.page_faq.edit') }}">{{ __('FAQ')}}</a>
                    <a class="collapse-item @if($conName[2] == 'team') active @endif" href="{{ route('admin.page_team.edit') }}">{{ __('Team Member')}}</a>
                    <a class="collapse-item @if($conName[2] == 'photo-gallery') active @endif" href="{{ route('admin.page_photo_gallery.edit') }}">{{ __('Photo Gallery')}}</a>
                    <a class="collapse-item @if($conName[2] == 'video-gallery') active @endif" href="{{ route('admin.page_video_gallery.edit') }}">{{ __('Video Gallery')}}</a>
                    <a class="collapse-item @if($conName[2] == 'contact') active @endif" href="{{ route('admin.page_contact.edit') }}">{{ __('Contact')}}</a>
                    <a class="collapse-item @if($conName[2] == 'career') active @endif" href="{{ route('admin.page_career.edit') }}">{{ __('Career')}}</a>
                    <a class="collapse-item @if($conName[2] == 'term') active @endif" href="{{ route('admin.page_term.edit') }}">{{ __('Term')}}</a>
                    <a class="collapse-item @if($conName[2] == 'privacy') active @endif" href="{{ route('admin.page_privacy.edit') }}">{{ __('Privacy')}}</a>
                    <a class="collapse-item @if($conName[2] == 'other') active @endif" href="{{ route('admin.page_other.edit') }}">{{ __('Other')}}</a>

                    <a class="collapse-item @if($conName[2] == 'developer') active @endif" href="{{ route('admin.page_developer.edit') }}">{{ __('Developer')}}</a> 
                    <a class="collapse-item @if($conName[2] == 'document') active @endif" href="{{ route('admin.page_document.edit') }}">{{__('Document')}}</a>
                </div>
            </div>
        </li>
        @endif 

        <!-- Admin Users Section -->
        @php if( in_array('Admin User Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'role' || $conName[1] == 'admin-user') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAdminUser" aria-expanded="true" aria-controls="collapseAdminUser">
                <i class="fas fa-user-secret"></i>
                <span>{{ __('Admin User Section')}}</span>
            </a>
            <div id="collapseAdminUser" class="collapse @if($conName[1] == 'role' || $conName[1] == 'admin-user') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.role.index') }}">{{ __('Roles')}}</a>
                    <a class="collapse-item" href="{{ route('admin.role.user') }}">{{ __('Users')}}</a>
                    <a class="collapse-item" href="{{ route('admin.role.permission.index') }}">{{ __('Permission')}}</a>
                </div>
            </div>
        </li>
        @endif



        <!-- Footer Columns -->
       @php if( in_array('Footer Columns', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'footer') active @endif">
            <a class="nav-link" href="{{ route('admin.footer.index') }}">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>{{ __('Footer Columns')}}</span>
            </a>
        </li>
        @endif

         <!-- Footer Columns -->
       @php if( in_array('Footer Columns', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'counter') active @endif">
            <a class="nav-link" href="{{ route('admin.counter.index') }}">
                <i class="fas fa-fw fa-podcast"></i>
                <span>{{ __('Counters')}}</span>
            </a>
        </li>
        @endif

        <!-- Branch -->
       @php if( in_array('Branch', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'branch') active @endif">
            <a class="nav-link" href="{{ route('admin.branch.index') }}">
                <i class="fas fa-building"></i>
                <span>{{ __('Branch')}}</span>
            </a>
        </li>
        @endif

        <!-- Sliders -->
       @php if( in_array('Sliders', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'slider') active @endif">
            <a class="nav-link" href="{{ route('admin.slider.index') }}">
                <i class="fas fa-sliders-h"></i>
                <span>{{ __('Sliders')}}</span>
            </a>
        </li>
        @endif

        <!-- Partner -->
       @php if( in_array('Partner', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'partner') active @endif">
            <a class="nav-link" href="{{ route('admin.partner.index') }}">
                <i class="fas fa-users"></i>
                <span>{{ __('Partner')}}</span>
            </a>
        </li>
        @endif

    
        <!-- Blog Section -->
       @php if( in_array('Blog Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true" aria-controls="collapseBlog">
                <i class="fas fa-cubes"></i>
                <span>{{ __('Blog Section')}}</span>
            </a>
            <div id="collapseBlog" class="collapse @if($conName[1] == 'category' || $conName[1] == 'blog' || $conName[1] == 'comment') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.category.index') }}">{{ __('Categories')}}</a>
                    <a class="collapse-item" href="{{ route('admin.blog.index') }}">{{ __('Blogs')}}</a>
                    <a class="collapse-item" href="{{ route('admin.comment.approved') }}">{{ __('Approved Comments')}}</a>
                    <a class="collapse-item" href="{{ route('admin.comment.pending') }}">{{ __('Pending Comments')}}</a>
                </div>
            </div>
        </li>
        @endif

<!--=---------------=---------------=-----------------------------==-=========-->
        <!-- Management Section -->
       @php if( in_array('Management Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'senior_managemnts' || $conName[1] == 'board_director' || $conName[1] == 'management_category') active @endif">

            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseManagement" aria-expanded="true" aria-controls="collapseManagement">
                <i class="fas fa-cubes"></i>
                <span>{{ __('Management Section')}}</span>
            </a>
            <div id="collapseManagement" class="collapse @if($conName[1] == 'senior_managemnts' || $conName[1] == 'board_director' || $conName[1] == 'management_category') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.management_category.index') }}">Management {{ __('Categories')}}</a>
                    <a class="collapse-item" href="{{ route('admin.senior_managemnts.index') }}">{{ __('Senior Management')}}</a>
                     <a class="collapse-item" href="{{ route('admin.board_director.index') }}">{{ __('Board Directors')}}</a>
                   
                </div>
            </div>
        </li>
        @endif



      <!-- Dynamic Pages -->
         @php if( in_array('Dynamic Pages', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'dynamic-page') active @endif">
            <a class="nav-link" href="{{ route('admin.dynamic_page.index') }}">
                <i class="fas fa-cube"></i>
                <span>{{ __('Dynamic Pages')}}</span>
            </a>
        </li>
        @endif

        <!-- Menu Manage -->
        @php if( in_array('Menu Manage', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'menu') active @endif">
            <a class="nav-link" href="{{ route('admin.menu.index') }}">
                <i class="fas fa-bars"></i>
                <span>{{ __('Module Manage')}}</span>
            </a>
        </li>
        @endif

        <!-- Developer -->
      <!--  @php if( in_array('Developer', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'developer') active @endif">
            <a class="nav-link" href="{{ route('admin.developer.index') }}">
                <i class="fas fa-building"></i>
                <span>{{ __('Developer')}}</span>
            </a>
        </li>
        @endif -->

        <!-- Project -->
      @php if( in_array('Project', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'project') active @endif">
            <a class="nav-link" href="{{ route('admin.project.index') }}">
                <i class="fas fa-umbrella"></i>
                <span>{{ __('Project')}}</span>
            </a>
        </li>
        @endif

        <!-- Career Section -->
       @php if( in_array('Career Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'job' || $conName[1] == 'job-application' || $conName[1] == 'job_category') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCareer" aria-expanded="true" aria-controls="collapseCareer">
                <i class="fas fa-user-secret"></i>
                <span>{{ __('Career Section')}}</span>
            </a>
            <div id="collapseCareer" class="collapse @if($conName[1] == 'job' || $conName[1] == 'job-application' || $conName[1] == 'job_category') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">

                     <a class="collapse-item" href="{{ route('admin.job_category.index') }}"> {{ __('Job Categories')}}</a>
                    <a class="collapse-item" href="{{ route('admin.job.index') }}">Jobs</a>
                    <a class="collapse-item" href="{{ route('admin.job.view_application') }}">{{ __('Job Applications')}}</a>
                </div>
            </div>
        </li>
        @endif


        <!-- Photo Gallery -->
       @php if( in_array('Photo Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'photo-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.photo.index') }}">
                <i class="fas fa-camera"></i>
                <span>{{ __('Photo Gallery')}}</span>
            </a>
        </li>
        @endif

        <!-- Video Gallery -->
        @php if( in_array('Video Gallery', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'video-gallery') active @endif">
            <a class="nav-link" href="{{ route('admin.video.index') }}">
                <i class="fas fa-video"></i>
                <span>{{ __('Video Gallery')}}</span>
            </a>
        </li>
        @endif
       <hr class="sidebar-divider my-0">
        <!-- Product Section -->
     @php if( in_array('Product Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon'|| $conName[1] == 'product_category') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct" aria-expanded="true" aria-controls="collapseProduct">
                <i class="fas fa-shopping-cart"></i>
                <span>{{ __('Product Section')}}</span>
            </a>
            <div id="collapseProduct" class="collapse @if($conName[1] == 'product' || $conName[1] == 'shipping' || $conName[1] == 'coupon' || $conName[1] == 'product_category') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                     <a class="collapse-item" href="{{ route('admin.product_category.index') }}">{{ __('Categories')}}</a>

                    <a class="collapse-item" href="{{ route('admin.product.index') }}">{{ __('Product')}}</a>
                    <a class="collapse-item" href="{{ route('admin.shipping.index') }}">{{ __('Shipping')}}</a>
                    <a class="collapse-item" href="{{ route('admin.coupon.index') }}">{{ __('coupon')}}</a>

                    <!-- <a class="collapse-item" href="{{ route('admin.order.index') }}"><i class="fas fa-bookmark"></i>{{ __('Order Section')}}</a>
                     <a class="collapse-item" href="{{ route('admin.customer.index') }}"><i class="fas fa-users"></i>{{ __('Customer Section')}} </a> -->
                </div>
            </div>
        </li>
        @endif 


        <!-- Order -->
       @php if( in_array('Order Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'order') active @endif">
            <a class="nav-link" href="{{ route('admin.order.index') }}">
                <i class="fas fa-bookmark"></i>
                <span>{{ __('Order Section')}}</span>
            </a>
        </li>
        @endif

        <!-- Customer -->
       @php if( in_array('Customer Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'customer') active @endif">
            <a class="nav-link" href="{{ route('admin.customer.index') }}">
                <i class="fas fa-users"></i>
                <span>{{ __('Customer Section')}}</span>
            </a>
        </li>
        @endif
        <hr class="sidebar-divider my-0">

        <!-- Why Choose Us -->
       @php if( in_array('Why Choose Us', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'why-choose') active @endif">
            <a class="nav-link" href="{{ route('admin.why_choose.index') }}">
                <i class="fas fa-arrows-alt"></i>
                <span>{{ __('Why Choose Us')}}</span>
            </a>
        </li>
        @endif

        <!-- Services -->
       @php if( in_array('Service', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'service') active @endif">
            <a class="nav-link" href="{{ route('admin.service.index') }}">
                <i class="fas fa-certificate"></i>
                <span>{{ __('Service')}}</span>
            </a>
        </li>
        @endif

        <!-- Testimonials -->
       @php if( in_array('Testimonial', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'testimonial') active @endif">
            <a class="nav-link" href="{{ route('admin.testimonial.index') }}">
                <i class="fas fa-award"></i>
                <span>{{ __('Testimonial')}}</span>
            </a>
        </li>
        @endif

        <!-- Team Members -->
       @php if( in_array('Team Member', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'team-member') active @endif">
            <a class="nav-link" href="{{ route('admin.team_member.index') }}">
                <i class="fas fa-user-plus"></i>
                <span>{{ __('Team Member')}}</span>
            </a>
        </li>
        @endif

        <!-- FAQ -->
       @php if( in_array('FAQ', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'faq') active @endif">
            <a class="nav-link" href="{{ route('admin.faq.index') }}">
                <i class="fas fa-question-circle"></i>
                <span>{{ __('FAQ')}}</span>
            </a>
        </li>
        @endif

        <!-- Email Template -->
        @php if( in_array('Email Template', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'email-template') active @endif">
            <a class="nav-link" href="{{ route('admin.email_template.index') }}">
                <i class="fas fa-envelope"></i>
                <span>{{ __('Email Template')}}</span>
            </a>
        </li>
        @endif

        <!-- Subscriber -->
        @php if( in_array('Subscriber Section', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'subscriber') active @endif">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSubscriber" aria-expanded="true" aria-controls="collapseSubscriber">
                <i class="fas fa-share-alt-square"></i>
                <span>{{ __('Subscriber Section')}}</span>
            </a>
            <div id="collapseSubscriber" class="collapse @if($conName[1] == 'subscriber') show @endif" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="{{ route('admin.subscriber.index') }}">{{ __('All Subscribers')}}</a>
                    <a class="collapse-item" href="{{ route('admin.subscriber.send_email') }}">{{ __('Send Email to Subscribers')}}</a>
                </div>
            </div>
        </li>
        @endif

        <!-- Social Media -->
       @php if( in_array('Social Media', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'social-media') active @endif">
            <a class="nav-link" href="{{ route('admin.social_media.index') }}">
                <i class="fas fa-basketball-ball"></i>
                <span>{{ __('Social Media')}}</span>
            </a>
        </li>
        @endif


        <!-- Document -->
        @php if( in_array('Document', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'document') active @endif">
            <a class="nav-link" href="{{ route('admin.document.index') }}">
                <i class="fas fa-book"></i>
                <span>{{ __('Document')}}</span>
            </a>
        </li>
        @endif

        <!-- Document -->
        @php if( in_array('FileDocument', $arr_one) || session('role_id')==1 ): @endphp
        <li class="nav-item @if($conName[1] == 'FileDocument') active @endif">
            <a class="nav-link" href="{{ route('admin.folders.index') }}">
                <i class="fas fa-book"></i>
                <span>{{ __('Folder and Document')}}</span>
            </a>
        </li>
        @endif

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->
<style type="text/css">
    .dot {
  position: relative;
  width: fit-content;
  background: linear-gradient(135deg, #7932f6, #805ad5 48%, #342662);
  border-radius: 40px;
  width: 1.75rem;
  height: 1.75rem;
}

.heartbeat {
  position: absolute;
  width: fit-content;
  background-color: #7932f6;
  border-radius: 40px;
  width: 1.75rem;
  height: 1.75rem;
  opacity: 0.75;
  animation: ping 2s cubic-bezier(0, 0, 0.2, 1) infinite;
}

@keyframes ping {
  75%,
  100% {
    transform: scale(2);
    opacity: 0;
  }
}
</style>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    @if (config('nigus.chatgpt_status') == true)
                 <li class="nav-item dropdown no-arrow mx-10 heartbeat">
                        <a style="font-size: 7px;" class="btn btn-info btn-sm mt-0 dot" href="{{ route('admin.chatgpt.index') }}">
                            {{ __('AI Chat')}}
                        </a>
                    </li>
                    @endif
                </ul>
            
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow mx-1">
                       <!-- <a class="btn btn-info btn-sm mt-3" href="#">                           
                            {{ __('DevEthio')}}
                        </a>-->
                       <!--  <a class="btn btn-info btn-sm mt-3" href="#">                           
                            {{ __('DevEthio Teams')}}
                        </a> -->
                    </li>
               
                    <!-- Nav Item - Alerts -->
                   <li class="nav-item dropdown no-arrow mx-1">
                        <a class="btn btn-dark btn-sm mt-3" href="{{ url('/') }}" target="_blank"><i class="fa fa-globe"></i>
                            {{ __('Visit Website')}}
                        </a>
                    </li>

<!-- --------------Language Switcher Start -->
           

              <div style="float: left" class="nav-item dropdown no-arrow">
                    <button style="border: 1px dotted black;
                " type="button" class="btn btn-light btn-sm mt-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="tooltiptext">{{__('Language')}}</span>
                    <span class="fi fi-{{Config::get('languages')[App::getLocale()]['fi fi']}}"></span> {{ __(Config::get('languages')[App::getLocale()]['display']) }}
                    </button>
                        <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                    <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="fi fi-{{$language['fi fi']}}"></span> {{__($language['display'])}}</a>
                            @endif
                        @endforeach
                        </ul>
                </div>
            
                <style>
                        .dropdown-toggle {
                          position: relative;
                          display: inline-block;
                          
                        }
                        .tooltiptext {
                          visibility: hidden;
                          width: 120px;
                          background-color: black;
                          color: #fff;
                          text-align: center;
                          border-radius: 6px;
                          padding: 5px 0;
                          position: absolute;
                          z-index: 1;
                          top: 150%;
                          left: 50%;
                          margin-left: -60px;
                        }

                        .tooltiptext::after {
                          content: "";
                          position: absolute;
                          bottom: 100%;
                          left: 50%;
                          margin-left: -5px;
                          border-width: 5px;
                          border-style: solid;
                          border-color: transparent transparent black transparent;
                        }

                        .dropdown-toggle:hover .tooltiptext {
                          visibility: visible;
                        }
                </style>
<!-- --------------Language Switcher Start -->

                    <div class="topbar-divider d-none d-sm-block"></div>
                    <!-- Nav Item - User Information -->

                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ session('name') }}</span>
                            <img class="img-profile rounded-circle" src="{{ asset('public/uploads/'.session('photo')) }}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                            @if(session('id') == 1)
                            <a class="dropdown-item" href="{{ route('admin.profile_change') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Accout Settings')}}
                            </a>
                            @endif
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.password_change') }}">
                                <i class="fas fa-unlock-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Change Password')}}
                            </a>  -->
                            <!-- <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.photo_change') }}">
                                <i class="fas fa-image fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Change Photo')}}
                            </a> -->

                            <div class="dropdown-divider"></div>
                             <a class="dropdown-item" href="{{route('admin.general_setting.export_database')}}">
                                        <i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>
                                        {{__('Backup Database')}}
                                </a><div class="dropdown-divider"></div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> {{ __('Logout')}}
                            </a>
                            <!-- Backup Database start-->
                            @if(session('id') == 1)

                            
                            @endif
                            <!-- Backup Database End-->
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- End of Topbar -->
            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('admin_content')

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a style="background: #e65c00" class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.includes.scripts-footer')

</body>
</html>


<script src="{{ asset('public/backend/vendor/translation/js/app.js') }}"></script>
