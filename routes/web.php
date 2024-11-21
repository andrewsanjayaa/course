<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController as Category;

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

Route::get('/dashboard', [Category::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/category/create', [Category::class, 'index'])->middleware(['auth', 'verified'])->name('category.create');
Route::post('/category/create', [Category::class, 'store'])->middleware(['auth', 'verified'])->name('category.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/category/detail/{id}', [Category::class, 'detail'])->middleware('auth', 'verified')->name('category.detail');

require __DIR__ . '/auth.php';
