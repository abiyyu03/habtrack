<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\HabitTrackController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    # habit
    // Route::get('/notif', [HabitController::class,'sendNotification']);
    Route::get('/habit', [HabitController::class,'index']);
    Route::post('/habit', [HabitController::class,'store'])->name('habit.store');
    Route::get('/habit/delete/{id}', [HabitController::class,'destroy']);
    
    # habit tracking
    Route::get('/track/{habit_id}', [HabitTrackController::class,'index']);
    Route::get('/track/json/{habit_id}', [HabitTrackController::class,'getDate']);
    Route::post('/habit_track', [HabitTrackController::class,'store'])->name('habitTrack.store');//->middleware('throttle:1,2');
});

require __DIR__.'/auth.php';


