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


Route::get('/','Index\BandungController@index');
Route::get('/search','IndexController@search')->name('bandung.search');
Route::GET('/branch/{branch}','Owner\BranchController@show')->name('bandung.show');
Route::GET('/jakarta/branch/{branch}','Owner\BranchController@show')->name('jakarta.show');
Route::GET('/surabaya/branch/{branch}','Owner\BranchController@show')->name('surabaya.show');
Route::post('/review/{branchId}' , ['uses' => 'ReviewController@store' , 'as' => 'review.store']);
Route::DELETE('review/{review}','ReviewController@destroy')->name('review.destroy');
Route::get('/jakarta','Index\BandungController@index2');
Route::get('/jakarta/search','IndexController@search2')->name('jakarta.search');
Route::get('/surabaya','Index\BandungController@index3');
Route::get('/surabaya/search','IndexController@search3')->name('surabaya.search');


//User Route
Route::GET('user/{user}/edit','User\UserController@edit')->name('user.edit');
Route::resource('user','User\UserController');
//Owner Route
Route::get('owner','Owner\CompanyController@index');
Route::get('owner/company/unownedcompany','Owner\CompanyController@unowned');
Route::get('owner/company/search','Owner\CompanyController@search');
Route::resource('owner/company','Owner\CompanyController');
Route::get('owner/branch/unowned','Owner\BranchController@unowned');
Route::get('/owner/branch/search','Owner\BranchController@search');
Route::resource('owner/branch','Owner\BranchController');
Route::get('owner/brand/search','Owner\BrandController@search');
Route::resource('owner/brand', 'Owner\BrandController', [
    'as' => 'owner'
]);


//Admin Route
Route::get('admin/company/search','CompanyController@search');
Route::resource('admin/company', 'CompanyController');
Route::get('admin/brand/search','BrandController@search');
Route::resource('admin/brand', 'BrandController');
Route::get('admin/branch/search','BranchController@search');
Route::resource('admin/branch', 'BranchController');
Route::get('admin/userlist/search','UserController@search');
Route::resource('admin/userlist','UserController');




Auth::routes();

Route::get('/logout', 'HomeController@index')->name('home');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');
Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::POST('admin/register','Admin\RegisterController@register');
Route::GET('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
