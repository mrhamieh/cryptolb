<?php

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
    return redirect()->route('login');});

Auth::routes();
Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('bravio', \App\Http\Livewire\Guest\Bravio::class)->name('guest.bravio');
Route::get('quickTasks', \App\Http\Livewire\Guest\QuickTask::class)->name('guest.quick-task');
Route::get('checkout', \App\Http\Livewire\Guest\Checkout::class)->name('guest.checkout');




});
