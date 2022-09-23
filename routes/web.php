<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



route::get('/',[HomeController::class, 'index']);

route::get('/redirects',[HomeController::class, 'redirects']);

route::get('/deletemenu/{id}',[AdminController::class, 'deletemenu']);

route::get('/updateview/{id}',[AdminController::class, 'updateview']);

route::post('/update/{id}',[AdminController::class, 'update']);

route::post('/reservation',[AdminController::class, 'reservation']);

route::post('/uploadchef',[AdminController::class, 'uploadchef']);

route::get('/viewreservation',[AdminController::class, 'viewreservation']);

route::get('/viewchef',[AdminController::class, 'viewchef']);

route::get('/updatechef/{id}',[AdminController::class, 'updatechef']);

route::get('/updatefoodchef/{id}',[AdminController::class, 'updatefoodchef']);

route::get('/users',[AdminController::class, 'user']);

route::get('/foodmenu',[AdminController::class, 'foodmenu']);

route::post('/uploadfood',[AdminController::class, 'upload']);

route::get('/deleteuser/{id}',[AdminController::class, 'deleteuser']);

route::get('/deletechef/{id}',[AdminController::class, 'deletechef']);

route::post('/addcart/{id}',[HomeController::class, 'addcart']);

route::get('/showcart/{id}',[HomeController::class, 'showcart']);

route::get('/remove/{id}',[HomeController::class, 'remove']);

route::post('/orderconfirm',[HomeController::class, 'orderconfirm']);

route::get('/orders',[AdminController::class, 'orders']);

route::get('/search',[AdminController::class, 'search']);






















Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
