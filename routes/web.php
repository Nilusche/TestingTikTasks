<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestcaseController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes(['register' => false]);
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('index', [HomeController::class, 'index']);

Route::get('create-test', [TestcaseController::class,'show']);
Route::post('create',[TestcaseController::class,'create']);
Route::get('edit/{testcase}', [TestcaseController::class, 'edit']);
Route::post('update/{testcase}',[TestcaseController::class, 'update']);
Route::get('download/{testcase}',[TestcaseController::class, 'download']);

