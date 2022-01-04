<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\usercontroller;

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

Route::get('/',[usercontroller::class,'index']);
Route::get('/register',[usercontroller::class,'register']);
Route::post('/reg',[usercontroller::class,'reg']);
Route::get('/login',[usercontroller::class,'login']);
Route::post('/loginaction',[usercontroller::class,'loginaction']);
Route::get('/viewdetails',[usercontroller::class,'viewdetails']);
Route::get('/home',[usercontroller::class,'home']);
Route::get('/view',[usercontroller::class,'update']);
Route::post('/updatereg/{id}',[usercontroller::class,'updatereg']);
Route::get('/logout',[usercontroller::class,'logout']);
Route::post('/search',[usercontroller::class,'search']);