@php
$g_setting = DB::table('general_settings')->where('id', 1)->first();
$s_media = DB::table('social_media_items')->orderBy('social_order', 'asc')->get();
$footer_col_1 = DB::table('footer_columns')->orderBy('column_item_order', 'asc')->where('column_name', 'Column 1')->get();
$footer_col_2 = DB::table('footer_columns')->orderBy('column_item_order', 'asc')->where('column_name', 'Column 2')->get();

$p_partner = DB::table('partners')->orderBy('partner_name', 'asc')->get();
$p_document = DB::table('documents')->orderBy('document_name', 'asc')->get();
$p_documents = DB::table('documents')->orderBy('document_name', 'asc')->get();

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @php
    $url = Request::path();
    $conName = explode('/',$url);
    if(!isset($conName[1]))
    {
        $conName[1] = '';
    }
    if(!isset($conName[2]))
    {
        $conName[2] = '';
    }
    if(!isset($conName[3]))
    {
        $conName[3] = '';
    }
    @endphp

    @if($conName[0] == '')
        @php
            $item_row = DB::table('page_home_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ $item_row->seo_title }}</title>
    @endif

    @if($conName[0] == 'about')
        @php
            $item_row = DB::table('page_about_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'branch')
        @php
            $item_row = DB::table('page_branch_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif


     @if($conName[0] == 'branches')
        @php
            $item_row = DB::table('branches')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif


    <!--------------------------------- --->
     
     @if($conName[0] == 'seniors')
        @php
            $item_row = DB::table('page_senior_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    
    @if($conName[0] == 'senior')
        @php
            $item_row = DB::table('page_senior_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif


    @if($conName[0] == 'ceo')
    @php
        $item_row = DB::table('senior_management')->where('id', 1)->first();
    @endphp
    <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif




    <!-- Document -->

     @if($conName[0] == 'document')
        @php
            $item_row = DB::table('page_document_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ $item_row->seo_title }}</title>
    @endif

    
    @if($conName[0] == 'documents')
        @php
            $item_row = DB::table('documents')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ $item_row->seo_title }}</title>
    @endif
<!-- End Document -->


    <!-------------- Developer------------------- --->
     
     @if($conName[0] == 'developers')
        @php
            $item_row = DB::table('page_developer_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    
    @if($conName[0] == 'developer')
        @php
            $item_row = DB::table('developers')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif
   

    @if($conName[0] == 'services')
        @php
            $item_row = DB::table('page_service_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'service')
        @php
            $item_row = DB::table('services')->where('slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'shop')
        @php
            $item_row = DB::table('page_shop_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'cart')
        @php
            $item_row = DB::table('page_other_items')->where('id',2)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'checkout')
        @php
            $item_row = DB::table('page_other_items')->where('id',3)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'product')
        @php
            $item_row = DB::table('products')->where('product_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'category')
        @php
            $item_row = DB::table('categories')->where('category_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif
<!-- new Added for Job Catagory -->
    @if($conName[0] == 'job_category')
        @php
            $item_row = DB::table('job_categories')->where('category_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'blog' && $conName[1]=='')
        @php
            $item_row = DB::table('page_blog_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'blog' && $conName[1]!='')
        @php
            $item_row = DB::table('blogs')->where('blog_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>

        <meta property="og:title" content="{{ $item_row->blog_title }}">
        <meta property="og:image" content="{{ asset('public/uploads/'.$item_row->blog_photo) }}">
        <meta property="og:description" content="{{ $item_row->blog_content_short }}">
        <meta property="og:url" content="{{ url('blog/'.$item_row->blog_slug) }}">

    @endif

    @if($conName[0] == 'career')
        @php
            $item_row = DB::table('page_career_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'job' && $conName[2] == '')
        @php
            $item_row = DB::table('jobs')->where('job_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'job' && $conName[2] != '')
        @php
            $item_row = DB::table('jobs')->where('job_slug',$conName[2])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'projects')
        @php
            $item_row = DB::table('page_project_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'project')
        @php
            $item_row = DB::table('projects')->where('project_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'photo-gallery')
        @php
            $item_row = DB::table('page_photo_gallery_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'video-gallery')
        @php
            $item_row = DB::table('page_video_gallery_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'faq')
        @php
            $item_row = DB::table('page_faq_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'team-members')
        @php
            $item_row = DB::table('page_team_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'team-member')
        @php
            $item_row = DB::table('team_members')->where('slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'contact')
        @php
            $item_row = DB::table('page_contact_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'terms-and-conditions')
        @php
            $item_row = DB::table('page_term_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'privacy-policy')
        @php
            $item_row = DB::table('page_privacy_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'page')
        @php
            $item_row = DB::table('dynamic_pages')->where('dynamic_page_slug',$conName[1])->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'customer' && $conName[1] == 'payment')
        @php
            $item_row = DB::table('page_other_items')->where('id',8)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'customer' && $conName[1] == 'login')
        @php
            $item_row = DB::table('page_other_items')->where('id',4)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'customer' && $conName[1] == 'register')
        @php
            $item_row = DB::table('page_other_items')->where('id',5)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'customer' && $conName[1] == 'forget-password')
        @php
            $item_row = DB::table('page_other_items')->where('id',6)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'customer' && ($conName[1] == 'dashboard' || $conName[1] == 'order' || $conName[1] == 'profile-change' || $conName[1] == 'password-change') )
        @php
            $item_row = DB::table('page_other_items')->where('id',7)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif

    @if($conName[0] == 'search')
        @php
            $item_row = DB::table('page_other_items')->where('id',1)->first();
        @endphp
        <meta name="description" content="{{ $item_row->seo_meta_description }}">
        <title>{{ __($item_row->seo_title) }}</title>
    @endif


    @include('layouts.styles')

    <!-- Favicon -->
    <link href="{{ asset('public/uploads/'.$g_setting->favicon) }}" rel="shortcut icon" type="image/png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    @include('layouts.scripts')

    <style>
        .top,
        .main-nav nav .navbar-nav .nav-item .dropdown-menu,
        .video-button:before,
        .video-button:after,
        .special .read-more a,
        .service .read-more a,
        .testimonial-bg,
        .project .read-more a,
        .team-text,
        .cta .overlay,
        .blog-area .blog-image .date,
        .blog-area .read-more a,
        .newsletter-area .overlay,
        .footer-social-link ul li a,
        .scroll-top,
        .single-section .read-more a,
        .sidebar .widget .search button,
        .comment button,
        .contact-item:hover .contact-icon,
        .product-item .text button,
        .btn-arf,
        .project-photo-carousel .owl-nav .owl-prev,
        .project-photo-carousel .owl-nav .owl-next,
        .faq h4.panel-title a,
        .team-social li a:hover,
        .doc_detail_social li i,
        .nav-doctor .nav-link.active,
        .product-detail button,
        .product-detail .nav-pills .nav-link.active,
        .contact-form .btn,
        .career-sidebar .widget button {
            background: {{ '#'.$g_setting->theme_color }}!important;
        }
        .main-nav nav .navbar-nav .nav-item a:hover,
        .main-nav nav .navbar-nav .nav-item:hover a,
        .service .service-item .text h3 a:hover,
        .project .project-item .text h3 a:hover,
        .blog-area .blog-item h3 a:hover,
        .footer-item ul li a:hover,
        .sidebar .widget .type-2 ul li a:hover,
        .sidebar .widget .type-1 ul li:before,
        .sidebar .widget .type-1 ul li a:hover,
        .single-section h3,
        .contact-icon,
        .product-item .text h3 a:hover,
        .career-main-item h3,
        .reg-login-form .new-user a,
        .product-detail .nav-pills .nav-link {
            color: {{ '#'.$g_setting->theme_color }}!important;
        }
        .text-animated li a:hover,
        .feature .feature-item {
            background-color: {{ '#'.$g_setting->theme_color }}!important;
        }
        .text-animated li a:hover,
        .special .read-more a,
        .footer-social-link ul li a,
        .contact-item:hover .contact-icon,
        .faq h4.panel-title,
        .team-social li a:hover,
        .contact-form .btn {
            border-color: {{ '#'.$g_setting->theme_color }}!important;
        }



        .main-nav nav .navbar-nav .nav-item .dropdown-menu li a,
        .contact-item:hover .contact-icon,
        .product-detail .nav-pills .nav-link.active {
            color: #fff!important;
        }
        .feature .feature-item:hover,
        .service .read-more a:hover,
        .project .read-more a:hover,
        .blog-area .read-more a:hover,
        .single-section .read-more a:hover,
        .comment button:hover,
        .doc_detail_social li:hover i,
        .product-detail button:hover,
        .contact-form .btn:hover {
            background: #333!important;
        }
        .footer-social-link ul li a:hover {
            background: transparent!important;
        }
        .special .read-more a:hover {
            background: transparent!important;
            border-color: #fff!important;
        }
        /* Prevent content selection & right click */
        body{
            -webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
-o-user-select: none;
user-select: none;
        }
    </style>


</head>
<body oncontextmenu="return false;">
   
@if($g_setting->preloader_status == 'Show')
<div id="preloader">
    <div id="status" style="background-image: url({{ asset('public/uploads/'.$g_setting->preloader_photo) }})"></div>
</div>
@endif


<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="top-contact">
                    <ul>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>{{ __($g_setting->top_bar_email) }}</span>
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>{{ __($g_setting->top_bar_phone) }}</span>
                        </li>&nbsp;

                         @if (config('nigus.chatgpt_status') == true)
                        <li class="heartbeat">
                            <a style="font-size: 14px;" class="btn btn-warning btn-sm mt-0" href="{{ route('front.ai_chat') }}">{{ __('AI Chat')}}</a>
                        </li>

                        @endif

                    </ul>
                </div>
            </div>


            <div class="col-md-6">
                <div class="top-right">

                    @if($g_setting->top_bar_social_status == 'Show')
                    <div class="top-social">
                        <ul>
                            @foreach($s_media as $row)
                                <li><a href="{{ $row->social_url }}" target="_blank"><i class="{{ $row->social_icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                   

                    @php
                        $menus = DB::table('menus')->get();
                        $menu_arr = array();
                    @endphp

                    @foreach($menus as $row)
                        @php
                            $menu_arr[$row->menu_name] = $row->menu_status;
                        @endphp
                    @endforeach

                    @if($menu_arr['Shop'] == 'Show')
                    <div class="top-profile">
                        <ul>
                            @if(!session()->get('customer_id'))
                                
                                @if($g_setting->top_bar_login_status == 'Show')
                                <li class="login_top_menu">
                                    <a href="{{ route('customer.login') }}">{{ __('Login')}}</a>
                                </li>
                                @endif
 
                                @if($g_setting->top_bar_registration_status == 'Show')
                                <li class="registration_top_menu">
                                    <a href="{{ route('customer.registration') }}">{{ __('Registration')}}</a>
                                </li>
                                @endif
                                    
                            @endif

                            @if(session()->get('customer_id'))
                            <li class="registration_top_menu">
                                <a href="{{ route('customer.dashboard') }}">{{ __('Dashboard')}}</a>
                            </li>
                            @endif

                            @if($g_setting->top_bar_cart_status == 'Show')
                            <li class="cart">
                                <a href="{{ route('front.cart') }}">{{__('Cart')}} </a>
                                @if(session()->get('cart_product_id'))
                                <div class="number number_cart">{{ count(session()->get('cart_product_id')) }}</div>
                                @endif
                            </li>
                            @endif
                            
                        </ul>
                    </div>
                    @endif


                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <!-- -------- Language Switcher Start ------->
                    <div class="nav-item dropdown no-arrow">
            <button style="border: 1px dotted black;" type="button" class="btn btn-light btn-sm mt dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="fi fi-{{Config::get('languages')[App::getLocale()]['fi fi']}}"></span> {{ __(Config::get('languages')[App::getLocale()]['display']) }}
            </button>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><span class="fi fi-{{$language['fi fi']}}"></span> {{__($language['display'])}}</a>
                    @endif
                @endforeach
            </div>
        </div>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!-- -------- Language Switcher Start ------->
                </div>
            </div>
        </div>
    </div>
</div>


@include('layouts.nav')

@yield('content')

<div style="background: #003366" class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item footer-service">
                    <h2>{{ __($g_setting->footer_column1_heading) }}</h2>
                    <ul class="fmain">
                        @foreach($footer_col_1 as $row)
                            <li><a href="{{ $row->column_item_url }}">{{ __($row->column_item_text) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item footer-service">
                    <h2>{{ __($g_setting->footer_column2_heading) }}</h2>
                    <ul class="fmain">
                        @foreach($footer_col_2 as $row)
                            <li><a href="{{ $row->column_item_url }}">{{ __($row->column_item_text) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item footer-contact">
                    <h2>{{ __($g_setting->footer_column3_heading) }}</h2>
                    <ul>                        
                        <li>{{ __($g_setting->footer_phone) }}</li>
                        <li>{{ __($g_setting->footer_email) }}</li>
                        <li>{{ __($g_setting->footer_address) }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item footer-service">
                    <h2>{{ __($g_setting->footer_column4_heading) }}</h2>
                    <div class="footer-social-link">
                        <ul>
                            @foreach($s_media as $row)
                                <li><a href="{{ $row->social_url }}" target="_blank"><i class="{{ $row->social_icon }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row footer-end">
            <div class="col-md-6">
                <div class="copyright">
                    <p>{{ __($g_setting->footer_copyright) }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="footer-pages">
                    <ul>
                        <!--@if($menu_arr['Developer'] == 'Show' || $menu_arr['Developer'] == 'Hide' )-->
                        <!--        <li>-->
                        <!--            <a href="{{ route('front.developer') }}" class="nav-link">{{__('About Developer')}}</a>-->
                        <!--        </li>-->
                        <!--        @endif-->
                        <li><a href="{{ route('front.term') }}">{{__('Terms and Conditions')}}</a></li>
                        <li><a href="{{ route('front.privacy') }}">{{__('Privacy Policy')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="scroll-top">
    <i class="fa fa-angle-up"></i>
</div>

@include('layouts.scripts_footer')

</body>
</html>
