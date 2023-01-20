<?php

use App\Http\Controllers\Admin\ViewController;
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

Route::get('/', function () {
    return view('front.homepage');
});
Route::get('contacts', function(){
    return view('front.contacts');
});
Route::get('dashboard', [ViewController::class, 'index'])->name('dashboard');


