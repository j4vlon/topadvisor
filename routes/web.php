<?php

use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SubservicesController;
use App\Http\Controllers\Admin\ViewController;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('admin')->group(function (){
    Route::resource('services', ServicesController::class);
    Route::resource('subservices', SubservicesController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
