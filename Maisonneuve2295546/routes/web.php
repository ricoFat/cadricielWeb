<?php
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EtudiantAuthController;
use App\Http\Controllers\LocalizationController;
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

Route::get('etudiant',[EtudiantController::class,'index'])->name('etudiant.index');
Route::get('etudiant/{etudiantInfo}',[EtudiantController::class,'show'])->name('etudiant.show');
Route::get('etudiant-edit/{etudiantInfo}',[EtudiantController::class,'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiantInfo}', [EtudiantController::class, 'update']);
Route::get('etudiant-create',[EtudiantController::class,'create'])->name('etudiant.create');
Route::post('etudiant-create',[EtudiantController::class,'store']);
Route::delete('etudiant/{etudiantInfo}', [EtudiantController::class, 'destroy']);

Route::get('login', [EtudiantAuthController::class, 'index'])->name('login');
Route::post('login', [EtudiantAuthController::class, 'authentication'])->name('login.authentication');
Route::get('registration', [EtudiantAuthController::class, 'create'])->name('registration');
Route::post('registration', [EtudiantAuthController::class, 'store']);

Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang');



