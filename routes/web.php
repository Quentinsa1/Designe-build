<?php

use App\Http\Controllers\WebsiteController;
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


Route::get('/', [WebsiteController::class, 'index'])->name('website.index');
Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
Route::get('/expertise', [WebsiteController::class, 'expertise'])->name('website.expertise');
Route::get('/realisation', [WebsiteController::class, 'realisation'])->name('website.realistation');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
Route::get('/job', [WebsiteController::class, 'job'])->name('website.job');