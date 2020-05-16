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

Route::get('/', 'User@index');

Route::get('login', function(){
	return view('login');
})->name('show_login');

Route::get('welcome_test', function(){
	return view('login');
})->name('welcome_route');

Route::get('signup_test',function(){
	return view('signup');
})->name('signup_route');

Route::get('home', function(){
	return view('main');
});

Route::get('create/account', function(){
	return view('CreateAccount');
})->name('create_account');

Route::post('create_student','Student@create_student')->name('create_student');

Route::get('add/credit', function(){
	return view('add_credit');
})->name('show_add_cred');
Route::post('add_credit','addcred@add_credit')->name('add_credit');

Route::get('view','View@view_acc')->name('view');

Route::get('add/transaction', function(){
	return view('transaction');
});
Route::post('transaction', 'Transaction@add_transaction')->name('add_trans');

Route::view('main','main');

Route::post('login','Login@index')->name('login');

Route::get('view/transactions', 'Transaction@view_transactions')->name('view_transactions');

Route::get('del', 'delete@del')->name('delete');

Route::get('mini', function(){
	return view('MiniStatement');
})->name('mini');

Route::get('balance_month', function(){
	return view('BalancePerMonth');
})->name('bpm');

Route::get('balance_year', function(){
	return view('BalancePerYear');
})->name('bpy');

Route::get('termsandconditions', function(){
	return view('TermsAndConditions');
})->name('tAc');

Route::get('privacypolicy', function(){
	return view('PrivacyPolicy');
})->name('Pp');