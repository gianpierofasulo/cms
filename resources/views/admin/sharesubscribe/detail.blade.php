@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Shareholder Detail</h1>

    <div class="row">
       <!-- <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Order Details</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Order Number</td>
                                <td>{{ $order_detail->order_no }}</td>
                            </tr>
                            <tr>
                                <td>Shipping Cost</td>
                                <td>{{ $order_detail->shipping_cost }}</td>
                            </tr>
                            <tr>
                                <td>Coupon Discount</td>
                                <td>${{ $order_detail->coupon_discount }} (CODE: {{ $order_detail->coupon_code }})</td>
                            </tr>
                            <tr>
                                <td>Paid Amount</td>
                                <td>${{ $order_detail->paid_amount }}</td>
                            </tr>
                            <tr>
                                <td>Fee Amount</td>
                                <td>${{ $order_detail->fee_amount }}</td>
                            </tr>
                            <tr>
                                <td>Net Amount</td>
                                <td>${{ $order_detail->net_amount }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Customer & Payment Gateway Details</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Customer Type</td>
                                <td>{{ $order_detail->customer_type }}</td>
                            </tr>
                            <tr>
                                <td>Customer Name</td>
                                <td>{{ $order_detail->customer_name }}</td>
                            </tr>
                            <tr>
                                <td>Customer Email</td>
                                <td>{{ $order_detail->customer_email }}</td>
                            </tr>
                            <tr>
                                <td>Payment Method</td>
                                <td>
                                    {{ $order_detail->payment_method }}
                                    @if($order_detail->payment_method == 'Stripe')
                                        <br>
                                        Card Last 4 Digit: {{ $order_detail->card_last4 }}
                                        <br>
                                        Expiry Month: {{ $order_detail->card_exp_month }}
                                        <br>
                                        Expiry Year: {{ $order_detail->card_exp_year }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Payment Date & Time</td>
                                <td>{{ $order_detail->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Payment Status</td>
                                <td>{{ $order_detail->payment_status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>-->
       <!-- <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Billing Information</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>Billing Name</td>
                                <td>{{ $order_detail->billing_name }}</td>
                            </tr>
                            <tr>
                                <td>Billing Email</td>
                                <td>{{ $order_detail->billing_email }}</td>
                            </tr>
                            <tr>
                                <td>Billing Phone</td>
                                <td>{{ $order_detail->billing_phone }}</td>
                            </tr>
                            <tr>
                                <td>Billing Country</td>
                                <td>{{ $order_detail->billing_country }}</td>
                            </tr>
                            <tr>
                                <td>Billing Address</td>
                                <td>{{ $order_detail->billing_address }}</td>
                            </tr>
                            <tr>
                                <td>Billing State</td>
                                <td>{{ $order_detail->billing_state }}</td>
                            </tr>
                            <tr>
                                <td>Billing City</td>
                                <td>{{ $order_detail->billing_city }}</td>
                            </tr>
                            <tr>
                                <td>Billing Zip</td>
                                <td>{{ $order_detail->billing_zip }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Shareholder Information</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td>First Name</td>
                                <td>{{ $subscribe_detail->firstname }}</td>
                            </tr>
                            <tr>
                                <td>Middel Name</td>
                                <td>{{ $subscribe_detail->middlename }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{ $subscribe_detail->lastname }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $subscribe_detail->email }}</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>{{ $subscribe_detail->nationality }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $subscribe_detail->address }}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{ $subscribe_detail->phone }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{ $subscribe_detail->status }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 mt-2 font-weight-bold text-primary">Share Information</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Subscribed share</th>
                                <th>Subscribed Date</th>
                                <th>Per Value</th>
                                <th>Paidup Share</th>
                                <th>Payment Date</th>
                                <th>Payment Amount</th>
                                <th>Total Share</th>
                            </tr>
                            @foreach($subscribe_list as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->subscribed_share }}</td>
                                <td>{{ $row->subscribed_date }}</td>
                                <td>${{ $row->price_per_share }}</td>
                                <td>{{ $row->paidup_share }}</td>
                                <td>{{ $row->payment_date }}</td>
                                <td>{{ $row->payment_amount }}</td>  
                                <td>${{ $row->subscribed_share * $row->subscribed_share }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
