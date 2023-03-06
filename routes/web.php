<?php


use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\PartnerController;
use App\Http\Controllers\Front\ProjectController;
use App\Http\Controllers\Front\ServiceController;
use App\Http\Controllers\Front\SubserviceController;
use App\Http\Controllers\Front\TeamController;

use App\Http\Controllers\Front\UsefulInformationController;
use App\Http\Controllers\XMLReaderController;
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

Route::match(['get', 'post'],'/', [FrontController::class, 'homepage']);
Route::get('contacts', [FrontController::class, 'contacts'])->name('contacts');
//Route::get('services', [ServiceController::class, 'index'])->name('services');
Route::get('services/{slug}', [ServiceController::class, 'serviceView'])->name('services');
Route::get('services/category/{slug}', [SubserviceController::class, 'subserviceView'])->name('category');
Route::get('projects', [ProjectController::class, 'projects'])->name('projects');
Route::get('projects/{slug}', [ProjectController::class, 'project'])->name('project');
Route::get('partners', [PartnerController::class, 'partners'])->name('partners');
Route::match(['get', 'post'],'articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('article/{slug}', [ArticleController::class, 'getArticle'])->name('article');
Route::get('team', [TeamController::class, 'team'])->name('team');
Route::get('team/{id}', [TeamController::class, 'member'])->name('member');
Route::post('feedback', [ContactController::class, 'feedback'])->name('feedback');
Route::get('/sitemap.xml', [XMLReaderController::class, 'index'])->name('sitemap.xml');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('news/{slug}', [NewsController::class, 'newsView'])->name('newsView');
Route::get('/useful-information', [UsefulInformationController::class, 'index'])->name('useful-info');
//Route::get('/success', [ContactController::class, 'success'])->name('success');




