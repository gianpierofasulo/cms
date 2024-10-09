@extends('admin.admin_layouts')
@section('admin_content')

@section('title')
    {{ __('payment_gateway_setting') }}
@endsection


       <h1 class="h5 mb-3 text-gray-800">{{ __('payment_gateway_setting') }}</h1>


<div class="card">
<div class="alert alert-warning mb-3">
    <h5>{{ __('want_to_receive_payments_setup_at_least_1_payment_gateway') }}</h5>
    <hr class="my-2">
</div>
</div>
<!-- wire transfer -->
{{-- wire Setting --}}
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title line-height-36">
                        {{ __('wire_transfer_setting') }}
                        
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('settings.payment.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" value="wire" name="type">


                    <div class="form-group row">
                        <label name="status" class="col-sm-3" />{{__('status')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('nigus.wire_transfer') ? 'checked' : '' }} type="checkbox" name="wire_transfer"
                            data-bootstrap-switch value="1" data-on-text="{{ __('on') }}"
                            data-off-text="{{ __('off') }}">
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

<div class="row">
    <div class="col-sm-6">
        {{-- paypal settings --}}
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title line-height-36">
                        {{ __('paypal_settings') }}
                        <a target="_blank" href="https://developer.paypal.com/developer/accounts/"><small>({{ __('get_help') }})</small></a>
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('settings.payment.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" value="paypal" name="type">
                    <div class="form-group row">
                        <label name="live_mode" class="col-sm-3" />{{__('live_mode')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('paypal.mode')== 'live' ? 'checked' : '' }} type="checkbox" name="paypal_live_mode"
                            data-bootstrap-switch value="1" data-on-text="{{ __('on') }}"
                            data-off-text="{{ __('off') }}">
                        </div>
                    </div>

                    @if (config('paypal.mode') == 'sandbox')
                        <div class="form-group row">
                            <label name="client_id" class="col-sm-3" />{{__('client_id')}}</label>
                            <div class="col-sm-9">
                                @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                                <input
                                    value="{{ config('paypal.sandbox.client_id') }}" name="paypal_client_id"
                                    type="text" class="form-control @error('paypal_client_id') is-invalid @enderror"
                                    autocomplete="off">
                                @error('paypal_client_id')
                                    <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                                @enderror
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label name="client_secret" class="col-sm-3" />{{__('client_secret')}}</label>
                            <div class="col-sm-9">
                                @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                                <input
                                    value="{{ config('paypal.sandbox.client_secret') }}"
                                    name="paypal_client_secret" type="text"
                                    class="form-control @error('paypal_client_secret') is-invalid @enderror"
                                    autocomplete="off">
                                @error('paypal_client_secret')
                                    <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                                @enderror
                                @endif
                            </div>
                        </div>
                    @else
                        <div class="form-group row">
                            <label name="client_id" class="col-sm-3" />{{__('client_id')}}</label>
                            <div class="col-sm-9">
                                @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                                <input
                                    value="{{ config('paypal.live.client_id') }}" name="paypal_client_id"
                                    type="text" class="form-control @error('paypal_client_id') is-invalid @enderror"
                                    autocomplete="off">
                                @error('paypal_client_id')
                                    <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                                @enderror
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label name="client_secret" class="col-sm-3" />{{__('client_secret')}}</label>
                            <div class="col-sm-9">
                                <input
                                    value="{{ config('paypal.live.client_secret') }}"
                                    name="paypal_client_secret" type="text"
                                    class="form-control @error('paypal_client_secret') is-invalid @enderror"
                                    autocomplete="off">
                                @error('paypal_client_secret')
                                    <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                                @enderror
                            </div>
                        </div>
                    @endif
                    <div class="form-group row">
                        <label name="status" class="col-sm-3" />{{__('status')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('paypal.active') ? 'checked' : '' }} type="checkbox" name="paypal"
                            data-bootstrap-switch value="1" data-on-text="{{ __('on') }}"
                            data-off-text="{{ __('off') }}">
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
                    <!-- ==== -->
                </form>
            </div>
        </div>

        <!-- ---------------------------------- -->
        {{-- Chapa settings --}}
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title line-height-36">
                        {{ __('chapa_settings') }}  
                        <a target="_blank" href="https://dashboard.chapa.co/register"><small>({{ __('get_help') }})</small></a>
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('settings.payment.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" value="chapa" name="type">
                    <div class="form-group row">
                        <label name="secret_key" class="col-sm-3" />{{__('secret_key')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('chapa.secretKey') }}" name="secretKey" type="text"
                                   class="form-control @error('secretKey') is-invalid @enderror"
                                   autocomplete="off">
                            @error('secretKey')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label name="public_key" class="col-sm-3" />{{__('public_key')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('chapa.publicKey') }}" name="publicKey" type="text"
                                   class="form-control @error('publicKey') is-invalid @enderror" autocomplete="off">
                            @error('publicKey')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <!-- Web Hook -->
                    <div class="form-group row">
                        <label name="chapa_webhook" class="col-sm-3" />{{__('chapa_webhook')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('chapa.chapa_webhook') }}" name="chapa_webhook" type="text"
                                   class="form-control @error('chapa_webhook') is-invalid @enderror" autocomplete="off">
                            @error('chapa_webhook')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>
                    </div>
                    <!-- ---- -->
                    <div class="form-group row">
                        <label name="status" class="col-sm-3" />{{__('status')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('chapa.chapa_active') ? 'checked' : '' }} type="checkbox" name="chapa"
                            data-bootstrap-switch value="1" data-on-text="{{ __('on') }}"
                            data-off-text="{{ __('off') }}">
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

        <!-- ---------------------------------- -->

    </div>

    <div class="col-sm-6">
        {{-- Stripe Setting --}}
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title line-height-36">
                        {{ __('stripe_settings') }}
                        <a target="_blank" href="https://stripe.com/docs/development/dashboard/manage-api-keys"><small>({{ __('get_help') }})</small></a>
                    </h5>
                </div>
            </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{ route('settings.payment.update') }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" value="stripe" name="type">
                    <div class="form-group row">
                        <label name="secret_key" class="col-sm-3" />{{__('secret_key')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.stripe_secret') }}" name="stripe_secret" type="text"
                                   class="form-control @error('stripe_secret') is-invalid @enderror"
                                   autocomplete="off">
                            @error('stripe_secret')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label name="publisher_key" class="col-sm-3" />{{__('publisher_key')}}</label>
                        <div class="col-sm-9">
                            @if (env('USER_VERIFIED') == '')

                         <input type="text" name=""  value="This feature Not Shown Demo Mode" class="form-control" placeholder="Demo mode is enabled">
                             @else
                            <input value="{{ config('nigus.stripe_key') }}" name="stripe_key" type="text"
                                   class="form-control @error('stripe_key') is-invalid @enderror" autocomplete="off">
                            @error('stripe_key')
                            <span class="invalid-feedback" role="alert"><span>{{ $message }}</span></span>
                            @enderror
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label name="status" class="col-sm-3" />{{__('status')}}</label>
                        <div class="col-sm-9">
                            <input {{ config('nigus.stripe_active') ? 'checked' : '' }} type="checkbox" name="stripe"
                            data-bootstrap-switch value="1" data-on-text="{{ __('on') }}"
                            data-off-text="{{ __('off') }}">
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
@endsection

@section('script')
    <script>
        $("input[data-bootstrap-switch]").each(function() {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        })
    </script>
@endsection


    <link rel="stylesheet" href="{{ asset('backend') }}/bootstrap/css/icheck-bootstrap.min.css">

