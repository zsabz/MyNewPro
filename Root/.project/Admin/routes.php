<?php
 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Admin\Controllers\Products;

Auth::routes();

Route::get('test', function () {
    return 'this is a dashboard!';

    //   return view('/Admin/blogs/user');
    // return view('::index');

});

Route::get('db', function () {
    return "123";
});

// Route::middleware(['auth', Admin\Http\Middleware\AdminGuard::class])->group(function () {
    // Route::get('/dashbord', function () {
        Route::get('/y', '\Admin\Test\@f');
        //     return view('views::products.index');
        // })->name('home');
        
        Route::get('/active', 'Admin\PublicController@active');
        Route::get('/search', 'Admin\SearchController@search');
    Route::resource('/dashbord', 'Admin\HomeController');
    Route::resource('/coment', 'Admin\ComentController');
    Route::resource('/product/key', 'Admin\KeywordController');
    Route::resource('/product', 'Admin\ProductController');
    Route::get('/productShow', 'Admin\ProductController@showall');
    Route::resource('/addCategory', 'Admin\CategoryController');
    Route::resource('/user', 'Admin\UserController');
    Route::resource('/slider', 'Admin\SliderController');
    Route::resource('/upload', 'Admin\SliderController@upload');
    Route::delete('/home', 'Admin\HomeController@destroy');
    Route::resource('/dash', 'Admin\HomeController');
    
    Route::resource('/addProduct', 'Admin\ProductController');
    // Route::get('login','Auth\LoginController@login');
    Route::get('reg', 'Auth\LoginController@showregister');
    
    // Route::post('/setNewProducts',[SetProducts::class, 'setNewProducts']);
    Route::post('/setNewProducts', 'Admin\SetProducts@setNewProducts');
    
    Route::post('/addCategory', 'Admin\CategoryController@store');
    Route::resource('/stati', 'Admin\StatiController');



    Route::resource('/blog', 'Admin\blog\blogController');
// });
Route::get('master', function () {
    return view('views::products.index');
});
