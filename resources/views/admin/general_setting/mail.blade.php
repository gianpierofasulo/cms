@extends('admin.admin_layouts')
@section('admin_content')

<h1 class="h3 mb-3 text-gray-800">{{ __('mail_setting') }}</h1>

<div class="card">
    <div class="alert alert-warning mb-3">
        <hr class="my-2">
        <p class="mb-0">{{ __('setup_smtp_to_send_all_applications_emails_such_as') }} <strong>{{ __('forget_password') }}</strong>, <strong>{{ __('user_verification') }}</strong>, <strong>{{ __('invoice') }}</strong>  & {{ __('many_more') }}. <a href="https://www.gmass.co/smtp-test" target="_blank"> {{ __('test_your_smtp_credentials_here') }} </a></p>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <!-- ---------------------------------- -->
        {{-- mail settings --}}
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title line-height-36">
                        {{ __('mail_settings') }}  
                        <a target="_blank" href="https://dashboard.chapa.co/register"><small>({{ __('get_help') }})</small></a>
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/setting/general/mail/update') }}" method="post">
                    @method('POST')
                    @csrf
                    <!-- <input type="hidden" value="nigus" name="type"> -->
                    <div class="form-group row">
                        <label name="mail_driver" class="col-sm-3" />{{__('mail_driver')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_driver') }}" name="mail_driver" type="text"
                            class="form-control @error('mail_driver') is-invalid @enderror"
                            autocomplete="off">
                            @error('mail_driver')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label name="mail_host" class="col-sm-3" />{{__('mail_host')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_host') }}" name="mail_host" type="text"
                            class="form-control @error('mail_host') is-invalid @enderror" autocomplete="off">
                            @error('mail_host')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <!-- Web Hook -->
                    <div class="form-group row">
                        <label name="mail_port" class="col-sm-3" />{{__('mail_port')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_port') }}" name="mail_port" type="text"
                            class="form-control @error('mail_port') is-invalid @enderror" autocomplete="off">
                            @error('mail_port')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label name="mail_from_address" class="col-sm-3" />{{__('mail_from_address')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_from_address') }}" name="mail_from_address" type="text"
                            class="form-control @error('mail_from_address') is-invalid @enderror" autocomplete="off">
                            @error('mail_from_address')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label name="mail_username" class="col-sm-3" />{{__('mail_username')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_username') }}" name="mail_username" type="text"
                            class="form-control @error('mail_username') is-invalid @enderror" autocomplete="off">
                            @error('mail_username')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label name="mail_password" class="col-sm-3" />{{__('mail_password')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_password') }}" name="mail_password" type="password"
                            class="form-control @error('mail_password') is-invalid @enderror" autocomplete="off">
                            @error('mail_password')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label name="mail_encryption" class="col-sm-3" />{{__('mail_encryption')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.mail_encryption') }}" name="mail_encryption" type="text"
                            class="form-control @error('publicKey') is-invalid @enderror" autocomplete="off">
                            @error('mail_encryption')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>

                    <!-- This is role define here -->
                    <div class="form-group row">
                        <div class="offset-sm-3 col-sm-9">
                            <button type="submit" class="btn btn-success"><i
                                class="fas fa-sync"></i>
                            {{ __('update') }}</button>
                        </div>
                    </div>
                    <!-- This is role define here -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

