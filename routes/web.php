<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [AdminController::class, 'index'])->name('admin.index');
Route::get('/register', [AdminController::class, 'registerpage'])->name('admin.registerpage');
Route::post('/adminlogin', [AdminController::class, 'authenticate'])->name('admin.login');
Route::post('/adminregister', [AdminController::class, 'register'])->name('admin.register');

Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/manage_brand', [BrandController::class, 'index'])->name('admin.manage_brand');

Route::post('/manage_brand/create', [BrandController::class, 'create'])->name('admin.manage_brand.create');

Route::get('/manage_brand/{id}/', [BrandController::class, 'index'])->name('admin.manage_brand.edit');

Route::patch('/manage_brand/update/{id}', [BrandController::class, 'update'])->name('admin.manage_brand.update');

Route::get('/manage_brand/delete/{id}', [BrandController::class, 'delete'])->name('admin.manage_brand.delete');

Route::get('/manage_category', [CategoryController::class, 'index'])->name('admin.manage_category');

Route::post('/manage_category/add', [CategoryController::class, 'add'])->name('admin.manage_category.add');

Route::get('/manage_category/{id}/', [CategoryController::class, 'index'])->name('admin.manage_category.edit');

Route::patch('/manage_category/update/{id}', [CategoryController::class, 'update'])->name('admin.manage_category.update');

Route::get('/manage_category/delete/{id}', [CategoryController::class, 'delete'])->name('admin.manage_category.delete');

Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
