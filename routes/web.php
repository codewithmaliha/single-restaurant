<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Auth;

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
/*-----Admin Routes----*/

Route::group(['prefix'=>'admin'],function (){

    // Login & Register Routes
    Route::get('/register',[AdminController::class,'showRegisterPage']);
    Route::post('/store-register-info',[AdminController::class,'storeRegisterInfo']);
    Route::get('/login',function(){
        if(Auth::user()->role == 'dBoy'){
            return redirect()->route('admin.dashboard');
        }
        // Create a login page Maliha NS REMOVE DD
        dd('Yoo! I am inside Login Page.');
    })->name('login');



    Route::group(['middleware' => 'auth'], function () {

        Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');

    });

});




route::get('/' ,[HomeController::class, 'index']);
