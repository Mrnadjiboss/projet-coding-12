<?php

use Illuminate\Support\Facades\Route;
use App\Testimonials;
use App\Contacts;
use App\Header;
use App\Works;



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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('header', 'HeaderController');
Route::resource('testomonial', 'TestimonialsController');
Route::resource('contact', 'ContactsController');
Route::resource('work', 'WorksController');
Route::resource('avantage', 'HeaderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
