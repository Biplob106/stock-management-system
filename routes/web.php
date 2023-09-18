<?php

use App\Http\Controllers\CatergoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/logout',[ProfileController::class,'adminlogout'])->name('admin.logout');
});

/*
Category Routes

 */
Route::middleware('auth')->group(function () {
    Route::get('/category/index',[CatergoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CatergoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CatergoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}',[CatergoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}',[CatergoryController::class,'update'])->name('category.update');
    Route::get('/category/delete/{id}',[CatergoryController::class,'delete'])->name('category.delete');
    Route::get('/category/{id}',[CatergoryController::class,'show'])->name('category.show');
});


/*
Products  Routes

 */

 Route::middleware('auth')->group(function () {
    Route::get('/products/index',[ProductController::class,'index'])->name('product.index');
    Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
    Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
    Route::get('/products/show/{id}',[ProductController::class,'show'])->name('product.show');
    Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{id}',[ProductController::class,'update'])->name('product.update');
    Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');


});





require __DIR__.'/auth.php';


