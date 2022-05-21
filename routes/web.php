<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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

Route::redirect('/', '/en');

Route::get('/en', function (Request $request) {
    App::setLocale('en');
    return view('welcome');
});
Route::get('/ua', function (Request $request) {
    App::setLocale('ua');
    return view('welcome');
});
