<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TaskController;


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


Route::get('/', function () {
    return view('main');
});

Route::get('/hola',function(){
    return view('welcome');
});

Route::get('/dashboard', function () {
    return redirect()->route('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified'])->group(function (){
    Route::get('lang/{lang}',[LanguageController::class, 'SwitchLanguage'])->name('lang');

    Route::get('/to-do-list', [ToDoController::class, 'index'])->name('index');

    
});

require __DIR__.'/auth.php';
