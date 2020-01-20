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

Route::get('/','SiteController@index')->name('home');

Auth::routes();



//### Groups Route for Admin Permissions
Route::group(['prefix' =>'admin' , 'middleware' =>'auth'], function (){


});

// dashboard

Route::get('/dashboard', function() {
    return view('admin.index');
})->name('dashboard');

// USERS ROUTES

route::get('/dashboard/users', 'UsersController@index')->name('users')->middleware('admin');
route::get('/dashboard/users/create', 'UsersController@create')->name('addUser');
route::post('/dashboard/users/store', 'UsersController@store')->name('createUser');
route::get('/dashboard/users/edit/{id}', 'UsersController@edit')->name('editUser');
route::post('/dashboard/users/update/{id}', 'UsersController@update')->name('updateUser');
route::get('/dashboard/users/destroy/{id}', 'UsersController@destroy')->name('deleteUser');

// END USERS ROUTES

// CATEGRY ROUTES

Route::get('/dashboard/categories','CategoriesController@index')->name('Categories');
route::get('/dashboard/products/{id}', 'CategoriesController@show')->name('showProducts');
Route::get('/dashboard/category/create','CategoriesController@create')->name('createCategory');
Route::post('/dashboard/category/store','CategoriesController@store')->name('storeCategory');
Route::get('/dashboard/category/edit/{id}','CategoriesController@edit')->name('editCategory');
Route::post('/dashboard/category/update/{id}','CategoriesController@update')->name('updateCategory');
Route::get('/dashboard/category/delete/{id}','CategoriesController@destroy')->name('deleteCategory');
//END CATEGORY ROUTES
//PRODUCTS ROUTES
Route::get('/dashboard/products','ProductesController@index')->name('Products');
Route::get('/dashboard/product/create','ProductesController@create')->name('createProducts');
Route::post('/dashboard/product/store','ProductesController@store')->name('storeProducts');
Route::get('/dashboard/product/edit/{id}','ProductesController@edit')->name('editProducts');
Route::post('/dashboard/product/update/{id}','ProductesController@update')->name('updateProducts');
Route::get('/dashboard/product/delete/{id}','ProductesController@destroy')->name('deleteProducts');

//END PRODUCTS ROUTES

//start Site Routes
Route::get('/fashionable','SiteController@index')->name('mainsite');
Route::get('/fashionable/products/{id}', 'SiteController@showCategoryProducts')->name('showCategoryProducts');
//
// Customers
Route::get('/dashboard/Customers','ContactController@create')->name('contact');
Route::post('/dashboard/Customers','ContactController@store')->name('storeContact');
Route::get('/dashboard/Customers/messages','ContactController@index')->name('liveMail');


//Cart
Route::get('/Cart','ProductesController@cart')->name('cart');
Route::get('/addCart/{id}','ProductesController@addToCart')->name('addCart');
Route::get('/deleteCart/{id}','ProductesController@deleteCart')->name('deleteCart');
Route::get('/layout/carts','ProductesController@layout')->name('layout');


//Menu Routes

Route::get('/about',function() {
    return view('layouts.include.about');
})->name('about');

//Route::get('/fachion/items',function () {
//    return view('layouts.include.fachionitem');
//})->name('fashion.item');
