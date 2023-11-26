<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersImageModelsController;
use App\Http\Controllers\UsersLogin;
use App\Http\Controllers\UsersModelController;
use App\Http\Controllers\Profil;
use App\Http\Controllers\statusController;
use App\Http\Controllers\homepageController;
use App\Http\Middleware\UserLogin;

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

Route::get('/', [homepageController::class, 'index']);
Route::get('/dashboard/konten', function () {
    return view('pages.dashboard.konten.index');
});

// Route::view('/dashboard/konten/', 'pages.dashboard.konten.index');


// Route::get('/profil', [Profil::class, 'index']);
Route::get('/status', [statusController::class, 'index']);
Route::get('/profil/{username}', [Profil::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [UsersLogin::class, 'logout']);
    Route::post('/delete', [UsersModelController::class, 'destroy']);
    Route::post('/update-image', [UsersImageModelsController::class, 'update']);
    Route::post('/upstatus', [statusController::class, 'store']);
});
Route::middleware('guest')->group(function(){
    Route::get('/register', [UsersModelController::class, 'create']);
    Route::post('/register', [UsersModelController::class, 'store'])->name('storeUser');
    Route::get('/login', [UsersLogin::class, 'index'])->name('login');
    Route::post('/login', [UsersLogin::class, 'authenticate']);
});