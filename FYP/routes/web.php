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
Route::get('/tileYourFloor',function(){
    return view('tileYourFloor');
});
Route::get('/tileFinder',function(){
    return view('tileFinder');
});
Route::get('/tiles',function(){
    return view('tiles');
});
Route::get('/sanitaryWare',function(){
    return view('sanitaryWare');
});
Route::get('/sanitaryInfo',function(){
    return view('sanitaryInfo');
});

Route::get('/tileInfo',function(){
    return view('tileInfo');
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/newService', function () {
    return view('createservice');
});


Route::get('/', function () {
    return view('welcome');
});

Route::post('/postService','HomeController@postService')->name('postService');


Route::group(['middleware' => ['web', 'auth']], function () {
Route::get('/listServices','HomeController@listServices')->name('listServices');
});
Route::post('/updateService','HomeController@updateService')->name('updateService');

Route::post('/deleteService','HomeController@deleteService')->name('deleteService');



