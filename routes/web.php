<?php

use App\Http\Controllers\Admin\ComicController as AdminComicController;
use App\Http\Controllers\Guests\ComicController;
use App\Http\Controllers\Guests\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');


Route::get('/comics', [ComicController::class, 'index'])->name('guests.comics.index');
Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('guests.comics.show');
/* TODO: Other static pages */
Route::get('/characters', [PageController::class, 'characters'])->name('characters');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/fans', [PageController::class, 'fans'])->name('fans');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');

/* CRUD OPERATIONS */
Route::get('/admin/comics', [AdminComicController::class, 'index'])->name('admin.comics.index');
Route::get('/admin/comics/create', [AdminComicController::class, 'create'])->name('admin.comics.create');
Route::post('/admin/comics/', [AdminComicController::class, 'store'])->name('admin.comics.store');
Route::get('/admin/comics/{comic}', [AdminComicController::class, 'show'])->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', [AdminComicController::class, 'edit'])->name('admin.comics.edit');
Route::put('/admin/comics/{comic}', [AdminComicController::class, 'update'])->name('admin.comics.update');
Route::delete('/admin/comics/{comic}', [AdminComicController::class, 'destroy'])->name('admin.comics.delete');
