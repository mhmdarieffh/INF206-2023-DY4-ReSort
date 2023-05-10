<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});

require _DIR_.'/auth.php';

Route::get('/pengajuan', function () {
    return view('warga/pengajuan');
})->middleware(['auth', 'verified'])->name('pengajuan');

Route::get('/pengambilan', function () {
    return view('pengambilan');
})->middleware(['auth', 'verified'])->name('pengambilan');

Route::get('/kontak', function () {
    return view('warga/kontak');
})->middleware(['auth', 'verified'])->name('kontak');

Route::get('/beranda', function () {
    return view('warga/beranda');
})->middleware(['auth', 'verified'])->name('beranda');