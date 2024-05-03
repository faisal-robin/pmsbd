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
Route::get('/', 'Front\FrontController@index');
Route::get('about-us', 'Front\FrontController@about_us');
Route::get('ports', 'Front\FrontController@ports');
Route::get('product-list', 'Front\FrontController@product_list');
Route::get('details/{any}', 'Front\FrontController@product_details');
Route::get('product-quotation', 'Front\FrontController@product_quotation');
Route::get('contact', 'Front\FrontController@contact');
Route::post('quotation_request', 'Front\FrontController@quotation_request');
Route::get('page/{any}', 'Front\FrontController@page');
Route::get('pdf', 'Front\FrontController@pdf');
Route::get('get_category_wise_product', 'Front\FrontController@get_category_wise_product');
Route::post('contact-details', 'Front\FrontController@contact_details');
Route::get('load-slider', 'Front\FrontController@load_slider');
Route::get('load-product', 'Front\FrontController@load_product');

Route::get('/admin', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Authentication Routes...
    Route::resource('sliders', 'SliderController');
    Route::resource('company', 'CompanyController');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('/sub_category','SubCategoryController');
    Route::resource('/customer','CustomerController');
    Route::post('customer-list', 'CustomerController@customer_list');
    //Users
    Route::post('user-list', 'UserController@user_list');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('brands', 'BrandController');
    //Attributes
    Route::resource('attributes', 'AttributeController');
    //Get Attribute Group By Id
    Route::post('fetch-attribute-group/{any}', 'AttributeController@fetch_attribute_group');
    //Delete Attribute  By Id
    Route::delete('delete-attribute/{any}', 'AttributeController@delete_attribute');
    //update Attribute By Id
    Route::post('attributes-update/{any}', 'AttributeController@attributes_update');

    Route::resource('products', 'ProductController');
    Route::post('products/upload', 'ProductController@upload')->name('products.upload');
    Route::get('get-products', 'ProductController@get_products');
    Route::get('get-product-by-id', 'ProductController@get_product_by_id');
     //Upload Summernote Image
    Route::post('summurnote-image-upload', 'AttributeController@summurnote_image_upload');
    Route::resource('units', 'UnitController');
    Route::resource('pos','PosController');
    //Role & Permission
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('pages', 'PageController');
});

