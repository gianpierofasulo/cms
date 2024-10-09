@php
    $g_setting = DB::table('general_settings')->where('id',1)->first();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    @include('admin.includes.styles')

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>
<body class="bg-gradient-secondary">
        <div class="container v-center">
            <!-- Outer Row -->
          
            
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-2">
                            <div class="row">


<!-- <div class="container mt-8 mt-3 pb-3">
    <div class="row justify-content-center">
        <div class="col-md-9"> -->
            <div class="card bg-white shadow border-0">
                <div class="card-header bg-white text-center py-3">
                    <img style="max-height: 100px; max-width: 100px" src="{{ asset('public/uploads/'.$g_setting->logo) }}" class="w-50">
                </div>
                <div class="card-body px-lg-6 py-lg-3">


        <!-- <div class="row justify-content-center"> -->
            <!--  <div class="col-md-6"> -->
                <!-- <div class="card-group"> -->
                     <!--  <div class="card p-4">
                        <div class="card-body"> -->
               
                @include('admin.includes.notification')

              
                <form method="POST" action="{{ route('twoFactor.check') }}">
                    @csrf
                    <h1 class="text-center">{{ __('Two factor authentication') }}</h1>

                    <p class="text-muted">
                        

                        👻 {!! __('Two factor authentication code has been sent via :email. Code is valid for :15 minutes. If you haven\'t received it, press resend.') !!}

                        <!-- {{ __('global.two_factor.sub_title', ['minutes' => 15]) }} -->
                    </p>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                        <input name="two_factor_code" type="text" class="form-control{{ $errors->has('two_factor_code') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('two factor code') }}">
                        @if($errors->has('two_factor_code'))
                        <div class="invalid-feedback">
                            {{ $errors->first('two_factor_code') }}
                        </div>
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-info my-4">
                                {{ trans('verify') }}
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-secondary my-4" href="{{ route('twoFactor.resend') }}">{{ __('resend') }}</a>

                            

                            <a class="btn btn-danger my-4" href="{{ route('admin.logout') }}">
                                {{ trans('logout') }}
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- </div>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</body>

</html>
