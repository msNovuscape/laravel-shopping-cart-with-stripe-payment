<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    {{--<meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
--}}

    <title>@yield('title','Mahesh E-commerce site')</title>

     @yield('styles')

    <link href="{{ asset('src/css/foundation.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font_awesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>

<body>
@include('partials.header')

@yield('content')

@include('partials.footer')

@yield('scripts')

<script src="{{ asset('js/vendor/jquery.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>


{{--<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        Foundation for Sites
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="dist/css/foundation.css"/>
    <link rel="stylesheet" href="dist/css/app.css"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>

<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
            Hey! Welcome to MC- Mykey's Store
        </strong>
    </h2>
    <br>
    <a href="shirts.html"><button class="button large">Check out My Shirts</button></a>
</section>
<br/>
<div class="subheader text-center">
    <h2>
        MyKey&rsquo;s Latest Shirts
    </h2>
</div>

<!-- Latest SHirts -->
<div class="row">
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="http://i.imgur.com/Mcw06Yt.png"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Kickin with Kraken Tee
                </h3>
            </a>
            <h5>
                $19.99
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
</div>
<br>

<script src="dist/js/vendor/jquery.js"></script>
<script src="dist/js/app.js"></script>
</body>
</html>--}}

