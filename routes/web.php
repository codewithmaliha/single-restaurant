<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\MenuController;
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
    Route::get('/login',[AdminController::class,'showloginPage']);
    Route::post('/verify-login',[AdminController::class,'verifyloginPage']);
    Route::get('/register',[AdminController::class,'showRegisterPage']);
    Route::post('/store-register-info',[AdminController::class,'storeRegisterInfo']);

    Route::get('/logins',function(){
        if(Auth::user()){
            return redirect()->route('admin.admintabs.dashboard');
        }else{
            // Create a login page Maliha NS REMOVE DD
            return redirect()->to('/login');
        }
    })->name('login');



    Route::group(['middleware' => 'auth'], function () {

        Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
        Route::get('menu', [MenuController::class,'menu']);
        Route::get('edit-menu/{id}', [MenuController::class,'edit']);
        Route::get('show-menu', [MenuController::class,'showmenu'])->name('admin.addmenu');
        Route::post('store-menu', [MenuController::class,'storemenu']);

    });

});


route::get('/' ,[HomeController::class, 'index']);
