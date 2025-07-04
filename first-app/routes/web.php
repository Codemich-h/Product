<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;

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

//Login Route
// Route::get('/', function() {
//     return view('auth.login'); 
// });
// Route::get('/login', [AuthController::class, 'showLogin'])->name('login.account');
// // Register Post Routes
// Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route::controller(AuthController::class)->group(function () {
//     Route::get('/login',  'showLogin')->name('login.account');
//     Route::post('/login', 'login')->name('login');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('create.account');
    Route::get('/register', 'showRegister')->name('create.account');
    Route::get('/', 'index')->name('home.index');
    Route::get('/about', 'about')->name('home.about');
    Route::get('/contact', 'contact')->name('home.contact');
    Route::get('/profile', 'profile')->name('home.profile');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'show')->name('show.product');
    Route::get('/add/product', 'add')->name('home.add.product');
    Route::post('/store/product', 'store')->name('store.product');
    Route::get('/product/{id}/view', 'view')->name('view.product');
    Route::get('/product/{id}/edit', 'edit')->name('edit.product');
    Route::put('/product/{id}/update', 'update')->name('update.product');
    Route::get('/product/{id}/delete', 'delete')->name('delete.product');
    Route::get('/product/search', 'search')->name('product.search');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/cart/index', 'index')->name('cart.index');
    Route::post('/cart/add/{id}', 'add')->name('cart.add');
    Route::get('/cart/delete', 'delete')->name('cart.delete');
    Route::get('/cart/purchase', 'purchase')->name('cart.purchase');
});

Route::controller(OrderController::class)->group(function (){
    Route::get('/orders/order', 'orders')->name('orders.order');
});

Route::get('/product/{id}', [ProductController::class, 'store']);

require __DIR__ . '/auth.php';