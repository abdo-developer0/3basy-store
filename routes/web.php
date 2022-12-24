<?php

use App\Custom\Auth;
use App\Http\Controllers\ChatroomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\RegisterConroller;
use App\Http\Controllers\LoginConroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/',  [HomeController::class, 'index'] )->name('home');


Route::get('/login',  [LoginConroller::class, 'showLoginForm'])->name('login');
Route::post('/authenticate', [LoginConroller::class, 'login'])->name('authenticate');
Route::get('/logout',    [LoginConroller::class, 'logout'])->name('logout');

Route::get('/register',      [RegisterConroller::class, 'showRegisterForm'])->name('register');
Route::post('/registration', [RegisterConroller::class, 'register'])->name('registration');


Route::get('/order/{id}/create',    [OrderController::class, 'create'] )->name('order.create');
Route::get('/order/{id}/store', [OrderController::class, 'store'] )->name('order.store');

Route::get('/order/{id}/chatroom', [ChatroomController::class, 'index'] )->name('chatroom');
Route::post('/order/{id}/send-message', [ChatroomController::class, 'index'] )->name('chatroom.storeMessage');

Route::get('/myorders',[OrderController::class,'showMyOrders'])->name('my-order');

Route::prefix('/dashbord')->group(function() {

    Route::get('/items', [ItemController::class, 'index'])->name('item.index');
    Route::get('/item/create', [ItemController::class, 'create'] )->name('item.create');
    Route::post('/item/create', [ItemController::class, 'store'] )->name('item.store');
    Route::get('/item/{id}/edit', [ItemController::class, 'edit'] )->name('item.edit');
    Route::post('/item/{id}/edit', [ItemController::class, 'update'] )->name('item.update');
    Route::post('/item/{id}/delete', [ItemController::class, 'destroy'] )->name('item.destroy');

    
    Route::get('/',      [DashbordController::class, 'index'])->name('dashbord');
    Route::get('/orders', [DashbordController::class, 'showOrders'])->name('dashbord.orders');
    Route::get('/users', [DashbordController::class, 'showUsers'])->name('dashbord.users');

});