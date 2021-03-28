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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FrontHomeController@index');

Route::get('/about', 'FrontHomeController@BlogAbout');
Route::get('/contact', 'FrontHomeController@BlogContact');
Route::post('/message', 'FrontHomeController@message');

Route::get('/category/{slug}', 'FrontHomeController@BlogCategory');
Route::get('/tag/{slug}', 'FrontHomeController@BlogTag');
Route::get('/post/{slug}', 'FrontHomeController@posts');

Route::get('/Createcategory', 'categoryPagesController@index');
Route::post('/saveCategory', 'categoryPagesController@storeCategory');
Route::get('/listcategory', 'categoryPagesController@list');
Route::get('/cedit/{id}', 'categoryPagesController@edit');
Route::post('/update/{id}', 'categoryPagesController@update');
Route::get('/cview', 'categoryPagesController@cview');
Route::delete('/cdelete/{id}', 'categoryPagesController@delete');


Route::get('/create', 'TagPagesController@index');
Route::post('/save', 'TagPagesController@store');
Route::get('/list', 'TagPagesController@list');
Route::get('/edit/{id}', 'TagPagesController@edit');
Route::post('/update/{id}', 'TagPagesController@update');
Route::get('/view', 'TagPagesController@cview');
Route::delete('/delete/{id}', 'TagPagesController@delete');


Route::get('/pcreate', 'PostPagesController@create');
Route::put('/save', 'PostPagesController@store');
Route::get('/plist', 'PostPagesController@list');
Route::get('/pedit/{id}', 'PostPagesController@edit');
Route::post('/update/{id}', 'PostPagesController@update');
Route::get('/pview/{id}', 'PostPagesController@pview');
Route::delete('/pdelete/{id}', 'PostPagesController@delete');


Route::get('/user', 'UserController@index');
Route::get('/ucreate', 'UserController@create');
Route::put('/usave', 'UserController@store');
Route::get('/ulist', 'UserController@list');
Route::get('/uedit/{id}', 'UserController@edit');
Route::post('/uupdate/{id}', 'UserController@update');
Route::get('/uview/{id}', 'UserController@view');
Route::delete('/udelete/{id}', 'UserController@destroy');

Route::get('/profile', 'UserController@profile');
Route::post('/proupdate', 'UserController@proUpdate');


Route::get('/setting', 'SettingTableController@edit');
Route::put('/update', 'SettingTableController@update');


Route::get('/contactpage', 'ContactPagesController@showContact');

Auth::routes();

Route::get('/home', 'HomeController@index');
