<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\HallsController;
use App\Http\Controllers\Dashboard\ServicesController;
use App\Http\Controllers\Dashboard\ProfileUserController;
use App\Http\Controllers\Dashboard\HallServicesController;



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

Route::get('/', [HomeController::class,'index'])->middleware('auth');
Route::group([
    'prefix' => '/dashboard',
    'as' => 'dashboard.',
    'namespace' => 'Dashboard',
    'middleware' => ['auth'],

],function(){
    Route::get('/', [DashboardController::class,'index'])->name('index');
    Route::resource('/hall', 'HallsController')->names('hall');
    Route::resource('/service', 'ServicesController')->names('service')->middleware('auth.admin');
    Route::post('/hall/{product}/changeStatus', [HallsController::class, 'changeStatus'])
        ->name('hall.changeStatus')->middleware('auth.admin');
    Route::resource('/HallService', 'HallServicesController')->names('HallService');

});

require __DIR__.'/auth.php';
