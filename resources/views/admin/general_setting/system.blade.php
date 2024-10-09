@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">Edit System settings</h1>
<div class="row">
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/color/update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Theme Color</label>
                        <input type="text" name="theme_color" class="form-control jscolor" value="{{ $general_setting->theme_color }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>  
        </form>
    </div>

    <!-- for sidebar color -->
    <div class="col-md-6">  
        <form action="{{ url('admin/setting/general/color/sidebar_update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Side Bar Color</label>
                        <input type="text" name="sidebar_color" class="form-control jscolor" value="{{ $general_setting->sidebar_color }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- logo -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/logo/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="current_photo" value="{{ $general_setting->logo }}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Existing Logo</label>
                        <div>
                            <img src="{{ asset('public/uploads/'.$general_setting->logo) }}" alt="" class="w_200">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Change Logo</label>
                        <div>
                            <input type="file" name="logo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- favicon -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/favicon/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="current_photo" value="{{ $general_setting->favicon }}">

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Existing Favicon</label>
                        <div>
                            <img src="{{ asset('public/uploads/'.$general_setting->favicon) }}" alt="" class="w_100">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Change Favicon</label>
                        <div>
                            <input type="file" name="favicon">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- preloader -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/preloader/update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="current_photo" value="{{ $general_setting->preloader_photo }}">


            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Existing Preloader Photo</label>
                        <div>
                            <img src="{{ asset('public/uploads/'.$general_setting->preloader_photo) }}" alt="" class="w_200">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Change Preloader Photo</label>
                        <div>
                            <input type="file" name="preloader_photo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Preloader Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="preloader_status" id="rr1" value="Show" @if($general_setting->preloader_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="preloader_status" id="rr2" value="Hide" @if($general_setting->preloader_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- tawik -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/tawklivechat/update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Tawk Live Chat Code</label>
                         @if (env('USER_VERIFIED') == '')

                        <textarea name="google_adsense_script_code" class="form-control" cols="30" rows="10">This feature Not Shown Demo Mode</textarea>

                             @else
                        <textarea name="tawk_live_chat_code" class="form-control" cols="30" rows="10">{{ $general_setting->tawk_live_chat_code }}</textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tawk Live Chat Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tawk_live_chat_status" id="rr1" value="Show" @if($general_setting->tawk_live_chat_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tawk_live_chat_status" id="rr2" value="Hide" @if($general_setting->tawk_live_chat_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- RECAPCH -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/googlerecaptcha/update') }}" method="post">
            @csrf 
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Google Recaptcha Site Key</label>
                          @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                        <input type="text" name="google_recaptcha_site_key" class="form-control" value="{{ $general_setting->google_recaptcha_site_key }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Google Recaptcha Status</label>
                        <div>
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="radio" name="google_recaptcha_status" id="rr1" value="Show" @if($general_setting->google_recaptcha_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="google_recaptcha_status" id="rr2" value="Hide" @if($general_setting->google_recaptcha_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- Google Anlytics -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/googleanalytic/update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Google Analytic Tracking Id</label>
                          @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                        <input type="text" name="google_analytic_tracking_id" class="form-control" value="{{ $general_setting->google_analytic_tracking_id }}">
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Google Analytic Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                
                                <input class="form-check-input" type="radio" name="google_analytic_status" id="rr1" value="Show" @if($general_setting->google_analytic_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                               
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="google_analytic_status" id="rr2" value="Hide" @if($general_setting->google_analytic_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- cookie consent -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/cookieconsent/update') }}" method="post">
            @csrf

            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Cookie Consent Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cookie_consent_status" id="rr1" value="Show" @if($general_setting->cookie_consent_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cookie_consent_status" id="rr2" value="Hide" @if($general_setting->cookie_consent_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
    <!-- sticky header -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/stickyheader/update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Sticky Header Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sticky_header_status" id="rr1" value="Show" @if($general_setting->sticky_header_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sticky_header_status" id="rr2" value="Hide" @if($general_setting->sticky_header_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>

    <!-- telegram API -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/system/telegramenv') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="">{{__('channel_id')}}</label>

                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else

                            <input value="{{ config('nigus.channel_id') }}" name="channel_id" type="text"
                            class="form-control @error('channel_id') is-invalid @enderror"
                            autocomplete="off"> 
                            @error('channel_id')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                        @endif
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="">{{__('bot_channel_id')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""   value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.bot_channel_id') }}" name="bot_channel_id" type="text"
                            class="form-control @error('bot_channel_id') is-invalid @enderror" autocomplete="off">
                            @error('bot_channel_id')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <!-- Web Hook -->
                    <div class="form-group row">
                        <label for="">{{__('telegram_bot_token')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.telegram_bot_token') }}" name="telegram_bot_token" type="text"
                            class="form-control @error('telegram_bot_token') is-invalid @enderror" autocomplete="off">
                            @error('telegram_bot_token')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="">{{__('status')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('nigus.telegram_status') ? 'checked' : '' }} type="checkbox" name="telegram_status"
                            data-bootstrap-switch value="true" data-on-text="{{ __('true') }}"
                            data-off-text="{{ __('false') }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>

     <!-- OpenAI(chatGPT) API -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/system/openai') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="">{{__('chatgpt_api_key')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.chatgpt_api_key') }}" name="chatgpt_api_key" type="text"
                            class="form-control @error('chatgpt_api_key') is-invalid @enderror"
                            autocomplete="off">
                            @error('chatgpt_api_key')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                     
                     <div class="form-group row">
                        <label for="">{{__('Enable/Disable ChatGpt')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('nigus.chatgpt_status') ? 'checked' : '' }} type="checkbox" name="chatgpt_status"
                            data-bootstrap-switch value="true" data-on-text="{{ __('true') }}"
                            data-off-text="{{ __('false') }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Google AdSense -->
    <div class="col-md-6">
        <form action="{{ url('admin/setting/general/googleadsense/update') }}" method="post">
            @csrf
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Google AdSense Script Code</label>
                        @if (env('USER_VERIFIED') == '')

                        <textarea name="google_adsense_script_code" class="form-control" cols="30" rows="10">This feature Not Shown Demo Mode</textarea>

                             @else
                        <textarea name="google_adsense_script_code" class="form-control" cols="30" rows="10">{{ $general_setting->google_adsense_script_code }}</textarea>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Google AdSense Script Code Status</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="google_adsense_script_status" id="rr1" value="Show" @if($general_setting->google_adsense_script_status == 'Show') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr1">Show</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="google_adsense_script_status" id="rr2" value="Hide" @if($general_setting->google_adsense_script_status == 'Hide') checked @endif>
                                <label class="form-check-label font-weight-normal" for="rr2">Hide</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')
    <script>
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    </script>
@endsection


    <link rel="stylesheet" href="{{ asset('backend') }}/bootstrap/css/icheck-bootstrap.min.css">

