<?php

use App\Http\Controllers\User\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\User\OrderController as UserOrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\User\ProductController as UserProductController;
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

Route::get('/', function () {
    return view('welcome');
});

//////////////////////////

Route::get('/products', [AdminProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [AdminProductController::class, 'create'])->name('product.create')->middleware('auth:admin');
Route::put('/products/update/{id}', [AdminProductController::class, 'update'])->name('product.update')->middleware('auth:admin');
Route::get('/products/edit/{id}', [AdminProductController::class, 'edit'])->name('product.edit')->middleware('auth:admin');
Route::post('/products/store', [AdminProductController::class, 'store'])->name('product.store')->middleware('auth:admin');
Route::delete('/products/{id}', [AdminProductController::class, 'destroy'])->name('product.destroy')->middleware('auth:admin');
Route::get('/products/{id}', [AdminProductController::class, 'show'])->name('product.show');
Route::get('/searchAdmin', [AdminProductController::class, 'searchProduct4admin'])->name('searchAdmin');

////////////////////////////

Route::resource('/category', CategoryController::class);

///////////////////////////

Route::resource('/order', UserOrderController::class);
Route::get('/admin/order', [AdminOrderController::class, 'index'])->name('admin.order.index');

////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/product/user/{id}', [UserProductController::class, 'getproducts'])->name('get.product');
Route::get('/search', [UserProductController::class, 'searchProduct'])->name('search');

Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::get('/logout/{guard}', [CustomAuthController::class, 'logout'])->name('logout');
Route::get('/register', [CustomAuthController::class, 'registeration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name('register.user');
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login.user');
Route::get('/profile', [CustomAuthController::class, 'getProfile'])->name('profile.user');
Route::get('/home', [CustomAuthController::class, 'gethomee'])->name('home');

Route::get('/cart', [CartController::class, 'getMyCart'])->name('getMycart');
Route::post('/cart', [CartController::class, 'addToMyCart'])->name('addToMyCart');
