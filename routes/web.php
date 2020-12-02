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

Route::get('/about}','ArticleController@index')->name('article');

//Route::get('/order}','MenuController@index')->name('order');

Route::group(['prefix'=>'order'], function(){
    Route::get('/','MenuController@index')->name('order');
    Route::get('/cart}','CartController@index')->name('order.cart');
    Route::get('/Add-Cart/{id}','CartController@AddCart');
    Route::get('/Delete-Item-Cart/{id}','CartController@DeleteItemCart');

});

//Route::get('/order/cart}','CartController@index')->name('order.cart');
//
//Route::get('/Add-Cart/{id}','CartController@AddCart');
