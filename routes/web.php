<?php


use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\PartnerController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\SubserviceController;
use App\Http\Controllers\Front\TeamController;

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
Route::get('projects', [ProjectController::class, 'projects'])->name('projects');
Route::get('projects/{slug}', [ProjectController::class, 'project'])->name('project');
Route::get('partners', [PartnerController::class, 'partners'])->name('partners');
Route::get('articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('article/{slug}', [ArticleController::class, 'getArticle'])->name('article');
Route::get('team', [TeamController::class, 'team'])->name('team');
Route::get('team/{id}', [TeamController::class, 'member'])->name('member');
Route::post('feedback', [ContactController::class, 'feedback'])->name('feedback');




