<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as Category;
use App\Http\Controllers\ChartController as Chart;
use App\Http\Controllers\DetailController as Detail;
use App\Http\Controllers\ChartController as Dashboard;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth', 'verified')->group(function () {

    Route::get('/dashboard', [Chart::class, 'index'])->name('dashboard');

    Route::get('/categories', [Category::class, 'index'])->name('categories');
    Route::get('/category/create', [Category::class, 'create'])->name('category.create');
    Route::post('/category/store', [Category::class, 'store'])->name('category.store');
    Route::get('/category/edit/{slug}', [Category::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{slug}', [Category::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{slug}', [Category::class, 'delete'])->name('category.delete');

    Route::get('/category-detail/{slug}', [Detail::class, 'index'])->name('category-detail');
    Route::get('/category-detail/create/{slug}', [Detail::class, 'create'])->name('category-detail.create');
    Route::post('/category-detail/store/{slug}', [Detail::class, 'store'])->name('category-detail.store');
    Route::get('/category-detail/edit/{slug}', [Detail::class, 'edit'])->name('category-detail.edit');
    Route::put('/category-detail/update/{slug}', [Detail::class, 'update'])->name('category-detail.update');
    Route::delete('/category-detail/delete/{slug}', [Detail::class, 'delete'])->name('category-detail.delete');

    Route::get('/users', [Dashboard::class, 'index'])->name('users');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/category/detail/{id}', [Category::class, 'detail'])->middleware('auth', 'verified')->name('category.detail');
Route::get('/category/detail/article/{slug}', [Category::class, 'article'])->middleware('auth', 'verified')->name('category.detail.article');

require __DIR__ . '/auth.php';
