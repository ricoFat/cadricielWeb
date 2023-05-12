<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciceController;

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
    return view('welcome');
});

Route::get('/home', [Exercicecontroller::class,'index']);
Route::get('/resume', [Exercicecontroller::class,'resumePage']);
Route::get('/projects', [Exercicecontroller::class,'projetsPage']);
Route::get('/contact', [Exercicecontroller::class,'contactPage']);
Route::post('/contact', [ExerciceController::class,'contactForm']);
