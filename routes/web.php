<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\Check;

Route::view('/','register');
Route::post('/get-register-info',[UserController::class,'make_registration'])->name('get-register-info');
Route::view('/login-page','login')->name('login-page');
Route::post('/get-login-info',[UserController::class,'make_login'])->name('get-login-info');
Route::view('/welcome','welcome')->name('welcome-page');
Route::post('/insert',[UserController::class,'insertData']);
Route::get('/all',[UserController::class,'getData'])->name('all');
Route::get('/update/{id}',[UserController::class,'updatePage'])->name('updateUser');
Route::post('/update2/{id1}',[UserController::class,'updateUser'])->name('update2');
Route::get('/delete/{id2}',[userController::class,'deleteUser'])->name('deleteUser');


?>