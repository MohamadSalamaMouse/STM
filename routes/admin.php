<?php


use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::prefix('admin')->name('Admin.')->group(function () {
   Route::middleware('isAdmin')->group(function () {

       Route::get('/dashboard',[BookController::class,'index'])->name('index');

       Route::resource('category',CategoryController::class);
       Route::resource('author',AuthorController::class);
       Route::resource('book',BookController::class);
       Route::get('borrow',[BookController::class,'borrow'])->name('book.borrow');
       Route::get('users',[UserController::class,'index'])->name('users');
       Route::post('search',[UserController::class,'search'])->name('search');
   });
    Route::middleware('auth:Admin')->group(function () {
        Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
    });
    require __DIR__.'/admin_auth.php';

});
