<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JatarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MatariController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PelatihController;
use App\Http\Controllers\KelasTingkatanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PenjadwalanController;

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

Route::get('/', [HalamanController::class, 'index'])->middleware('guest');

Auth::routes(['verify'=>true]);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/profil/{id}', [ProfilController::class, 'index'])->middleware('auth');
Route::post('/profil/update', [ProfilController::class, 'update'])->middleware('auth');
Route::post('/profil/upload', [ProfilController::class, 'upload'])->middleware('auth');
// Route::post('/profil/uploadpasfoto', [ProfilController::class, 'uploadpasfoto'])->middleware('auth');
// Route::post('/profil/uploadkk', [ProfilController::class, 'uploadfotokk'])->middleware('auth');


Route::get('/users', [UsersController::class, 'index'])->middleware('auth');
Route::get('/users/create', [UsersController::class, 'create'])->middleware('auth');
Route::post('/users/store', [UsersController::class, 'store'])->middleware('auth');
Route::get('/users/edit/{id}', [UsersController::class,'edit'])->middleware('auth');
Route::get('/users/hapus/{id}', [UsersController::class,'hapus'])->middleware('auth');
Route::post('/users/update', [UsersController::class, 'update'])->middleware('auth');
Route::get('/users/syarat', [UsersController::class, 'createupload'])->middleware('auth');
Route::post('/users/upload', [UsersController::class, 'upload'])->middleware('auth');
Route::get('/syarat/show/{id}', [UsersController::class, 'show'])->middleware('auth');
Route::get('/users/konfirmasi', [UsersController::class, 'liatupload'])->middleware('auth');




Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->middleware('guest');
Route::get('/add2/{id}', [PendaftaranController::class, 'create2']);
Route::post('/pendaftaran/store', [PendaftaranController::class, 'store']);
Route::post('/pendaftaran/store2', [PendaftaranController::class, 'store2']);
Route::get('/email/verification', [PendaftaranController::class, 'verification']);

Route::get('/pembayaran', [PembayaranController::class, 'index'])->middleware('auth');
Route::get('/pembayaran/konfirmasi', [PembayaranController::class, 'index2'])->middleware('auth');
Route::post('/pembayaran/store', [PembayaranController::class, 'store'])->middleware('auth');
Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show'])->middleware('auth');
Route::get('/pembayaran/hapus/{id}', [PembayaranController::class,'hapus']);
Route::get('/pembayaran/konfirmasi/status/{id}', [PembayaranController::class,'status'])->middleware('auth');
Route::get('/pembayaran/downloadPDF',[PembayaranController::class, 'downloadPDF']);

Route::get('/peserta', [PesertaController::class, 'index'])->middleware('auth');
Route::get('/peserta/create', [PesertaController::class, 'create'])->middleware('auth');
Route::post('/peserta/store', [PesertaController::class, 'store'])->middleware('auth');
Route::get('/peserta/edit/{id}', [PesertaController::class,'edit'])->middleware('auth');
Route::get('/peserta/hapus/{id}', [PesertaController::class,'hapus'])->middleware('auth');
Route::post('/peserta/update', [PesertaController::class, 'update'])->middleware('auth');
Route::get('/peserta/downloadPDF',[PesertaController::class, 'downloadPDF']);





Route::get('/matari', [MatariController::class, 'index'])->middleware('auth');
Route::get('/matari/create', [MatariController::class, 'create'])->middleware('auth');
Route::post('/matari/store', [MatariController::class, 'store'])->middleware('auth');
Route::get('/matari/edit/{id}', [MatariController::class,'edit'])->middleware('auth');
Route::get('/matari/hapus/{id}', [MatariController::class,'hapus'])->middleware('auth');
Route::post('/matari/update', [MatariController::class, 'update'])->middleware('auth');

Route::get('/pelatih', [PelatihController::class, 'index'])->middleware('auth');
Route::get('/pelatih/create', [PelatihController::class, 'create'])->middleware('auth');
Route::post('/pelatih/store', [PelatihController::class, 'store'])->middleware('auth');
Route::get('/pelatih/edit/{id}', [PelatihController::class,'edit'])->middleware('auth');
Route::get('/pelatih/hapus/{id}', [PelatihController::class,'hapus'])->middleware('auth');
Route::post('/pelatih/update', [PelatihController::class, 'update'])->middleware('auth');


Route::get('/jatar', [JatarController::class, 'index']);
Route::get('/jatar-user', [JatarController::class, 'indexUser']);

Route::get('/penjadwalan', [PenjadwalanController::class, 'index']);

Route::get('/jatar/create', [JatarController::class, 'create']);
Route::post('/jatar/store', [JatarController::class, 'store']);
Route::get('/jatar/edit/{id}', [JatarController::class,'edit']);
Route::get('/jatar/hapus/{id}', [JatarController::class,'hapus']);
Route::post('/jatar/update', [JatarController::class, 'update']);

Route::post('/jatar/submit-jadwal', [JatarController::class, 'submitJadwal']);


Route::get('/kelas', [KelasTingkatanController::class, 'index'])->middleware('auth');
Route::get('/kelas/create', [KelasTingkatanController::class, 'create'])->middleware('auth');
Route::post('/kelas/store', [KelasTingkatanController::class, 'store'])->middleware('auth');
Route::get('/kelas/edit/{id}', [KelasTingkatanController::class,'edit'])->middleware('auth');
Route::get('/kelas/hapus/{id}', [KelasTingkatanController::class,'hapus'])->middleware('auth');
Route::post('/kelas/update', [KelasTingkatanController::class, 'update'])->middleware('auth');