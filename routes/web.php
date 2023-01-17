<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    Route::resource('products', ProductController::class);
});

Route::get('send-email-queue', function(){

    dispatch(new App\Jobs\BirthDayEmailJob());
    return response()->json(['message'=>'Mail Send Successfully!!']);
});
Route::resource('users', UserController::class);

require __DIR__.'/auth.php';
