<?php
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EtudiantAuthController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ForumController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('etudiant',[EtudiantController::class,'index'])->name('etudiant.index')->middleware('auth');
Route::get('etudiant/{etudiantInfo}',[EtudiantController::class,'show'])->name('etudiant.show')->middleware('auth');
Route::get('etudiant-edit/{etudiantInfo}',[EtudiantController::class,'edit'])->name('etudiant.edit')->middleware('auth');
Route::put('etudiant-edit/{etudiantInfo}', [EtudiantController::class, 'update'])->middleware('auth');
Route::get('etudiant-create',[EtudiantController::class,'create'])->name('etudiant.create')->middleware('auth');
Route::post('etudiant-create',[EtudiantController::class,'store'])->middleware('auth');
Route::delete('etudiant/{etudiantInfo}', [EtudiantController::class, 'destroy'])->middleware('auth');

Route::get('login', [EtudiantAuthController::class, 'index'])->name('login');
Route::post('login', [EtudiantAuthController::class, 'authentication'])->name('login.authentication');
Route::get('registration', [EtudiantAuthController::class, 'create'])->name('registration');
Route::post('registration', [EtudiantAuthController::class, 'store']);
Route::get('logout', [EtudiantAuthController::class, 'logout'])->name('logout');

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');

Route::get('forum', [ForumController::class, 'index'])->name('forum.index')->middleware('auth');
Route::get('forum-ajouter',[ForumController::class,'create'])->name('forum.create')->middleware('auth');
Route::get('forum/{forumPost}',[ForumController::class,'show'])->name('forum.show')->middleware('auth');
Route::post('forum-ajouter',[ForumController::class,'store'])->middleware('auth');



