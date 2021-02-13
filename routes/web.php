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

Auth::routes();
//Frontend Setup Controller
Route::get('', 'HomeController@index');

//Dashboard Setup Controller
Route::get('home', 'Backend\DashboardController@index')->name('home');
//Menu Managment
Route::prefix('menu')->namespace('Backend')->group(function(){
    Route::get('view', 'MenuController@viewMenu')->name('view.menu');
    Route::get('add', 'MenuController@addMenu')->name('add.menu');
    Route::post('store', 'MenuController@storeMenu')->name('store.menu');
    Route::get('edit/{id}', 'MenuController@editMenu')->name('edit.menu');
    Route::post('update/{id}', 'MenuController@updateMenu')->name('update.menu');
    Route::get('delete/{id}', 'MenuController@deleteMenu')->name('delete.menu');
});

//Logo Managment
Route::prefix('logo')->namespace('Backend')->group(function(){
    Route::get('view', 'LogoController@viewLogo')->name('view.logo');
    Route::get('add', 'LogoController@addLogo')->name('add.logo');
    Route::post('store', 'LogoController@storeLogo')->name('store.logo');
    Route::get('edit/{id}', 'LogoController@editLogo')->name('edit.logo');
    Route::post('update/{id}', 'LogoController@updateLogo')->name('update.logo');
    Route::get('delete/{id}', 'LogoController@deleteLogo')->name('delete.logo');
});
//Slider Manage
Route::prefix('slider')->namespace('Backend')->group(function(){
    Route::get('view', 'SliderController@index')->name('slider.index');
    Route::get('add', 'SliderController@create')->name('slider.create');
    Route::post('store', 'SliderController@store')->name('slider.store');
    Route::get('edit/{slider}', 'SliderController@edit')->name('slider.edit');
    Route::post('update/{slider}', 'SliderController@update')->name('slider.update');
    Route::get('delete/{slider}', 'SliderController@destroy')->name('slider.destroy');
});
//About Section Manage
Route::prefix('about')->namespace('Backend')->group(function(){
    Route::get('view', 'AboutController@index')->name('about.index');
    Route::get('add', 'AboutController@create')->name('about.create');
    Route::post('store', 'AboutController@store')->name('about.store');
    Route::get('edit/{about}', 'AboutController@edit')->name('about.edit');
    Route::post('update/{about}', 'AboutController@update')->name('about.update');
    Route::get('delete/{about}', 'AboutController@destroy')->name('about.destroy');
});
//Services Section Manage
Route::prefix('services')->namespace('Backend')->group(function(){
    Route::get('view', 'ServicesController@index')->name('services.index');
    Route::get('add', 'ServicesController@create')->name('services.create');
    Route::post('store', 'ServicesController@store')->name('services.store');
    Route::get('edit/{services}', 'ServicesController@edit')->name('services.edit');
    Route::post('update/{services}', 'ServicesController@update')->name('services.update');
    Route::get('delete/{services}', 'ServicesController@destroy')->name('services.destroy');
});
//Project Section Manage
Route::prefix('project')->namespace('Backend')->group(function(){
    Route::get('view', 'ProjectController@index')->name('project.index');
    Route::get('add', 'ProjectController@create')->name('project.create');
    Route::post('store', 'ProjectController@store')->name('project.store');
    Route::get('edit/{project}', 'ProjectController@edit')->name('project.edit');
    Route::post('update/{project}', 'ProjectController@update')->name('project.update');
    Route::get('delete/{project}', 'ProjectController@destroy')->name('project.destroy');
});

//Contact Section Manage
Route::prefix('contact')->namespace('Backend')->group(function(){
    Route::get('view', 'ContactController@index')->name('contact.index');
    Route::post('store', 'ContactController@store')->name('contact.store');
    //Get In Touch section
    Route::get('add', 'ContactController@add')->name('contact.add');
    Route::post('save', 'ContactController@save')->name('contact.save');
    Route::get('all', 'ContactController@all')->name('contact.all');
    Route::get('edit/{contact}', 'ContactController@edit')->name('contact.edit');
    Route::post('update/{contact}', 'ContactController@update')->name('contact.update');
    Route::get('delete/{contact}', 'ContactController@destroy')->name('contact.destroy');
});
//Protfolio Section Manage
Route::prefix('protfolio')->namespace('Backend')->group(function(){
    Route::get('view', 'ProtfolioController@index')->name('protfolio.index');
    Route::get('add', 'ProtfolioController@create')->name('protfolio.create');
    Route::post('store', 'ProtfolioController@store')->name('protfolio.store');
    Route::get('edit/{protfolio}', 'ProtfolioController@edit')->name('protfolio.edit');
    Route::post('update/{protfolio}', 'ProtfolioController@update')->name('protfolio.update');
    Route::get('delete/{protfolio}', 'ProtfolioController@destroy')->name('protfolio.destroy');
});

//Comment Section Manage
Route::prefix('comments')->namespace('Backend')->group(function(){
    Route::get('view', 'CommentController@index')->name('comments.index');
    Route::get('add', 'CommentController@create')->name('comments.create');
    Route::post('store', 'CommentController@store')->name('comments.store');
    Route::get('edit/{comment}', 'CommentController@edit')->name('comments.edit');
    Route::post('update/{comment}', 'CommentController@update')->name('comments.update');
    Route::get('delete/{comment}', 'CommentController@destroy')->name('comments.destroy');
});