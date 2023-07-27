<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::post('logout', [UserController::class, 'logout'])->name('logout');
Route::post('/auth/register', [UserController::class, 'UserRegistration']);

Route::post('/auth/login', [UserController::class, 'Login']);


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
Route::get('/addTile', [AdminController::class, 'showAllTiles'])->name('ShowTiles');
Route::get('/addTile/{id}', [AdminController::class, 'showTile'])->name('ShowTile');
Route::put('/addTile/{id}', [AdminController::class, 'updateTile'])->name('UpdateTile');
Route::delete('/addTile/{id}', [AdminController::class, 'deleteTile'])->name('DeleteTile');


Route::post('/addSanitary', [AdminController::class, 'addSanitary'])->name('addSanitary');
Route::get('/addSanitary', [AdminController::class, 'showAllSanitary'])->name('ShowSanitary');
Route::get('/addSanitary/{id}', [AdminController::class, 'showSanitary'])->name('ShowSanitary');
Route::put('/addSanitary/{id}', [AdminController::class, 'updateSanitary'])->name('UpdateSanitary');
Route::delete('/addSanitary/{id}', [AdminController::class, 'deleteSanitary'])->name('DeleteSanitary');


Route::get('/getServices', [AdminController::class, 'showAllServices'])->name('ShowServices');
Route::delete('/getServices/{id}', [AdminController::class, 'deleteService'])->name('DeleteService');


Route::get('/getProblems', [AdminController::class, 'showAllProblems'])->name('ShowProblems');
Route::delete('/getProblems/{id}', [AdminController::class, 'deleteProblem'])->name('DeleteProblem');
Route::put('/getProblems/{id}', [AdminController::class, 'updateProblem'])->name('UpdateProblem');
});