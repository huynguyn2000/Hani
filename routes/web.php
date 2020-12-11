<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::group(['namespace' => 'Auth'],function (){
    Route::get('dang-ky','RegisterController@getRegister')->name('get.register');
    Route::post('dang-ky','RegisterController@postRegister')->name('post.register');

    Route::get('dang-nhap','LoginController@getLogin')->name('get.login');
    Route::post('dang-nhap','LoginController@postLogin')->name('post.login');

    Route::get('dang-xuat','LoginController@getLogout')->name('get.logout.user');
});

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=>'about'], function(){
    Route::get('/','ArticleController@index')->name('article');
    Route::get('/{a_slug}','ArticleController@getDetailArticle')->name('article.detail');
    Route::get('/postcomment','ArticleController@PostComment')->name('article.detail.comment');

});

Route::group(['prefix'=>'order'], function(){
    Route::get('/','MenuController@index')->name('order');
    Route::get('/san-pham','CategoryController@getProductList')->name('get.product.list');
    Route::get('/cart/searchInfo','CategoryController@getProductListCart')->name('get.product.list.cart');

    Route::get('/cart','CartController@index')->name('order.cart');

    Route::post('/Add-Cart','CartController@AddCart');
    Route::post('/Add-Cart-With-Topping','CartController@AddCartWithTopping');
    Route::get('/Delete-Item-Cart/{stt}','CartController@DeleteItemCart');
    Route::get('/Increase-Item-Cart/{stt}','CartController@IncreaseItemCart');
    Route::get('/Decrease-Item-Cart/{stt}','CartController@DecreaseItemCart');
    Route::get('/Delete-All-Item-Cart','CartController@DeleteAllItemCart');

});

Route::group(['prefix'=>'checkout'], function(){
    Route::get('/','PaymentController@index')->name('payment');
    Route::post('/','PaymentController@saveInfo');
    Route::post('/check_coupon','PaymentController@checkCoupon');
    Route::get('/unset_coupon','PaymentController@unsetCoupon');

    Route::group(['namespace' => 'Auth'],function (){
        Route::get('dang-ky','RegisterController@getRegister')->name('checkout.get.register');
        Route::get('dang-nhap','LoginController@getLogin')->name('checkout.get.login');
        Route::post('dang-nhap','LoginController@postLoginCheckout')->name('checkout.post.login');
    });
});
