<?php

use App\Http\Controllers\Guest\ShoreController as GuestShoreController;
use Illuminate\Support\Facades\Route;

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

Route::get('guest/shores', [GuestShoreController::class, 'index'])->name('guest.shores.index');
