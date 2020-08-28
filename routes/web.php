<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', function(){
    return view('frontend.index');
});
Route::get('/products',[
    'uses' => 'Frontend\UserprofileController@viewproducts',
    'as' =>'frontend.products'
]);
Route::get('/add-to-cart/{id}',[
    'uses' =>'CartController@addtocart',
    'as'=> 'cart.addtocart'
]);
Route::get('logout', function() {
    Auth::logout();
    return redirect('/');
});
Auth::routes();



Route::get('/cart',[
    'uses' => 'CartController@index',
'as'=> 'cart.index'
]);


Route::group(['middleware'=>['auth','user']], function (){
    Route::get('/', 'Frontend\UserprofileController@home')->name('home');
    Route::post('/my-profile-update', 'Frontend\UserprofileController@profileupdate');
    Route::get('/my-profile','Frontend\UserprofileController@profile');
    //Route::get('/products','Frontend\UserprofileController@viewproducts');
});

Route::group(['middleware'=>['auth','admin']], function (){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/registered-user','Admin\UserController@registered');
    Route::get('role-edit/{id}','Admin\UserController@edit');
    Route::put('role-update/{id}','Admin\UserController@update');
});

Route::group(['middleware'=>['auth','vendor']], function (){
    Route::get('/vendor-dashboard', function () {
        return view('vendor.dashboard');
    });
});
