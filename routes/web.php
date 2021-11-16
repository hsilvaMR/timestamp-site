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
Route::middleware(LoginMiddleware::class)
    ->get('/login-page', [LoginPFM_Controller::class, 'pageLogin'])
    ->name('box-login');
Route::middleware(LoginMiddleware::class)
    ->post('/login-validation', [LoginPFM_Controller::class, 'login_v2'])
    ->name('loginValidation');
Route::post('/logout-validation', [LoginPFM_Controller::class, 'logout'])->name('logouValidation');
Route::post('/register-validation', [LoginPFM_Controller::class, 'registarUser'])->name('registerValidation');
Route::get('/area-cliente', [HomePFM_Controller::class, 'index'])->name('dashboard-home');
