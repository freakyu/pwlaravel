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

// Route::get('/', function () {
//     return view('website.index');
// });

// Route::get('/tampil', function () {
// 	$judul = 'MANDIRI';
// 	$penulis = 'sun_shine';
//     return view('website.tampil', compact('judul', 'penulis'));
// });

// Route::get('/hubungi', function()
// {
// 	return 'ini adalah halaman kontak';
// });

// use App\Http\Controllers\BeritaController;

// Route::get('/berita', [BeritaController::class, 'index']);
// Route::resource('berita', BeritaController::class);
// Route::get('/univ', [BeritaController::class, 'tampil']);

// use App\Http\Controllers\AkunController;

// Route::resource('akun', AkunController::class);

use App\Http\Controllers\BeritaController;

Route::resource('/', BeritaController::class);	//memanggil fungsi dari BeritaController

Route::get('tampil/{post}', [BeritaController::class, 'tampil'])->name('tampil'); //route untuk tampil


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function() //CARA KEDUA LOGOUT TANPA FORM YANG TERDAPAT DI backend.php line 74
{
	auth()->logout();
	session()->flush();
	return Redirect::to('/');
})->name('keluar');
