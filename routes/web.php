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


Route::get('admin/login',['as'=>'admin.login','uses'=>'UserController@GetLogin']);
Route::get('logout-admin',['as'=>'admin.logout','uses'=>'UserController@AdminLogout']);
Route::post('admin-login',['as'=>'admin.postlogin','uses'=>'UserController@PostLogin']);
Route::group(['prefix'=>'admin','middleware'=>'CheckAdmin'],function(){
    Route::get('dashboard',['as'=>'admin.dashboard','uses'=>'DashboardController@GetDashboard']);
    Route::group(['prefix'=>'customer'],function(){
       // Route::post('update',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
       // Route::post('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        Route::get('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
    });
    Route::group(['prefix'=>'newpost'],function(){
        Route::post('update',['as'=>'admin.newpost.update','uses'=>'NewPostController@postupdate']);
        Route::post('delete',['as'=>'admin.newpost.delete','uses'=>'NewPostController@postdelete']);
        Route::get('list',['as'=>'admin.newpost.getlist','uses'=>'NewPostController@getList']);
    });
    Route::group(['prefix'=>'user'],function(){
        Route::post('update',['as'=>'admin.user.update','uses'=>'UserController@postupdate']);
        Route::post('delete',['as'=>'admin.user.delete','uses'=>'UserController@postdelete']);
        Route::post('create',['as'=>'admin.user.postcreate','uses'=>'UserController@postcreate']);
        Route::get('get-create',['as'=>'admin.user.getcreate','uses'=>'UserController@getcreate']);
        Route::get('list',['as'=>'admin.user.getlist','uses'=>'UserController@getList']);
    });
    Route::group(['prefix'=>'general'],function(){
        Route::get('list-hinhthuc',['as'=>'admin.general.listhinhthuc','uses'=>'GeneralController@getListHinhThuc']);
        Route::get('list-theloai',['as'=>'admin.general.listtheloai','uses'=>'GeneralController@getlisttheloai']);
        Route::get('list-uptin',['as'=>'admin.general.listuptin','uses'=>'GeneralController@getlistuptin']);
        Route::get('list-huongnha',['as'=>'admin.general.listhuongnha','uses'=>'GeneralController@getlisthuongnha']);
    });
    Route::group(['prefix'=>'blog'],function(){
        Route::get('list-type-blog',['as'=>'admin.blog.listTypeBlog','uses'=>'BlogController@getListTypeBlog']);
        Route::get('get-create-Typeblog',['as'=>'admin.blog.getTypeBlog','uses'=>'BlogController@getTypeblog']);
        Route::get('list-blog',['as'=>'admin.blog.listBlog','uses'=>'BlogController@getListBlog']);
        Route::get('get-create-blog',['as'=>'admin.blog.getBlog','uses'=>'BlogController@getBlog']);
        Route::post('create-blog',['as'=>'admin.blog.postBlog','uses'=>'BlogController@postBlog']);
        Route::post('create-type-blog',['as'=>'admin.blog.postTypeBlog','uses'=>'BlogController@postTypeBlog']);
    });
    Route::group(['prefix'=>'ajax'],function(){
        Route::get('theloai/{id_parent}',['as'=>'ajax.parent','uses'=>'AjaxController@gettheloai']);
    });
});

Route::get('/',['as'=>'gethome','uses'=>'PageController@gethome']);
Route::get('product/{id_type}',['as'=>'getproduct','uses'=>'PageController@getproduct']);
Route::get('product-detail/{id_product}',['as'=>'getproductdetail','uses'=>'PageController@getproductdetail']);
Route::get('customer',['as'=>'getcustomer','uses'=>'PageController@getcustomer']);
Route::get('blog/{id_type}',['as'=>'getblog','uses'=>'PageController@getblog']);
Route::get('blog-detail/{id}',['as'=>'getblog.detail','uses'=>'PageController@getblogdetail']);
Route::get('contact',['as'=>'getcontact','uses'=>'PageController@getcontact']);
Route::get('about',['as'=>'getabout','uses'=>'PageController@getabout']);
Route::get('login',['as'=>'getlogin','uses'=>'PageController@getlogin']);
Route::post('post-login',['as'=>'postlogin','uses'=>'PageController@postlogin']);
Route::get('register',['as'=>'getregister','uses'=>'PageController@getregister']);
Route::post('post-register',['as'=>'postregister','uses'=>'PageController@postregister']);
Route::get('404',['as'=>'get404','uses'=>'PageController@get404']);
Route::post('delete_file_upload',['as'=>'post.deletefile','uses'=>'PageController@deletefile']);
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'PageController@autocomplete'));
Route::get('search',array('as'=>'getseacrh','uses'=>'PageController@getsearch'));
Route::post('comment-blog',['as'=>'post.comment.blog','uses'=>'PageController@PostCommentBlog']);
Route::post('comment-post',['as'=>'post.comment.post','uses'=>'PageController@PostCommentPost']);
Route::post('reply-blog',['as'=>'post.reply.blog','uses'=>'PageController@PostReplyBlog']);
Route::post('reply-post',['as'=>'post.reply.post','uses'=>'PageController@PostReplyPost']);
Route::get('search-blog',array('as'=>'getseacrh.blog','uses'=>'PageController@getsearchblog'));
Route::get('autocomplete',array('as'=>'autocomplete','uses'=>'PageController@autocomplete'));
Route::get('search',array('as'=>'getseacrh','uses'=>'PageController@getsearch'));
Route::get('search-by-select',array('as'=>'getseacrh.by.select','uses'=>'PageController@getsearchbyselect'));

Route::get('logout-user','PageController@logoutUser')->name('logoutUser');

Route::group(['prefix'=>'personal','middleware'=>'checklogin'],function(){
    Route::post('upload-avatar', ['as'=>'post.upload.avatar','uses'=>'PersonalController@postuploadavatar']);
    Route::get('submit-post',['as'=>'getsubmitpost','uses'=>'PageController@getsubmitpost']);
    Route::post('post-submit',['as'=>'post.submitpost','uses'=>'PageController@postsubmitpost']);
    Route::get('profile',['as'=>'personal.profile','uses'=>'PersonalController@getprofile']);
    Route::get('my-post',['as'=>'personal.mypost','uses'=>'PersonalController@getmypost']);
    Route::get('my-favorited',['as'=>'personal.myfavorited','uses'=>'PersonalController@getmyfavorited']);
    Route::get('change-password',['as'=>'personal.changepassword','uses'=>'PersonalController@changepassword']);
});
Route::group(['prefix'=>'ajax'],function(){
    Route::get('loaitin/{id_hinhthuc}',['as'=>'ajax.loaitin','uses'=>'AjaxController@getloaitin']);
    Route::get('huyen/{id_tinh}',['as'=>'ajax.huyen','uses'=>'AjaxController@gethuyen']);
    Route::get('phuong/{id_huyen}',['as'=>'ajax.phuong','uses'=>'AjaxController@getphuong']);
    Route::get('comment-post/{id_post}',['as'=>'ajax.comment.post','uses'=>'AjaxController@getcmtpost']);
    Route::get('reply-post/{id_comment}',['as'=>'ajax.reply.post','uses'=>'AjaxController@getreplypost']);
    Route::get('comment-blog/{id_blog}',['as'=>'ajax.comment.blog','uses'=>'AjaxController@getcmtblog']);
    Route::get('reply-blog/{id_comment}',['as'=>'ajax.reply.blog','uses'=>'AjaxController@getreplyblog']);
});




