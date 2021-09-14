<?php

use App\Http\Livewire\Manager\Auth\Login;
use App\Http\Livewire\Manager\Dashboard;
use App\Http\Livewire\Manager\Expenses;
use App\Http\Livewire\Manager\Payments;
use App\Http\Livewire\Manager\Upload;
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

Route::get('/login', Login::class);

Route::get('/manager', Dashboard::class)->name('manager');
Route::get('/upload', Upload::class)->name('upload');
Route::get('/payments', Payments::class)->name('payments');
Route::get('/expenses', Expenses::class)->name('expenses');
