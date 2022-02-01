<?php

use App\Http\Controllers\plataforma\Home;
use App\Http\Controllers\plataforma\Login;
use App\Http\Controllers\site\HomeController;
use App\Http\Middleware\LoginMiddleware;
use Illuminate\Support\Facades\Route;

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

/******* site  *******/
//Route::prefix('site')->group(function () {
Route::get('/', [HomeController::class, 'index'])->name('home');
//});

// middleware validação area cliente 
// Route::middleware(LoginMiddleware::class)
//     ->get('/area-cliente', [HomePFM_Controller::class, 'index'])
//     ->name('dashboard-home');

/******* login   *******/
//Route::prefix('/login')->group(function () {
Route::get('/login-page', [Login::class, 'pageLogin'])->name('box-login');
Route::post('/login-validation', [Login::class, 'login'])->name('loginValidation');
Route::post('/register-validation', [Login::class, 'registarUtilizador'])->name('registerValidation');
Route::get('/logout', [Login::class, 'logout'])->name('logout');
// recuperar password
Route::post('/recover', [Login::class, 'recuperarPassword'])->name('recoverPass');
Route::get('/recover-new-password/{token}', [Login::class, 'criarPassword'])->name('recoverNewPass');

//});//

/******* platform  *******/
//Route::prefix('/platform')->group(function () {
//Route::post('/logout-validation', [LoginPFM_Controller::class, 'logout'])->name('logouValidation');
Route::get('/area-cliente', [Home::class, 'index'])->name('dashboard-home')->middleware('loginMiddleware');
//});
