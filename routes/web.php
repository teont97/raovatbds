<?php

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



Route::group(['prefix'=>'admin'],function(){
    Route::get('login',['as'=>'admin.login','uses'=>'UserController@GetLogin']);
    Route::get('dashboard',['as'=>'admin.dashboard','uses'=>'DashboardController@GetDashboard']);
    Route::group(['prefix'=>'customer'],function(){
        Route::get('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
    });
    Route::group(['prefix'=>'newpost'],function(){
        Route::get('list',['as'=>'admin.newpost.getlist','uses'=>'NewPostController@getList']);
    });
});

Route::get('/',['as'=>'gethome','uses'=>'PageController@gethome']);
Route::get('product',['as'=>'getproduct','uses'=>'PageController@getproduct']);
Route::get('customer',['as'=>'getcustomer','uses'=>'PageController@getcustomer']);
Route::get('blog',['as'=>'getblog','uses'=>'PageController@getblog']);
Route::get('contact',['as'=>'getcontact','uses'=>'PageController@getcontact']);
Route::get('login',['as'=>'getlogin','uses'=>'PageController@getlogin']);
Route::post('post-login',['as'=>'postlogin','uses'=>'PageController@postlogin']);
Route::get('register',['as'=>'getregister','uses'=>'PageController@getregister']);
Route::post('post-register',['as'=>'postregister','uses'=>'PageController@postregister']);
Route::get('404',['as'=>'get404','uses'=>'PageController@get404']);
Route::get('submit-post',['as'=>'getsubmitpost','uses'=>'PageController@getsubmitpost']);
Route::get('logout-user','PageController@logoutUser')->name('logoutUser');
Route::group(['prefix'=>'personal'],function(){
    Route::get('profile',['as'=>'personal.profile','uses'=>'PersonalController@getprofile']);
    Route::get('my-post',['as'=>'personal.mypost','uses'=>'PersonalController@getmypost']);
    Route::get('my-favorited',['as'=>'personal.myfavorited','uses'=>'PersonalController@getmyfavorited']);
    Route::get('change-password',['as'=>'personal.changepassword','uses'=>'PersonalController@changepassword']);
});
Route::group(['prefix'=>'ajax'],function(){
    Route::get('loaitin/{id_hinhthuc}',['as'=>'ajax.loaitin','uses'=>'AjaxController@getloaitin']);
});