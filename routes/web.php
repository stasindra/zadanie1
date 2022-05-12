<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Controllers\DeController;
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
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile','profile')->name('profile');
    Route::put('profile',[\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::get('profile/delete',[\App\Http\Controllers\DeController::class,'delet'])->name('profile.delet');
});

require __DIR__.'/auth.php';
