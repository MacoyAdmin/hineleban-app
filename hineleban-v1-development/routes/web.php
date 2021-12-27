<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userLogin;
use App\Http\Controllers\userRegistration;
use App\Http\Controllers\productController;
use App\Http\Controllers\UploadController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/contact', function(){
    return view('contact');
});
Route::get('/admin ', function(){
    return view('admin');
});
Route::get('/store', function(){
    return view('store');
});
Route::get('/tac', function(){
    return view('tac');
});
Route::get('/faq', function(){
    return view('faq');
});
Route::get('/product', function(){
    return view('product');
});
Route::get('/users', function(){
    return view('users');
});
Route::get('/admin/dashboard', function(){
    return view('/admin/dashboard');
});
Route::get('/admin/adduser', function(){
    return view('/admin/adduser');
});
Route::get('/admin/manageuser', function(){
    return view('/admin/manageuser');
});
Route::get('/admin/addproduct', function(){
    return view('/admin/addproduct');
});
Route::get('/admin/manageproduct', function(){
    return view('/admin/manageproduct');
});
Route::get('/admin/addstock', function(){
    return view('/admin/addstock');
});
Route::get('/admin/managestock', function(){
    return view('/admin/managestock');
});
Route::post("users", [userLogin::class,'getData']);
Route::post("users", [UploadController::class,'index']);
Route::view("welcome","welcome");
Route::post("users", [userRegistration::class,'addUser']);
Route::get("store", [ProductController::class,'GetProducts']);
Route::get("product", [ProductController::class,'getItem']);

Route::get('/logout', function () {
    if(session()->has('firstname'))
    {
        session()->pull('firstname');
        session()->pull('lastname');
        session()->pull('emailaddress');
        session()->pull('contactno');
    }
    return redirect('/home');
});