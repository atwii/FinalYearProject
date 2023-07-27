<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/register',function(){
    return view('register');
});
Route::get('/admin', function () {
    return view('adminPanel');
});
Route::get('/adminUsers', function () {
    return view('usersAdmin');
});
Route::get('/updateUser',function () {
    return view('UpdateUser');
});
Route::get('/tilesAdmin',function () {
    return view('tilesAdmin');
});
Route::get('/updateTiles',function () {
    return view('updateTiles');
});
Route::get('/addTile',function () {
    return view('addTile');
});
Route::get('/sanitaryAdmin',function () {
    return view('sanitarywareAdmin');
});
Route::get('/updateSanitary',function () {
    return view('updateSanitary');
});
Route::get('/addSanitary',function () {
    return view('addSanitary');
});
Route::get('/servicesAdmin',function () {
    return view('servicesAdmin');
});
//Route::post('/users', [AdminController::class, 'store'])->name('CreateUser');



