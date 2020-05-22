<?php

use Illuminate\Support\Facades\Route;
use App\Testimonials;
use App\Contacts;
use App\Header;
use App\Works;
use App\Avantages;



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
    $works = Works::all();
    $headers = Header::all();
    $contacts = Contacts::all();
    $testimonials = Testimonials::all();
    $avantages = Avantages::all();
    return view('welcome', compact('works', 'headers', 'contacts', 'testimonials', 'avantages'));
});

Route::get('/backoffice', function () {
    $works = Works::all();
    $headers = Header::all();
    $contacts = Contacts::all();
    $testimonials = Testimonials::all();
    $avantages = Avantages::all();
    return view('backoffice', compact('works', 'headers', 'contacts', 'testimonials', 'avantages'));
});
Route::resource('header', 'HeaderController');
Route::resource('testomonial', 'TestimonialsController');
Route::resource('contact', 'ContactsController');
Route::resource('work', 'WorksController');
Route::resource('avantage', 'HeaderController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
