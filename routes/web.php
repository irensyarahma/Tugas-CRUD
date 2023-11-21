<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\HomeController;
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
    return view('Home');
});

Route::get('/table', function () {
    return view('tugas2.table');
})->name('table');;

Route::get('/data-table', function () {
    return view('tugas2.datatable');
})->name('datatable');;

route::get('FormRegis', [AuthController::class, 'index'])->name('FormRegis');
route::post('Welcome', [AuthController::class, 'submit'])->name('register');
route::get('Dashboard', [HomeController::class, 'dashboard'])->name('dash');
route::get('/cast', [CastController::class, 'index'])->name('castindex');
route::get('/cast/create', [CastController::class, 'create'])->name('create');
route::post('/cast', [CastController::class, 'store'])->name('submit');
route::get('/cast/{id}', [CastController::class, 'show'])->name('tampilkan');
route::post('/castedit/{id}/edit', [CastController::class, 'update'])->name('ubah');
route::get('/cast/{id}/delet', [CastController::class, 'destroy'])->name('hapus');