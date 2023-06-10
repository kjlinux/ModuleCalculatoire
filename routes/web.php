<?php

use App\Http\Controllers\MainAire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainPerimetre;
use App\Http\Controllers\MainArithmetique;
use App\Http\Controllers\MainDenombrement;
use App\Http\Controllers\MainConvertisseur;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Calculator\MainController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/signup', [MainController::class, 'signup']);

Route::get('/login', [MainController::class, 'login']);

Route::get('/historique', [MainController::class, 'historique']);

Route::get('/', [MainController::class, 'imc']);
Route::post('/calculer', [MainConvertisseur::class, 'imc']);


Route::get('/longueur', [MainController::class, 'longueur']);
Route::post('/longueur/calculer', [MainConvertisseur::class, 'longueur']);

Route::get('/poids', [MainController::class, 'poids']);
Route::post('/poids/calculer', [MainConvertisseur::class, 'poids']);

Route::get('/devise', [MainController::class, 'devise']);
Route::post('/devise/calculer', [MainConvertisseur::class, 'devise']);

Route::get('/temperature', [MainController::class, 'temperature']);
Route::post('/temperature/calculer', [MainConvertisseur::class, 'temperature']);

Route::get('/pcarre', [MainController::class, 'pcarre']);
Route::post('/pcarre/calculer', [MainPerimetre::class, 'pcarre']);

Route::get('/prectangle', [MainController::class, 'prectangle']);
Route::post('/prectangle/calculer', [MainPerimetre::class, 'prectangle']);

Route::get('/ptriangle', [MainController::class, 'ptriangle']);
Route::post('/ptriangle/calculer', [MainPerimetre::class, 'ptriangle']);

Route::get('/pparallelogramme', [MainController::class, 'pparallelogramme']);
Route::post('/pparallelogramme/calculer', [MainPerimetre::class, 'pparallelogramme']);

Route::get('/ptrapeze', [MainController::class, 'ptrapeze']);
Route::post('/ptrapeze/calculer', [MainPerimetre::class, 'ptrapeze']);

Route::get('/pcercle', [MainController::class, 'pcercle']);
Route::post('/pcercle/calculer', [MainPerimetre::class, 'pcercle']);

Route::get('/acarre', [MainController::class, 'acarre']);
Route::post('/acarre/calculer', [MainAire::class, 'acarre']);

Route::get('/arectangle', [MainController::class, 'arectangle']);
Route::post('/arectangle/calculer', [MainAire::class, 'arectangle']);

Route::get('/atriangle', [MainController::class, 'atriangle']);
Route::post('/atriangle/calculer', [MainAire::class, 'atriangle']);

Route::get('/aparallelogramme', [MainController::class, 'aparallelogramme']);
Route::post('/aparallelogramme/calculer', [MainAire::class, 'aparallelogramme']);

Route::get('/atrapeze', [MainController::class, 'atrapeze']);
Route::post('/atrapeze/calculer', [MainAire::class, 'atrapeze']);

Route::get('/adisque', [MainController::class, 'adisque']);
Route::post('/adisque/calculer', [MainAire::class, 'adisque']);

Route::get('/ppcm', [MainController::class, 'ppcm']);
Route::post('/ppcm/calculer', [MainArithmetique::class, 'calculerppcm'])->name('ppcm.calculerppcm');

Route::get('/pgcd', [MainController::class, 'pgcd']);
Route::post('/pgcd/calculer', [MainArithmetique::class, 'calculerpgcd']);

Route::get('/moyenne', [MainController::class, 'moyenne']);
Route::post('/moyenne/calculer', [MainArithmetique::class, 'moyenne']);

Route::get('/facteurpremier', [MainController::class, 'facteurpremier']);
Route::post('/facteurpremier/calculer', [MainArithmetique::class, 'facteurpremier']);

Route::get('/factoriel', [MainController::class, 'factoriel']);
Route::post('/factoriel/calculer', [MainDenombrement::class, 'factoriel']);

Route::get('/combinaison', [MainController::class, 'combinaison']);
Route::post('/combinaison/calculer', [MainDenombrement::class, 'combinaison']);

Route::get('/permutation', [MainController::class, 'permutation']);
Route::post('/permutation/calculer', [MainDenombrement::class, 'permutation']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
