<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('index');
})->name("view.index");

Route::get('/register', function () {
    return view('register');
});

Route::controller(Controller::class)->group(function(){ 

    Route::post('/login-process', 'loginprocess'); //login process
    Route::get('/login', 'dashboard')->name('dashboard');
    Route::get('/logout', 'logout')->name('logout');

    Route::group(['middleware' => 'auth'], function () { //System Admin authentication required
        // Route::get('/login', 'dashboard')->name('dashboard');
    });   
});