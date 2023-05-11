<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::get ('/home', [HomeController::class,"index"]);
Route::resource('warga/pengajuan', \App\Http\Controllers\PengajuanController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require __DIR__.'/auth.php';


Route::get('/warga/pengajuan', function () {
    return view('warga/pengajuan');
})->middleware(['auth', 'verified'])->name('pengajuan');

Route::get('/petugas/pengambilan', function () {
    return view('petugas/pengambilan');
})->middleware(['auth', 'verified'])->name('pengambilan');

Route::get('/kontak', function () {
    return view('warga/kontak');
})->middleware(['auth', 'verified'])->name('kontak');

Route::get('/beranda', function () {
    return view('warga/beranda');
})->middleware(['auth', 'verified'])->name('beranda');

// Route::get('/rekap', function () {
//     return view('petugas/rekap');
// })->middleware(['auth', 'verified'])->name('rekap');

Route::resource('/pengajuan', \App\Http\Controllers\PengajuanController::class);

Route::resource('/petugas/tabel', \App\Http\Controllers\TabelController::class);

Route::resource('/petugas/data', \App\Http\Controllers\DataController::class);

Route::get('/warga/ajuSuccess', function () {
    return view('warga/ajuSuccess');
})->middleware(['auth', 'verified'])->name('ajuSuccess');

Route::get('/petugas/dashboard', function () {
    return view('petugas/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/index', [IndexController::class, 'index'])->name('index');