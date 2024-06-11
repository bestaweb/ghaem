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
Route::get('/'  , [App\Http\Controllers\Site\IndexController::class, 'index']);
Route::get('/login'  , [App\Http\Controllers\Site\IndexController::class, 'login']);
Route::get('/about'  , [App\Http\Controllers\Site\IndexController::class, 'about']);
Route::get('/contact'  , [App\Http\Controllers\Site\IndexController::class, 'contact']);
Route::get('/register'  , [App\Http\Controllers\Site\IndexController::class, 'register']);
Route::get('/brothers'  , [App\Http\Controllers\Site\IndexController::class, 'brothers']);
Route::get('/sisters'  , [App\Http\Controllers\Site\IndexController::class, 'sisters']);
Route::get('/publishing-center'  , [App\Http\Controllers\Site\IndexController::class, 'publishingCenter']);
Route::get('/kindergarten'  , [App\Http\Controllers\Site\IndexController::class, 'kindergarten']);
Route::get('/loan-institute'  , [App\Http\Controllers\Site\IndexController::class, 'loanInstitute']);
Route::get('/charity'  , [App\Http\Controllers\Site\IndexController::class, 'charity']);
Route::get('/mahdia'  , [App\Http\Controllers\Site\IndexController::class, 'mahdia']);
Route::get('/journal'  , [App\Http\Controllers\Site\IndexController::class, 'journal']);


//Route::get('/', function () {
//    return view('welcome');
//});
