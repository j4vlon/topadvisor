<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SubservicesController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\PartnerController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\SubserviceController;
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

Route::get('/', [FrontController::class, 'homepage']);
Route::get('contacts', [FrontController::class, 'contacts'])->name('contacts');
Route::get('services/{slug}', [ServiceController::class, 'serviceView'])->name('services');
Route::get('services/category/{slug}', [SubserviceController::class, 'subserviceView'])->name('category');
Route::get('partners', [PartnerController::class, 'partners'])->name('partners');

Route::prefix('admin')->group(function (){
    Route::resource('services', ServicesController::class);
    Route::resource('subservices', SubservicesController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('projects', ProjectsController::class);
    Route::resource('members', MembersController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('contacts', ContactsController::class);
});


