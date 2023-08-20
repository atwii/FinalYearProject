<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RetailCustomer;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/check-auth', function () {
    return Auth::check() ? 'Authenticated' : 'Not Authenticated';
});

Route::group(['middleware' => ['auth:sanctum']], function(){
Route::post('logout', [UserController::class, 'logoutUser'])->name('logout');

Route::get('/getUser', [UserController::class, 'getUser'])->name('getUser');

Route::get('/getUserProfile', [UserController::class, 'getUserProfile'])->name('getUserProfile');

Route::get('/displayBids/{service}', [HomeController::class, 'displayBids'])->name('displayBids');

Route::get('/getOrderDetails/{orderId}', [OrderController::class, 'getOrderDetails'])->name('getOrderDetails');

Route::put('/updateReceivalTime/{orderId}', [OrderController::class, 'updateReceivalTime']);

Route::get('/getOrders', [OrderController::class, 'getOrders'])->name('getOrders');

Route::get('/proReveal/{id}', [HomeController::class, 'proReveal'])->name('proReveal');

Route::delete('/bidDelete/{id}', [HomeController::class, 'deleteBid'])->name('deleteBid');

Route::post('/calculate', [HomeController::class, 'calculate'])->name('calculate');

Route::post('/report-problem', [HomeController::class, 'reportProblem'])->name('report-problem');

Route::post('/favorite', [HomeController::class, 'favorite'])->name('favorite');

Route::get('/isFavorite/{type}', [HomeController::class, 'isFavorite'])->name('isFavorite');

Route::post('/deleteFavorite', [HomeController::class, 'deleteFavorite'])->name('deleteFavorite');



});
Route::post('/auth/register', [UserController::class, 'UserRegistration']);

Route::post('/auth/login', [UserController::class, 'Login']);


Route::get('/addTile', [AdminController::class, 'showAllTiles'])->name('ShowTiles');
Route::get('/addTile/{id}', [AdminController::class, 'showTile'])->name('ShowTile');
Route::get('/addSanitary', [AdminController::class, 'showAllSanitary'])->name('ShowSanitary');
Route::get('/addSanitary/{id}', [AdminController::class, 'showSanitary'])->name('ShowSanitary');


Route::post('/getSimilarTiles', [RetailCustomer::class, 'showSimilarTiles'])->name('showSimilarTiles');

Route::group(['middleware' => ['auth:sanctum','adminUser']], function(){
Route::post('/UsersAdmin', [AdminController::class, 'store'])->name('CreateUser');
Route::get('/UsersAdmin', [AdminController::class, 'showAllUsers'])->name('ShowUsers');
Route::get('/UsersAdmin/{id}', [AdminController::class, 'showUser'])->name('ShowUser');
Route::put('/UsersAdmin/{id}', [AdminController::class, 'updateUser'])->name('UpdateUser');
Route::delete('/UsersAdmin/{id}', [AdminController::class, 'deleteUser'])->name('DeleteUser');


Route::post('/RoleAdmin', [AdminController::class, 'storeRole'])->name('CreateRole');
Route::get('/RoleAdmin', [AdminController::class, 'showAllRoles'])->name('ShowRoles');
Route::put('/RoleAdmin/{roleID}', [AdminController::class, 'updateRole'])->name('UpdateRole');
Route::delete('/RoleAdmin/{roleID}', [AdminController::class, 'deleteRole'])->name('DeleteRole');


Route::post('/addTile', [AdminController::class, 'addTile'])->name('addTile');
Route::put('/addTile/{id}', [AdminController::class, 'updateTile'])->name('UpdateTile');
Route::delete('/addTile/{id}', [AdminController::class, 'deleteTile'])->name('DeleteTile');


Route::post('/addSanitary', [AdminController::class, 'addSanitary'])->name('addSanitary');
Route::put('/addSanitary/{id}', [AdminController::class, 'updateSanitary'])->name('UpdateSanitary');
Route::delete('/addSanitary/{id}', [AdminController::class, 'deleteSanitary'])->name('DeleteSanitary');


Route::get('/getServices', [AdminController::class, 'showAllServices'])->name('ShowServices');
Route::delete('/getServices/{id}', [AdminController::class, 'deleteService'])->name('DeleteService');


Route::get('/getProblems', [AdminController::class, 'showAllProblems'])->name('ShowProblems');
Route::delete('/getProblems/{id}', [AdminController::class, 'deleteProblem'])->name('DeleteProblem');
Route::put('/getProblems/{id}', [AdminController::class, 'updateProblem'])->name('UpdateProblem');



});