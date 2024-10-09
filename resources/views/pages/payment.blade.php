@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_checkout) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{ __('Payment')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{ __('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Payment')}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content pt_50 pb_60">
        <div class="container">
            <div class="row cart">
                <div class="col-md-12">
                    
                    <h3>{{ __('Make Payment')}}</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <select name="payment_method" class="form-control" id="paymentMethodChange">
                                    <option value="">{{ __('Select Payment Method')}}</option>
                                     @if (config('paypal.active') == true)
                                    <option value="PayPal">{{ __('PayPal')}}</option>
                                    @endif
                                    @if (config('nigus.stripe_active') == true)
                                    <option value="Stripe">{{ __('Stripe')}}</option>
                                    @endif
                                     @if (config('chapa.chapa_active') == true)
                                    <option value="Chapa">{{ __('Chapa')}}</option>
                                    @endif
                                    @if (config('nigus.wire_transfer') == true)
                                    <option value="Bank">{{ __('Bank')}}</option>
                                    @endif
                                    <option value="TeleBirr">{{ __('TeleBirr')}}</option>
                                    <!-- <option value="Chash On Delivery">{{ __('Chash On Delivery')}}</option>-->
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="paypal mt_20">
                        <h4>{{ __('Pay with PayPal')}}</h4>
                        <div id="paypal-button"></div>
                        @php
                            $paypal_mode = env('PAYPAL_ENV_TYPE');
                            $client = env('PAYPAL_CLIENT_ID');
                            $secret = env('PAYPAL_SECRET_KEY');
                        @endphp

                        @if(session()->get('shipping_cost'))
                            @php
                                $final_price = (session()->get('subtotal') + session()->get('shipping_cost'))-session()->get('coupon_amount'); 
                            @endphp
                        @else
                            @php
                                $final_price =session()->get('subtotal') - session()->get('coupon_amount');
                            @endphp
                        @endif  

                        @if($paypal_mode == 'sandbox')
                            @php
                                $paypal_url = 'https://api.sandbox.paypal.com/v1/'; 
                                $env_type = 'sandbox';
                            @endphp
                        @elseif($paypal_mode == 'production')
                            @php
                                $paypal_url = 'https://api.paypal.com/v1/';
                                $env_type = 'production';
                            @endphp
                        @endif
                    </div>

                    <div class="bank mt_20">
                        <h4>{{ __('Pay with Bank')}} </h4><span style="color: orange">{{ __('Nigus Abate CBE:- 1000213224078')}}</span>
                        <div id="Bank-button"></div>

                        @if(session()->get('shipping_cost'))
                            @php 
                                $final_price = (session()->get('subtotal') + session()->get('shipping_cost'))-session()->get('coupon_amount'); 
                            @endphp
                        @else
                            @php
                                $final_price =session()->get('subtotal') - session()->get('coupon_amount');
                            @endphp
                        @endif

                        @php
                            $cents = $final_price*100;
                        @endphp

                        @if(session()->get('customer_email'))
                            @php
                                $c_email = session()->get('customer_email');
                            @endphp
                        @else
                            @php
                                $c_email = session()->get('billing_email');
                            @endphp
                        @endif

                        <form action="{{ route('customer.bank') }}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="card-body">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <td><label for="">{{ __('Your Name *')}}</label></td>
                                    <td> <label for="">{{ __('Bank Name')}} </label></td>
                                    <td><label for="">{{ __('Amount You Pay')}}</label></td>
                                    
                                </tr>
                                 <tr>   
                                    <td><input type="text" class="form-control" name="firstname"></td>
                                    <td><input type="text" class="form-control" name="bankname"></td>
                                    <td><input type="text" class="form-control" name="payment_amount"></td>
                                      
                                </tr>
                                <tr>
                                    <td><label for="">{{ __('Reference No *')}}</label></td>
                                    <td><label for="">{{ __('Reciept *')}}</label></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="reference"></td>
                                    <td><input type="file" class="form-control" name="reciept"></td>
                                    <td> <button type="submit" class="btn btn-success btn-block">{{ __('Submit')}}</button></td>
                                </tr> 
                            </table>
                            </div>
                        </form>
                    </div>


                     <div class="telebirr mt_20">
                        <h4>{{ __('Pay with Tele Birr')}} </h4><span style="color: orange">{{ __('Phone Number:- +25193258')}}</span>
                        <div id="TeleBirr-button"></div>

                        @if(session()->get('shipping_cost'))
                            @php 
                                $final_price = (session()->get('subtotal') + session()->get('shipping_cost'))-session()->get('coupon_amount'); 
                            @endphp
                        @else
                            @php
                                $final_price =session()->get('subtotal') - session()->get('coupon_amount');
                            @endphp
                        @endif

                        @php
                            $cents = $final_price*100;
                        @endphp

                        @if(session()->get('customer_email'))
                            @php
                                $c_email = session()->get('customer_email');
                            @endphp
                        @else
                            @php
                                $c_email = session()->get('billing_email');
                            @endphp
                        @endif

                        <form action="{{ route('customer.telebirr') }}" method="post" enctype="multipart/form-data">
                            @csrf
                             <div class="card-body">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th><label for="">{{ __('Payer Name *')}}</label></th>
                                    <th> <label for="">{{ __('Date')}} *</label></th>
                                    <th><label for="">{{ __('Transaction No')}} *</label></th>
                                    
                                </tr>
                                 <tr>   
                                    <td><input type="text" class="form-control" name="payername"></td>
                                    <td><input id="datepicker" type="date" name="date" class="form-control" ></td>
                                    <td><input type="text" class="form-control" name="transaction_no"></td>
                                      
                                </tr>
                                
                                <tr>
                                    <td colspan="2"></td>
                                    <td> <button type="submit" class="btn btn-success btn-block">{{ __('Submit')}}</button></td>
                                </tr> 
                            </table>
                            </div>
                        </form>
                    </div>

                    <div class="stripe mt_20">
                        <h4>{{ __('Pay with Stripe')}}</h4>
 
                        @if(session()->get('shipping_cost'))
                            @php 
                                $final_price = (session()->get('subtotal') + session()->get('shipping_cost'))-session()->get('coupon_amount'); 
                            @endphp
                        @else
                            @php
                                $final_price =session()->get('subtotal') - session()->get('coupon_amount');
                            @endphp
                        @endif

                        @php
                            $cents = $final_price*100;
                        @endphp

                        @if(session()->get('customer_email'))
                            @php
                                $c_email = session()->get('customer_email');
                            @endphp
                        @else
                            @php
                                $c_email = session()->get('billing_email');
                            @endphp
                        @endif

                        <form action="{{ route('customer.stripe') }}" method="post">
                            @csrf
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                                data-amount="{{ $cents }}"
                                data-name="{{ env('APP_NAME') }}"
                                data-description=""
                                data-image="{{ asset('public/uploads/stripe_icon1.png') }}"
                                data-currency="usd"
                                data-email="{{ $c_email }}"
                            >
                            </script>
                        </form>
                    </div>

                    <!-------------------Chapa Payment start ------------------->
                    <div class="chapa mt_20">
                        <h4>{{ __('Pay with Chapa')}}</h4>
                    <div id="chapa-button"></div>
                        @if(session()->get('shipping_cost'))
                            @php 
                                $final_price = (session()->get('subtotal') + session()->get('shipping_cost'))-session()->get('coupon_amount'); 
                            @endphp
                        @else
                            @php
                                $final_price =session()->get('subtotal') - session()->get('coupon_amount');
                            @endphp
                        @endif

                        @php
                            $cents = $final_price*100;
                        @endphp

                        @if(session()->get('customer_email'))
                            @php
                                $c_email = session()->get('customer_email');
                            @endphp
                        @else
                            @php
                                $c_email = session()->get('billing_email');
                            @endphp
                        @endif

                        <form action="{{ route('customer.chapa') }}" method="post">
                            @csrf
                            
                            <button class="btn btn-success" type="submit"><img src="../public/uploads/chapa/chapa_logo-removebg-preview.png" alt="Snow" style="width:80px; height: auto;">{{__('Pay Now')}}</button>               
                        </form>
                    </div>
                   
                    <!----------------------------Chapa end------------->

                </div>
            </div>
        </div>
    </div>

    <script>
        paypal.Button.render({
            env: '{{ $env_type }}',
            client: {
                sandbox: '{{ $client }}',
                production: '{{ $client }}'
            },
            locale: 'en_US',
            style: {
                size: 'medium',
                color: 'blue',
                shape: 'rect',
            },

            // Set up a payment
            payment: function (data, actions) {
                return actions.payment.create({

                    redirect_urls:{
                        return_url: '{{ url("customer/execute-payment") }}'
                    },

                    transactions: [{
                        amount: {
                            total: '{{ $final_price }}',
                            currency: 'USD'
                        }
                    }]
              });
            },

            // Execute the payment
            onAuthorize: function (data, actions) {
                return actions.redirect();
            }
        }, '#paypal-button');       
        </script>
@endsection