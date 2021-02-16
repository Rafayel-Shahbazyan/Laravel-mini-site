<?php
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/contact/submit', function (Request $request) {
//     dd($request->all());
// })->name('contact-form');

// Route::post('/contact/submit', [
//     "middleware" => 'validate',
//     "uses" => "ContactController@submit"
// ])->name('contact-form');

Route::post('/contact/submit','ContactController@submit' )->name('contact-form');

Route::get('/contact/all','ContactController@allData' )->name('contact-data');





