<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use App\Models\Customer;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});
 
Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});
 
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);

    //Search and filter Showcase

    Route::get('products/{id}/show1',[ProductController::class,'show1']);
    Route::get('/index1', [ProductController::class,'index1'])->name('products.index1');
    //

    //Contract Paper
    Route::get('customers/{id}/show2',[CustomerController::class,'show2']);
    Route::post('customers/store', [CustomerController::class,'store2'])->name('customers.store');
    //

    //payment
    Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
    Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
    Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
    //

    

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


//Backend Routes Starts
Route::get('login/admin',[AdminController::class,'adminLoginForm'])->name('admin.login.form');
Route::post('admin-login',[AdminController::class,'adminLogin'])->name('admin.login');


Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard',[DashboardController::class,'adminDashboard'])->name('admin.dashboard');
    
    // Admin CRUD Starts
    Route::get('/add', [ProductController::class,'index'])->name('products.index');
    Route::get('products/create', [ProductController::class,'create'])->name('products.create');
    Route::post('products/store', [ProductController::class,'store'])->name('products.store');
    Route::get('products/{id}/edit',[ProductController::class,'edit']);
    Route::put('products/{id}/update',[ProductController::class,'update']);
    //Route::get('products/{id}/delete',[ProductController::class,'destroy']);
    Route::delete('products/{id}/delete',[ProductController::class,'destroy']);
    Route::get('products/{id}/show',[ProductController::class,'show']);
    // 

    //records
    Route::get('/records', [CustomerController::class,'index2'])->name('customers.index2');
    //

    Route::get('admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');
});
// Backend Routes Finishes




