<?php

use App\Http\Livewire\Director\Dashboard as DirectorDashboard;
use App\Http\Livewire\Director\Stations;
use App\Http\Livewire\Manager\Auth\Login;
use App\Http\Livewire\Manager\Dashboard;
use App\Http\Livewire\Manager\Expenses;
use App\Http\Livewire\Manager\Payments;
use App\Http\Livewire\Manager\RecordSales;
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

Route::get('/login', Login::class)->name('manager.auth.login');

// Director Routes
Route::group(['middleware' => 'auth:director'], function () {
});

Route::get('/director', DirectorDashboard::class);
Route::get('/stations', Stations::class);

// Admin Routes
Route::group(['middleware' => 'auth:manager'], function () {
    Route::get('/manager', Dashboard::class);
    Route::get('/upload', Upload::class);
    Route::get('/payments', Payments::class);
    Route::get('/expenses', Expenses::class);
    //Use the name so the nav item is highlighted.
    Route::get('/record/sales', RecordSales::class);
    Route::get('/logout/manager', [Dashboard::class, 'destroy']);
});
