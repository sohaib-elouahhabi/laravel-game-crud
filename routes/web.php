<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\categoryController;

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
    redirect('/categories');
});

Route::get('categories',[categoryController::class,'index'])->name('listOfCategories');
Route::post('/categories/save',[categoryController::class,'store'])->name('addCategories');
Route::get('/categories/create',[categoryController::class,'create'])->name('createCategory');
Route::get('/categories/edit/{id}',[categoryController::class,'edit'])->name('editCategory');
Route::put('/categories/update/{id}',[categoryController::class,'update'])->name('updateCategory');
Route::delete('/categories/delete/{id}',[categoryController::class,'delete'])->name('deleteCategory');


Route::get('/admin', function () {
    return view('dashboard');
});

