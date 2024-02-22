<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FutureController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashController;
use App\Http\Controllers\AboutController;




Route::get('/list', [HomeController::class, 'getStudents'])->name('list');






// Route::get('/asset_class_list_ajax',[HomeController::class,'asset_class_list_ajax'])->name('asset_class_list_ajax');

Route::get('/about',[AboutController::class,'re'])->name('about');

Route::get('/home',[HomeController::class,'new'])->name('home');
Route::post('/home_type_store',[HomeController::class,'save'])->name('home_type_store');
Route::post('/list_type_store',[HomeController::class,'save'])->name('list_type_store');

Route::get('/list_view/{id}',[HomeController::class,'view'])->name('list_view');
Route::get('/edit_list/{id}',[HomeController::class,'edit'])->name('edit_list');
Route::get('/delete_list/{id}',[HomeController::class,'del'])->name('delete_list');


Route::get('/contact',[ContactController::class,'re'])->name('contact');
Route::post('/contact_type_store',[ContactController::class,'save'])->name('contact_type_store');




Route::get('/future',[FutureController::class,'re'])->name('future');
Route::post('future_type_store',[FutureController::class, 'save'])->name('future_type_store');




Route::get('/register',[RegisterController::class,'re'])->name('register');
Route::post('register_type_store',[RegisterController::class, 'save'])->name('register_type_store');
Route::get('/register_list',[RegisterController::class,'li'])->name('register_list');



//Route::post('/authenticate', [LoginController::class, 'index'])->name('authenticate');
// Route::get('/login',[LoginController::class,'re'])->name('login');
// Route::get('/Logout',[LoginController::class,'re'])->name('Logout');
// Route::get('/Login',[LoginController::class,'re'])->name('Login');

Route::get('/dashboard',[DashController::class,'re'])->name('dashboard');

Route::get('/welcome',[RegisterController::class,'wel'])->name('welcome');





Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



Route::get('registration_list', [AuthController::class, 'dex'])->name('registration_list');
Route::get('/registration_view/{id}',[AuthController::class,'view'])->name('registration_view');
Route::get('/edit_registration/{id}',[AuthController::class,'edit'])->name('edit_registration');
Route::get('/delete_registration/{id}',[AuthController::class,'del'])->name('delete_registration');