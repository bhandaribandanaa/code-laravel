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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
   
    return view('layouts.master');
});

// Route::get('/', function () { 
//     return view('register.blade');
// });

// Route::post('/', 'RegisterController');

Route::get('/', 'UserRegisterController@create')->name('registerformget');
Route::post('/', 'UserRegisterController@store')->name('registerformpost');

# Tasks
# 1. Change the Controller
# 2. Implement the Controller
# 3. Inside the implementation, do the following:-
# a. Open the contacts.csv file in read mode
# b. Send the data to the view and template
# c. Render the data as table
Route::get('/listtable', 'ListController@create')->name('listtable');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
