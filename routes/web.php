<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::post('/agent-store', [PageController::class, 'agent_store'])->name('agent_store');
