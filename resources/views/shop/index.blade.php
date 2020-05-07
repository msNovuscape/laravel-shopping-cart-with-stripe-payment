@extends('layouts.master')
@section('title')
    Shopping Cart
@endsection
@section('content')
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{Session::get('success')}}
                </div>
            </div>
        </div>
     @endif
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="{{$product->imagePath}}" class="image-responsive">
                    <div class="caption">
                        <h3>{{$product->title}}</h3>
                        <p class="description">{{$product->description}}</p>
                        <div class="clearfix">
                            <div class="price pull-left">${{$product->price}}</div>
                            <button id="{{$product->id}}" route="{{route('product.addToCart')}}" onclick = "add_to_cart({{$product->id}})" class="btn btn-success pull-right add-cart" >Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
@endsection
@section('scripts')
    <script type="text/javascript" src="{{asset('src/js/add-cart.js')}}"></script>
@endsection
