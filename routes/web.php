<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LeadsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LandingPageController::class, 'landingPage']);
Route::post('/leads/new', [LeadsController::class, 'store'])->name('new_lead');
Route::get('/obrigado', [LandingPageController::class, 'thankYou'])->name('thank_you');



Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::prefix('leads')->group(function () {
        Route::get('/', [LeadsController::class, 'index'])->name('index');
        Route::get('/{id}', [LeadsController::class, 'show'])->name('show');
    });
});


require __DIR__ . '/auth.php';

Auth::routes(['register' => false]);
