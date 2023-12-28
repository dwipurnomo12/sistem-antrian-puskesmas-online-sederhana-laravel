<?php

use App\Http\Controllers\DashboardAntrianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardLaporanController;
use App\Http\Controllers\FrontAntrianController;

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
    return view('home');
});

Route::resource('antrian', FrontAntrianController::class);
Route::get('livewire/antrian/cetakAntrian', [FrontAntrianController::class, 'cetakAntrian'])->name('cetakAntrian');


Auth::routes();
Route::middleware('auth')->group(function () {
    Route::group(['middleware' => 'CheckRole:admin'], function () {
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('redirectifauthenticated');
        Route::get('dashboard', [DashboardController::class, 'index']);

        Route::get('dashboard/antrian/poliUmum', [DashboardAntrianController::class, 'indexPoliUmum']);
        Route::get('dashboard/antrian/poliGigi', [DashboardAntrianController::class, 'indexPoliGigi']);
        Route::get('dashboard/antrian/poliTht', [DashboardAntrianController::class, 'indexPoliTht']);
        Route::get('dashboard/antrian/poliLansia', [DashboardAntrianController::class, 'indexPoliLansia']);
        Route::get('dashboard/antrian/poliBalita', [DashboardAntrianController::class, 'indexPoliBalita']);
        Route::get('dashboard/antrian/poliKia', [DashboardAntrianController::class, 'indexPoliKia']);
        Route::get('dashboard/antrian/poliNifas', [DashboardAntrianController::class, 'indexPoliNifas']);

        Route::get('dashboard/laporan/index', [DashboardLaporanController::class, 'index']);
        Route::get('livewire/dashboard/laporan/cetakLaporan', [DashboardLaporanController::class, 'cetakLaporan'])->name('cetakLaporan');
    });
});
