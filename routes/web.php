<?php

use App\Http\Controllers\Admin\AdvertisementController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\CovidController;
use App\Http\Controllers\Admin\CovidInfoController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Models\CovidInfo;

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

Route::get("/", [PagesController::class,'index']) ;
Route::get("/get", [PagesController::class,'get']) ;

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function(){
    Route::get('dashboard', function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resource('messages', MessagesController::class);
    Route::resource('covidInfos', CovidController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('advertisements', AdvertisementController::class);
    Route::resource('users', UserController::class);
    Route::resource('comments', CommentController::class);
    Route::resource('blogs', BlogController::class);

    

});


require __DIR__.'/auth.php';