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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::match(['get', 'post'], '/admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Index Page
Route::get('/', 'IndexController@index');

// Category/Listing Page
Route::get('/products/{url}','ProductsController@products');

// Product Detail Page
Route::get('/product/{id}','ProductsController@product');

// Get Product Attribute Price
Route::any('/get-product-price','ProductsController@getProductPrice');

// Cart Page
Route::match(['get', 'post'],'/cart','ProductsController@cart');

// Add to Cart Route
Route::match(['get', 'post'], '/add-cart', 'ProductsController@addtocart');

// Delete Product from Cart Route
Route::get('/cart/delete-product/{id}','ProductsController@deleteCartProduct');

// Update Product Quantity from Cart
Route::get('/cart/update-quantity/{id}/{quantity}','ProductsController@updateCartQuantity');

Route::group(['middleware' => ['auth']],function(){
	Route::get('/admin/dashboard','AdminController@dashboard');	
	Route::get('/admin/settings','AdminController@settings');
	Route::get('/admin/check-pwd','AdminController@chkPassword');
	Route::match(['get','post'],'/admin/update-pwd','AdminController@updatePassword');

	// Categories Routes (Admin)
	Route::match(['get','post'],'/admin/add-category','CategoryController@addCategory');
	Route::match(['get','post'],'/admin/edit-category/{id}','CategoryController@editCategory');
	Route::match(['get','post'],'/admin/delete-category/{id}','CategoryController@deleteCategory');
	Route::get('/admin/view-categories','CategoryController@viewCategories');

	// Products Routes
    Route::match(['get','post'],'/admin/add-product','ProductsController@addProduct');
    Route::match(['get','post'],'/admin/edit-product/{id}','ProductsController@editProduct');
	Route::match(['get','post'],'/admin/delete-product/{id}','ProductsController@deleteProduct');
	Route::match(['get','post'],'/admin/delete-product-image/{id}','ProductsController@deleteProductImage');
	Route::get('/admin/delete-alt-image/{id}', 'ProductsController@deleteAltImage');
    Route::get('/admin/view-products','ProductsController@viewProducts');
    
    // Products Attributes
	Route::match(['get','post'],'/admin/add-attributes/{id}','ProductsController@addAttributes');
	Route::match(['get','post'],'/admin/edit-attributes/{id}','ProductsController@editAttributes');
	Route::match(['get','post'],'/admin/add-images/{id}','ProductsController@addImages');
	Route::get('/admin/delete-attribute/{id}', 'ProductsController@deleteAttribute');

});


Route::get('/logout','AdminController@logout');



