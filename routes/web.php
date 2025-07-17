<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CategorieExpertiseController;
use App\Http\Controllers\Dashboard\ActualiteController;

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

// Routes principales
Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('website.faq');
Route::get('/expertises', [WebsiteController::class, 'expertise'])->name('website.expertise.index');
Route::get('/realisation', [WebsiteController::class, 'realisation'])->name('website.realisation');
Route::get('/expertise/{slug}', [WebsiteController::class, 'showExpertise'])->name('website.expertise.show');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/job', [WebsiteController::class, 'job'])->name('website.job');
Route::get('/actualites', [WebsiteController::class, 'actualites'])->name('website.actualite.index');
Route::get('/actualites/{id}', [WebsiteController::class, 'showActualite'])->name('website.actualite.show');

// POST route pour le formulaire de contact
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

// Routes dashboard
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', fn() => view('dashboard/dashboard'))->name('dashboard');
    
    // Routes profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Ressources
    Route::resource('realisations', RealisationController::class);
    Route::resource('offres', OffreController::class);
    
    // Messages
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    
    // Routes dashboard avec préfixe et nommage
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        Route::resource('categories', CategorieExpertiseController::class)->except(['show']);
        Route::resource('actualites', ActualiteController::class);
    });
});

require __DIR__.'/auth.php';