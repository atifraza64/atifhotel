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
	Route::get('admin/login','admin\pagesController@login')->name('admin.login');
	Route::post('admin/login/check','admin\pagesController@login_check')->name('admin.logini');
     ////---------------------Admin side--------------------////
    Route::prefix('admin')->middleware('admin')->namespace('admin')->group(function(){
	        ////---------------------Login--------------------////
	        
	        ////---------------------Dashboard--------------------////	
			Route::get('dashboard','pagesController@dashboard')->name('admin.dashboard');
			////---------------------Bookings--------------------////
			Route::get('edit_customers','pagesController@edit_customers')->name('admin.edit_customers');
			Route::get('customers','pagesController@customers')->name('admin.customers');
			Route::get('add_customers','pagesController@add_customers')->name('admin.add_customers');
	        ////---------------------customers--------------------//// 
			Route::get('booking','pagesController@booking')->name('admin.booking');
			Route::get('edit_booking','pagesController@edit_booking')->name('admin.edit_booking');
			Route::get('add_booking','pagesController@add_booking')->name('admin.add_booking');
			////---------------------rooms--------------------//// 
			Route::get('rooms','pagesController@rooms')->name('admin.rooms');
			Route::get('edit_rooms','pagesController@edit_rooms')->name('admin.edit_rooms');
			Route::get('add_rooms','pagesController@add_rooms')->name('admin.add_rooms');
			////---------------------settings--------------------//// 
			Route::get('settings','pagesController@settings')->name('admin.settings');
			Route::get('price','pagesController@price')->name('admin.price');


			// Route::get('rooms',function(){
			// 	return "rooms";
			// });
	});

	Route::prefix('customer')->middleware('auth')->namespace('customer')->group(function(){
		Route::get('dashboard','pagesController@dashbaord')->name('customer.dashboard');
		Route::get('accounts','accountsController@dashboard')->name('accounts.dashboard');
		Route::get('reservation','reservationController@dashboard')->name('reservation.dashboard');
		Route::get('profile','profileController@dashboard')->name('profile.dashboard');
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

		Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');