@php
$menus = DB::table('menus')->get();
$menu_arr = array();
@endphp

@foreach($menus as $row)
    @php
        $menu_arr[$row->menu_name] = $row->menu_status;
    @endphp
@endforeach


@php
$branches = DB::table('branches')->get();
$branch_arr = array();
@endphp

@foreach($branches as $row)
    @php
        $branch_arr[$row->name] = $row->status;
    @endphp
@endforeach


<!-- Start Navbar Area -->
<div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="" class="logo">
            <img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="Dynamic MFI logo">
        </a>
    </div>  

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('public/uploads/'.$g_setting->logo) }}" alt="Dynamic MFI logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @if($menu_arr['Home'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">{{ __('Home') }}</a>

                        </li>
                        @endif

                       <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle">{{ __('About us') }}</a>
                            <ul class="dropdown-menu">

                                 @if($menu_arr['About'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.about') }}" class="nav-link">{{ __('Company Profile')}}</a>
                                </li>
                                @endif

                                @if($menu_arr['Board'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.board') }}" class="nav-link">{{ __('Board Directors')}}</a>
                                </li>
                                @endif

                                @if($menu_arr['Senior'] == 'Show')
                                 <li class="nav-item">
                                    <a href="{{ route('front.ceo') }}" class="nav-link">{{ __('CEO')}}</a>
                                </li>
                                @endif

                                @if($menu_arr['Senior'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.senior') }}" class="nav-link">{{ __('Senior Management')}}</a>
                                </li>
                                @endif

                                <!-- @if($menu_arr['Developer'] == 'Show' || $menu_arr['Developer'] == 'Hide' )
                                <li class="nav-item">
                                    <a href="{{ route('front.developer') }}" class="nav-link">{{ __('About Developer')}}</a>
                                </li>
                                @endif -->
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle">{{ __('Product & Service')}}</a>
                            <ul class="dropdown-menu">  
                            @if($menu_arr['Document'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.document') }}" class="nav-link ">Public Files & Documents</a>
                        </li>
                        @endif

                        @php
                            $dynamic_pages = DB::table('dynamic_pages')->get();
                        @endphp

                        @foreach($dynamic_pages as $row)
                        <li class="nav-item">
                            <a href="{{ url('page/'.$row->dynamic_page_slug) }}" class="nav-link">{{ __($row->dynamic_page_name) }}</a>
                        </li>
                                @endforeach

                        @if($menu_arr['Services'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.services') }}" class="nav-link ">{{ __('Services')}}</a>
                        </li>
                        @endif
                        </ul>

                        @if($menu_arr['Shop'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.shop') }}" class="nav-link ">{{__('Shop')}}</a>
                        </li>
                        @endif

                        @if($menu_arr['Blog'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.blogs') }}" class="nav-link ">{{ __('Blog')}}</a>
                        </li>
                        @endif

                      

                
                        @php
                            $dynamic_pages = DB::table('dynamic_pages')->get();
                        @endphp


                        @if(
                        ($menu_arr['Career'] == 'Hide') &&
                        ($menu_arr['Project'] == 'Hide') &&
                        ($menu_arr['Branch'] == 'Hide') &&
                        ($menu_arr['Document'] == 'Hide') &&
                        ($menu_arr['Senior'] == 'Hide') &&
                        ($menu_arr['Board'] == 'Hide') &&
                        ($menu_arr['Developer'] == 'Hide') &&
                        ($menu_arr['Photo Gallery'] == 'Hide') &&
                        ($menu_arr['Video Gallery'] == 'Hide') &&
                        ($menu_arr['FAQ'] == 'Hide') &&
                        ($menu_arr['Team Members'] == 'Hide') &&
                        (!$dynamic_pages)
                        )

                        @else

                      

                         @if($menu_arr['Branch'] == 'Show')
                         <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle">{{ __('Branch')}}</a>
                            <ul style=" overflow-y: scroll; height: 420px;" class="dropdown-menu">

                               
                                <li class="nav-item">
                                    <a href="{{ route('front.branch') }}" class="nav-link ">{{ __('All Branch')}}</a>
                                </li><hr>
                       

                               @foreach($branches as $row)
                                <li class="nav-item">
                                    <li><a href="{{ url('branch/'.$row->name) }}">{{ __($row->name) }}</a></li>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                         @endif

                         @if($menu_arr['Career'] == 'Show')
                            <li class="nav-item">
                                <a href="{{ route('front.career') }}" class="nav-link">{{ __('Vacancy')}}</a>
                            </li>
                        @endif


                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link dropdown-toggle">{{ __('pages')}}</a>
                            <ul class="dropdown-menu">

                               <!--  @if($menu_arr['Career'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.career') }}" class="nav-link">{{ __('Vacancy')}}</a>
                                </li>
                                @endif -->

                                @if($menu_arr['Project'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.projects') }}" class="nav-link">{{ __('Projects')}}</a>
                                </li>
                                @endif

                                @if($menu_arr['Photo Gallery'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.photo_gallery') }}" class="nav-link">{{ __('Photo Gallery')}}</a>
                                </li>
                                @endif

                                @if($menu_arr['Video Gallery'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.video_gallery') }}" class="nav-link">{{ __('Video Gallery')}}</a>
                                </li>
                                @endif

                                

                                @if($menu_arr['Team Members'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.team_members') }}" class="nav-link">{{ __('Team Members')}}</a>
                                </li>
                                @endif

                                
                                

                                @if($menu_arr['FAQ'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.faq') }}" class="nav-link">{{ __('FAQ')}}</a>
                                </li>
                                @endif

                            </ul>
                        </li>
                        @endif


                        @if($menu_arr['Contact'] == 'Show')
                        <li class="nav-item">
                            <a href="{{ route('front.contact') }}" class="nav-link ">{{ __('Contact')}}</a>
                        </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->
