<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route::middleware('home')->group(function () {
//     Route::get('/',[HomeController::class,'index'])->name('home');
// });
Route::get('/',[AppController::class,'home'])->name('home');

Route::get('/about',[AppController::class,'about'])->name('about');

Route::get('/project',[AppController::class,'project'])->name('project');

Route::get('/contact',[AppController::class,'contact'])->name('contact');
