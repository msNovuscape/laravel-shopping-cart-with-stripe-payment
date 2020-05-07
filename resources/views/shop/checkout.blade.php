@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Checkout</h1>
            <h4>Your Total:<b>{{$totalPrice}}</b></h4>
            <div id="charge-error" class="alert alert-danger {{!Session::has('charge-error') ? 'hidden' : ''}}">
                {{Session::get('charge-error')}}
            </div>
            <form action="{{route('checkout')}}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text"  id="address" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="form-row">
                    <label for="card-element">
                        <h3>Card</h3>
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                </div>


                {{--<div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"  id="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text"  id="address" class="form-control" required>
                        </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name</label>
                            <input type="text"  id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit Card Number</label>
                            <input type="text"  id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration Month</label>
                                    <input type="text"  id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration Year</label>
                                    <input type="text"  id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC</label>
                            <input type="text"  id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>--}}

                {{csrf_field()}}
                <br>
                <button type="submit" id = "btn-submit" class="btn btn-success">Pay {{$totalPrice}}$</button>
            </form>
            <br>
            <form action="https://uat.esewa.com.np/epay/main" method="POST" id="checkout-form-esewa">
                <input value="{{$totalPrice}}" name="tAmt" type="hidden">
                <input value="{{$totalPrice}}" name="amt" type="hidden">
                <input value="0" name="txAmt" type="hidden">
                <input value="0" name="psc" type="hidden">
                <input value="0" name="pdc" type="hidden">
                <input value="epay_payment" name="scd" type="hidden">
                <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
                <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
                <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
                <button type="esewa-submit" id = "btn-submit-esewa" class="btn btn-primary" onchange="esewaSubmit()">Pay {{$totalPrice}}$ from eSewa</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')

    <script type = "text/javascript" src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript" src="{{ URL::asset('js/checkout.js') }}"></script>

@endsection
