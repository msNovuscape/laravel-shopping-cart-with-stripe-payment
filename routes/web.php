<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    'uses' => 'ProductController@index',
    'as' => 'product.index'
]);

Route::get('/getProducts', [
    'uses' => 'ProductController@getProducts',
    'as' => 'product.getProducts'
]);

Route::get('/getProduct', [
    'uses' => 'ProductController@getProduct',
    'as' => 'product.getProduct'
]);

Route::get('/add-to-cart/', [
    'uses' => 'ProductController@addToCart',
    'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@shoppingCart',
    'as' => 'product.shoppingCart'
]);
Route::get('/reduceByOne/{id}', [
    'uses' => 'ProductController@reduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/addByOne/{id}', [
    'uses' => 'ProductController@addByOne',
    'as' => 'product.addByOne'
]);
Route::get('/removeItem/{id}', [
    'uses' => 'ProductController@removeItem',
    'as' => 'product.removeItem'
]);


Route::get('/checkout',[
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'

]);
Route::post('/checkout',[
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);


Route::group(['prefix' => 'user'],function (){
    Route::group(['middleware' => 'guest'],function (){

        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function(){
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);
        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });

});


