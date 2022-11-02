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

Route::get('/', 'pagesController@home')->name('home');
Route::get('/about', 'pagesController@about')->name('about');
Route::get('/contact', 'pagesController@contact')->name('contact');
Route::get('/rooms', 'pagesController@rooms')->name('rooms');

Route::prefix('admin')->namespace('admin')->group(function(){
		Route::get('dashboard','pagesController@dashboard')->name('admin.dashboard');
		Route::get('rooms',function(){
			return "rooms";
		});
});

Route::prefix('customer')->namespace('customer')->group(function(){

	Route::get('dashboard','pagesController@dashbaord')->name('customer.dashboard');
	Route::get('rooms',function(){
		return "rooms";
	});
});



// Route::get('/about',function(){
//     return view('about');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });

// Route::get('/services',function(){
//     return view('services');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');