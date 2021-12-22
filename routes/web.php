<?php

use App\Http\Controllers\SingUpController;
use App\Http\Controllers\WebSiteController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[WebSiteController::class, 'dashboard'])->name('dashboard')->middleware(['auth']);
Route::post('/background',[WebSiteController::class, 'background'])->name('background')->middleware(['auth']);



require __DIR__.'/auth.php';

Route::post('sing_up',[SingUpController::class, 'sing_up'])->name('sing_up');
