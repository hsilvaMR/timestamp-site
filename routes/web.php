<?php

use App\Http\Controllers\plataforma\HomePFM_Controller;
use App\Http\Controllers\plataforma\LoginPFM_Controller;
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

// Route::get('/', function () {
//     return view('welcome');  registarUser registerValidation
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login-page', [LoginPFM_Controller::class, 'pageLogin'])->name('box-login');
Route::post('/login-validation', [LoginPFM_Controller::class, 'login'])->name('loginValidation');
Route::post('/logout-validation', [LoginPFM_Controller::class, 'logout'])->name('logouValidation');
Route::post('/register-validation', [LoginPFM_Controller::class, 'registarUser'])->name('registerValidation');

// middleware validação area cliente 
Route::middleware(LoginMiddleware::class)
    ->get('/area-cliente', [HomePFM_Controller::class, 'index'])
    ->name('dashboard-home');
