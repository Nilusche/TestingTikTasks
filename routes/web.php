<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestcaseController;
use App\Models\Testcase;
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
Route::get('delete/{testcase}',[TestcaseController::class, 'destroy']);
Route::get('finish/{testcase}',[TestcaseController::class, 'finish']);
Route::get('date_asc', function(){return view('index')->with('tests', Testcase::orderBy('created_at', 'asc')->get());});
Route::get('date_desc', function(){return view('index')->with('tests', Testcase::orderBy('created_at', 'desc')->get());});
Route::get('status_asc', function(){return view('index')->with('tests', Testcase::orderBy('done', 'desc')->get());});
Route::get('status_desc', function(){return view('index')->with('tests', Testcase::orderBy('done', 'asc')->get());});
Route::get('prio_asc', function(){return view('index')->with('tests', Testcase::orderByRaw("FIELD(priority, \"low\", \"medium\", \"high\")")->get());});
Route::get('prio_desc', function(){return view('index')->with('tests', Testcase::orderByRaw("FIELD(priority, \"high\", \"medium\", \"low\")")->get());});
