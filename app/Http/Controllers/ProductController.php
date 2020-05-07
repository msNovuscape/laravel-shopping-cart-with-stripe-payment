<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Charge;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index',['products' => $products]);
    }

    public function addToCart(Request $request)
    {
        $product = Product::find($request->id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        $request->session()->put('cart',$cart);
        return response()->json(['cart' => $cart,'url' => route('product.index')]);
    }
    public function reduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if (count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');

        }

        return redirect()->route('product.shoppingCart');

    }
    public function addByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        Session::put('cart',$cart);

        return redirect()->route('product.shoppingCart');

    }

    public function removeItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0){
            Session::put('cart',$cart);
        }else{
            Session::forget('cart');

        }

     return redirect()->route('product.shoppingCart');
    }

    public function shoppingCart()
    {

        if (!Session::has('cart')){
            return view('shop.shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping_cart',['products' => $cart->items,'totalPrice' => $cart->totalPrice]);

    }
    public function getCheckout()
    {
        if (!Session::has('cart')){
            Session::put('empty_cart','Cart is Empty');
            return redirect()->route('product.index');

        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.checkout',['products' => $cart->items,'totalPrice' => $cart->totalPrice]);

    }

    public function postCheckout(Request $request){

        if (!Session::has('cart')){
            return redirect()->route('shop.shopping_cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        Stripe::setApiKey('sk_test_1WpOklMWyPSODDheWAOzxwUS00rfGZEZSy');
        try {
            $charge = Charge::create([
                'amount' => $cart->totalPrice * 100,
                'currency' => 'usd',
                'source' => $request->input('stripeToken'),
                'description' => 'Test Charge'
            ]);
            $order = [
                      'cart' => serialize($cart),
                      'payment_id' => $charge->id,
                      'user_id'  => Auth::user()->id,
                    ];
            Order::create($order);
        }catch(\Exception $e){
            return redirect()->route('checkout')->with('charge-error',$e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('product.index')->with('success','Successfully Purchased Product!');

    }
}
