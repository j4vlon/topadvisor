<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ProjectsController;
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

Route::prefix('admin')->group(function (){
    Route::resource('services', ServicesController::class);
    Route::resource('subservices', SubservicesController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('members', MembersController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('contacts', ContactsController::class);
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

