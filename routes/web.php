<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfilesController;
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
Route::get( '/', [ MainController::class, 'index' ] )->name( 'main' );



// PROFILE
Route::get( 'profile', [ ProfilesController::class, 'index' ] )->name( 'profile.index' );
Route::get( 'profile/rates', [ ProfilesController::class, 'rates' ] )->name( 'profile.rates' );
Route::get( 'profile/payments', [ ProfilesController::class, 'payments' ] )->name( 'profile.payments' );


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
