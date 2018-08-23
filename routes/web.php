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
    Route::group(['prefix'=>'address'],function(){
        // Route::post('update',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        // Route::post('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
         Route::get('list-tinh',['as'=>'admin.address.getlistTinh','uses'=>'AddressController@getListTinh']);
         Route::get('list-huyen',['as'=>'admin.address.getlistHuyen','uses'=>'AddressController@getListHuyen']);
         Route::get('list-phuong',['as'=>'admin.address.getlistPhuong','uses'=>'AddressController@getListPhuong']);
         Route::get('create-tinh',['as'=>'admin.address.getCreateTinh','uses'=>'AddressController@getCreateTinh']);
         Route::post('post-create-tinh',['as'=>'admin.address.postCreateTinh','uses'=>'AddressController@postCreateTinh']);
         Route::get('create-huyen',['as'=>'admin.address.getCreateHuyen','uses'=>'AddressController@getCreateHuyen']);
         Route::post('post-create-huyen',['as'=>'admin.address.postCreateHuyen','uses'=>'AddressController@postCreateHuyen']);
         Route::get('create-phuong',['as'=>'admin.address.getCreatePhuong','uses'=>'AddressController@getCreatePhuong']);
         Route::post('post-create-phuong',['as'=>'admin.address.postCreatePhuong','uses'=>'AddressController@postCreatePhuong']);
         Route::post('delete-tinh',['as'=>'admin.address.delete.tinh','uses'=>'AddressController@deleteTinh']);
         Route::post('delete-huyen',['as'=>'admin.address.delete.huyen','uses'=>'AddressController@deleteHuyen']);
         Route::post('delete-phuong',['as'=>'admin.address.delete.phuong','uses'=>'AddressController@deletePhuong']);
         Route::get('get-edit-tinh/{id}',['as'=>'admin.address.edit.getEditTinh','uses'=>'AddressController@getEditTinh']);
         Route::get('get-edit-huyen/{id}',['as'=>'admin.address.edit.getEditHuyen','uses'=>'AddressController@getEditHuyen']);
         Route::get('get-edit-phuong/{id}',['as'=>'admin.address.edit.getEditPhuong','uses'=>'AddressController@getEditPhuong']);
         Route::post('edit-tinh/{id}',['as'=>'admin.address.edit.posttinh','uses'=>'AddressController@editPostTinh']);
         Route::post('edit-huyen/{id}',['as'=>'admin.address.edit.posthuyen','uses'=>'AddressController@editPostHuyen']);
         Route::post('edit-phuong/{id}',['as'=>'admin.address.edit.postphuong','uses'=>'AddressController@editPostPhuong']);
     });
    Route::group(['prefix'=>'about'],function(){
        // Route::post('update',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        // Route::post('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        Route::get('get-create',['as'=>'admin.about.create','uses'=>'AboutController@getCreate']);
        Route::get('list',['as'=>'admin.about.getlist','uses'=>'AboutController@getList']);
        Route::post('post-create',['as'=>'admin.about.postcreate','uses'=>'AboutController@postcreate']);
        Route::post('delete',['as'=>'admin.about.delete','uses'=>'AboutController@postdelete']);
        Route::get('get-edit/{id}',['as'=>'admin.about.edit','uses'=>'AboutController@getEdit']);
        Route::post('post-edit/{id}',['as'=>'admin.about.postedit','uses'=>'AboutController@postedit']);
     });
     Route::group(['prefix'=>'faq'],function(){
        // Route::post('update',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        // Route::post('list',['as'=>'admin.customer.getlist','uses'=>'CustomerController@getList']);
        Route::get('get-create',['as'=>'admin.faq.create','uses'=>'FaqController@getCreate']);
        Route::post('post-create',['as'=>'admin.faq.postcreate','uses'=>'FaqController@postcreate']);
        Route::post('delete',['as'=>'admin.faq.delete','uses'=>'FaqController@postdelete']);
        Route::get('list',['as'=>'admin.faq.getlist','uses'=>'FaqController@getList']);
        Route::get('get-edit/{id}',['as'=>'admin.faq.edit','uses'=>'FaqController@getEdit']);
        Route::post('post-edit/{id}',['as'=>'admin.faq.postedit','uses'=>'FaqController@postedit']);
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
        Route::post('post-edit-hinhthuc',['as'=>'admin.general.edit.hinhthuc','uses'=>'GeneralController@editHinhthuc']);
        Route::post('post-edit-theloai',['as'=>'admin.general.edit.theloai','uses'=>'GeneralController@editTheloai']);
        Route::post('post-edit-uptin',['as'=>'admin.general.edit.uptin','uses'=>'GeneralController@editUptin']);
        Route::post('post-edit-huongnha',['as'=>'admin.general.edit.huongnha','uses'=>'GeneralController@editHuongnha']);
        Route::post('post-create-hinhthuc',['as'=>'admin.general.create.hinhthuc','uses'=>'GeneralController@createHinhthuc']);
        Route::post('post-delete-hinhthuc',['as'=>'admin.general.delete.hinhthuc','uses'=>'GeneralController@deleteHinhthuc']);
        Route::post('post-create-theloai',['as'=>'admin.general.create.theloai','uses'=>'GeneralController@createtheloai']);
        Route::post('post-delete-theloai',['as'=>'admin.general.delete.theloai','uses'=>'GeneralController@deleteTheloai']);
        Route::post('post-create-huongnha',['as'=>'admin.general.create.huongnha','uses'=>'GeneralController@createHuongnha']);
        Route::post('post-delete-huongnha',['as'=>'admin.general.delete.huongnha','uses'=>'GeneralController@deleteHuongnha']);
        Route::post('post-delete-uptin',['as'=>'admin.general.delete.uptin','uses'=>'GeneralController@deleteUptin']);
        Route::post('post-create-uptin',['as'=>'admin.general.create.uptin','uses'=>'GeneralController@createUptin']);
    });
    Route::group(['prefix'=>'blog'],function(){
        Route::get('list-type-blog',['as'=>'admin.blog.listTypeBlog','uses'=>'BlogController@getListTypeBlog']);
        Route::get('get-create-Typeblog',['as'=>'admin.blog.getTypeBlog','uses'=>'BlogController@getTypeblog']);
        Route::get('list-blog',['as'=>'admin.blog.listBlog','uses'=>'BlogController@getListBlog']);
        Route::get('get-create-blog',['as'=>'admin.blog.getBlog','uses'=>'BlogController@getBlog']);
        Route::get('get-edit-Typeblog/{id}',['as'=>'admin.blog.edit.getTypeBlog','uses'=>'BlogController@getEditTypeblog']);
        Route::get('get-edit-blog/{id}',['as'=>'admin.blog.edit.getBlog','uses'=>'BlogController@getEditBlog']);
        Route::post('create-type-blog',['as'=>'admin.blog.postTypeBlog','uses'=>'BlogController@postTypeBlog']);
        Route::post('delete-type-blog',['as'=>'admin.blog.delete.postTypeBlog','uses'=>'BlogController@deleteTypeBlog']);
        Route::post('edit-type-blog/{id}',['as'=>'admin.blog.edit.postTypeBlog','uses'=>'BlogController@editTypeBlog']);
        Route::post('create-blog',['as'=>'admin.blog.postBlog','uses'=>'BlogController@postBlog']);
        Route::post('delete-blog',['as'=>'admin.blog.delete.postBlog','uses'=>'BlogController@deleteBlog']);
        Route::post('edit-blog/{id}',['as'=>'admin.blog.edit.postBlog','uses'=>'BlogController@editBlog']);
    });
    Route::group(['prefix'=>'ajax'],function(){
        Route::get('theloai/{id_parent}',['as'=>'ajax.parent','uses'=>'AjaxController@gettheloai']);
    });
    Route::group(['prefix'=>'data'],function(){
        Route::get('data-email',['as'=>'data.email.list','uses'=>'DataController@getDataEmail']);
    });
});

Route::get('/',['as'=>'gethome','uses'=>'PageController@gethome']);
Route::get('product/{id_type}',['as'=>'getproduct','uses'=>'PageController@getproduct']);
Route::get('product-parent/{id_parent}',['as'=>'getproduct.parent','uses'=>'PageController@getproductparent']);
Route::get('product-detail/{id_product}',['as'=>'getproductdetail','uses'=>'PageController@getproductdetail']);
Route::get('product-vip',['as'=>'getproductvip','uses'=>'PageController@getproductvip']);
Route::get('product-by-day',['as'=>'getproductByday','uses'=>'PageController@getproductByday']);
Route::get('customer',['as'=>'getcustomer','uses'=>'PageController@getcustomer']);
Route::get('blog/{id_type}',['as'=>'getblog','uses'=>'PageController@getblog']);
Route::get('blog-detail/{id}',['as'=>'getblog.detail','uses'=>'PageController@getblogdetail']);
Route::get('contact',['as'=>'getcontact','uses'=>'PageController@getcontact']);
Route::post('post-contact',['as'=>'PostContact','uses'=>'PageController@PostContact']);
Route::get('about',['as'=>'getabout','uses'=>'PageController@getabout']);
Route::get('login',['as'=>'getlogin','uses'=>'PageController@getlogin']);
Route::post('post-login',['as'=>'postlogin','uses'=>'PageController@postlogin']);
Route::get('register',['as'=>'getregister','uses'=>'PageController@getregister']);
Route::post('post-register',['as'=>'postregister','uses'=>'PageController@postregister']);
Route::get('404',['as'=>'get404','uses'=>'PageController@get404']);
Route::get('faq',['as'=>'getfaq','uses'=>'PageController@getfaq']);
Route::get('services',['as'=>'getservices','uses'=>'PageController@getservices']);
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
Route::post('save-data-email',['as'=>'post.email.save','uses'=>'PageController@SaveDataEmail']);
Route::get('logout-user','PageController@logoutUser')->name('logoutUser');

Route::group(['prefix'=>'personal','middleware'=>'checklogin'],function(){
    Route::post('upload-avatar', ['as'=>'post.upload.avatar','uses'=>'PersonalController@postuploadavatar']);
    Route::get('submit-post',['as'=>'getsubmitpost','uses'=>'PageController@getsubmitpost']);
    Route::post('post-submit',['as'=>'post.submitpost','uses'=>'PageController@postsubmitpost']);
    Route::get('profile',['as'=>'personal.profile','uses'=>'PersonalController@getprofile']);
    Route::post('update-profile/{id_user}',['as'=>'personal.update.profile','uses'=>'PersonalController@postUpdateProfile']);
    Route::get('my-post',['as'=>'personal.mypost','uses'=>'PersonalController@getmypost']);
    Route::get('my-favorited',['as'=>'personal.myfavorited','uses'=>'PersonalController@getmyfavorited']);
    Route::get('change-password',['as'=>'personal.changepassword','uses'=>'PersonalController@changepassword']);
    Route::post('post-change-password',['as'=>'personal.post.changepassword','uses'=>'PersonalController@changePostPassword']);
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





