<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>@yield('title')</title>

     @yield('styles')
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/app.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->

    <link href="{{ asset('font_awesome/css/all.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>
@include('partials.header')

<div class="container">
    @yield('content')
</div>

@yield('scripts')
<script src="{{ asset('font_awesome/js/fontawesome.min.js') }}"></script>

<script src="{{ asset('jquery/dist/jquery.js') }}"></script>

<script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


</body>
</html>
