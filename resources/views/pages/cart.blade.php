@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_cart) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>{{__('Cart')}}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">{{__('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{__('Cart')}}</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content pt_50 pb_60">
        <div class="container">
            <div class="row cart">
                <div class="col-md-12">
                    @if(Session::has('cart_product_id'))
                    <form action="{{ url('cart/update') }}" method="post">
                        @csrf
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr class="table-info">
                                    <th>{{__('Serial')}}</th>
                                    <th>{{__('Thumbnail')}}</th>
                                    <th>{{__('Product Name')}}</th>
                                    <th>{{__('Unit Price')}}</th>
                                    <th>{{__('Size')}}</th>
                                    <th>{{__('Color')}}</th>
                                    <th>{{__('Quantity')}}</th>
                                    <th>{{__('Subtotal')}}</th>
                                    <th>{{__('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $value = '';
                                    $itm = '';
                                    $arr_cart_product_id = array();
                                    $arr_cart_product_qty = array();
                                    $subtotal = 0;
                                @endphp
                                @php $i=0 @endphp
                                @foreach(Session::get('cart_product_id') as $value)
                                    @php
                                        $i++;
                                        $arr_cart_product_id[$i] = $value;
                                    @endphp
                                @endforeach

                                @php $i=0 @endphp
                                @foreach(Session::get('cart_product_qty') as $value)
                                    @php
                                        $i++;
                                        $arr_cart_product_qty[$i] = $value;
                                    @endphp
                                @endforeach

                                @php $tot1 = 0 @endphp
                                @for($i=1;$i<=count($arr_cart_product_id);$i++)

                                    @php
                                        $all_data = DB::table('products')->where('id', $arr_cart_product_id[$i])->get();
                                    @endphp

                                    @foreach ($all_data as $itm)
                                        @php
                                            $product_name = $itm->product_name;
                                            $product_slug = $itm->product_slug;
                                            $product_current_price = $itm->product_current_price;
                                            $product_featured_photo = $itm->product_featured_photo;
                                        @endphp
                                    @endforeach

                                    <input type="hidden" name="product_id[]" value="{{ $arr_cart_product_id[$i] }}">
                                    <tr>
                                        <td class="align-middle">{{ $i }}</td>
                                        <td class="align-middle"><img src="{{ asset('public/uploads/'.$product_featured_photo) }}"></td>
                                        <td class="align-middle">
                                            <a href="{{ url('product/'.$product_slug) }}">{{ __($product_name) }}</a>
                                        </td>
                                        <td class="align-middle">${{ __($product_current_price) }}</td>

                                    <td class="align-middle">
                                        <select class="form-control" name="">
                                            <option value="none" selected="selected">None</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                        </select>
                                    </td>
                                    <td class="align-middle">
                                        <select class="form-control" name="">
                                             <option value="none" selected="selected">None</option>
                                            <option value="red">Red</option>
                                            <option value="blue">Blue</option>
                                            <option value="white">White</option>
                                            <option value="green">Green</option>
                                            <option value="yellow">Yellow</option>
                                        </select>
                                    </td>
                                        <td class="align-middle">
                                            <input type="number" class="form-control" name="product_qty[]" step="1" min="1" max="" pattern="" pattern="[0-9]*" inputmode="numeric" value="{{ $arr_cart_product_qty[$i] }}">
                                        </td>
                                        <td class="align-middle">
                                            ${{ $subtotal = $product_current_price * $arr_cart_product_qty[$i] }}
                                        </td>
                                        <td class="align-middle">
                                        <a href="{{ url('cart/delete/'.$arr_cart_product_id[$i]) }}" class="cart_button_arefin btn btn-xs btn-danger" onClick="return confirm('Are you sure?');"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>

                                    @php $tot1 = $tot1 + $subtotal; @endphp
                                @endfor

                                <tr>
                                    <td colspan="5" class="text-right">{{__('Total:')}} </td>
                                    <td colspan="2">$<span class="update_subtotal">{{ __($tot1) }}</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-buttons">
                            <a href="{{ route('front.shop') }}" class="btn btn-info btn-arf">{{__('Continue Shopping')}}</a>
                            <input type="submit" value="{{__('Update Cart')}}" class="btn btn-info btn-arf" name="form1">
                            <a href="{{ route('front.checkout') }}" class="btn btn-info btn-arf">{{__('Checkout')}}</a>
                        </div>
                    </form>

                    @else
                        {{__('Cart is empty!')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
