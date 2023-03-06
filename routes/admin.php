<?php

use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BenefitController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\GetSubserviceController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\InfoDirectionController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\StepController;
use App\Http\Controllers\Admin\SubservicesController;
use App\Http\Controllers\Admin\UsefulInformationController;
use App\Http\Controllers\Front\GetProjectsController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login_process', [AuthController::class, 'login'])->name('admin.login_process');

Route::middleware('auth:admin')->group(function () {
    Route::resource('services', ServicesController::class);
    Route::resource('subservices', SubservicesController::class);
    Route::resource('partners', PartnersController::class);
    Route::resource('projects', ProjectsController::class);
    Route::post('/getsubservice', [GetSubserviceController::class, 'getsubservice'])->name('getsubservice');
    Route::resource('members', MembersController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('contacts', ContactsController::class);
    Route::resource('steps', StepController::class);
    Route::resource('benefits', BenefitController::class);
    Route::resource('news', NewsController::class);
    Route::resource('information', UsefulInformationController::class);
    Route::resource('industry', IndustryController::class);
    Route::resource('info-direction', InfoDirectionController::class);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
