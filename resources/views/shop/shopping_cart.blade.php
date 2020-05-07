@extends('layouts.master')
@section('title')
    Shopping Cart
@endsection
@section('content')

    @if(Session::has('cart'))

     <table class= "table table-striped">
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Remove</th>
        </tr>
         <tr class="row">
             <tbody>
             @foreach($products as $product)
                 <tr>
                     <td>{{$product['item']->title}}</td>
                     <td>
                         <a href="{{route('product.reduceByOne',['id' => $product['item']['id']])}}">
                             <i class="far fa-minus-square"></i>
                         </a>
                         {{$product['qty']}}
                         <a href="{{route('product.addByOne',['id' => $product['item']['id']])}}"><i class="far fa-plus-square"></i>
                         </a>
                     </td>
                     <td>{{$product['price']}}</td>

                     <td>
                         <div class="btn-group">
                             <a href="{{route('product.removeItem',['id' => $product['item']['id']])}}"><i class="fas fa-trash-alt"></i></a></li>
                         </div>
                     </td>
                 </tr>
             @endforeach
             </tbody>

         </tr>
     </table>
{{--
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge">{{$product['qty']}}</span>
                            <strong>{{$product['item']->title}}</strong>
                            <span class="label label-success">{{$product['price']}}</span>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" > Action<span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('product.reduceByOne',['id' => $product['item']['id']])}}">Reduce by 1</a></li>
                                    <li><a href="{{route('product.removeItem',['id' => $product['item']['id']])}}">Remove all</a></li>
                                </ul>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
--}}
       <strong style="font-size: large">Total Amount:{{$totalPrice}}</strong>
        <hr>
       <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h3>There are no items in cart</h3>
                <a class="btn btn-primary" href="{{route('product.index')}}">Add Some</a>
            </div>
        </div>
    @endif
@endsection

