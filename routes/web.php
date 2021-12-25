<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\GagasanController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\SgPeriodeController; 
use App\Http\Controllers\SrgPeriodeController;
use App\Http\Controllers\RekapGagasanController;


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
//===== LANDING PAGE START =====//
// Route::get('/', function () {
//     return view('landpage/home', [
//         "title" => "Home"
//     ]);
// });
//===== LANDING PAGE END =====//


//===== LOGIN START =====//
Route::get('/', [LoginController::class, 'index']);
//===== LOGIN END =====//


//===== MENU UTAMA START =====//
//BERANDA
Route::get('/beranda', [BerandaController::class, 'index']);

// PANDUAN INOVASI
Route::get('/panduan-inovasi', [PanduanController::class, 'index']);
Route::get('/tambah-panduan', [PanduanController::class, 'create']);
Route::get('/edit-panduan', [PanduanController::class, 'edit']);
//===== MENU UTAMA END =====//


//===== MENU ADMINISTRASI START =====//
// DAFTAR GAGASAN
Route::get('/gagasan', [GagasanController::class, 'index']);
Route::get('/tambah-gagasan', [GagasanController::class, 'create']);
Route::get('/edit-gagasan', [GagasanController::class, 'edit']);
Route::get('/detail-gagasan', [GagasanController::class, 'show']);

// DAFTAR GUGUS
Route::get('/gugus', [InovasiController::class, 'index']);
Route::get('/tambah-gugus', [InovasiController::class, 'create']);
Route::get('/edit-gugus', [InovasiController::class, 'edit']);
Route::get('/detail-gugus', [InovasiController::class, 'show']);

// PERIODE
Route::get('/periode', [SgPeriodeController::class, 'index']);
Route::get('/tambah-periode-sg', [SgPeriodeController::class, 'create']);
Route::get('/edit-periode-sg', [SgPeriodeController::class, 'edit']);
Route::get('/tambah-periode-sergio', [SrgPeriodeController::class, 'create']);
Route::get('/edit-periode-sergio', [SrgPeriodeController::class, 'edit']);

// USER
Route::get('/user', [AuthController::class, 'index']);
Route::get('/edit-user-sg', [AuthController::class, 'edit_sg']);
Route::get('/edit-user-sergio', [AuthController::class, 'edit_srg']);

// DAFTAR PEGAWAI
Route::get('/pegawai', [ProfileController::class, 'index']);

// EDIT NIK PEGAWAI
Route::get('/nik', [ProfileController::class, 'edit_nik']);
//===== MENU ADMINISTRASI END =====//



//===== MENU KID START =====//
// GAGASAN DEPARTEMEN
Route::get('/gagasan-departemen', [GagasanController::class, 'kid_index']);
Route::get('/detail-gagasan-departemen', [GagasanController::class, 'kid_show']);

// APPROVAL SERGIO
Route::get('/approval-sergio', [InovasiController::class, 'kid_index']);
Route::get('/detail-approval-sergio', [InovasiController::class, 'kid_show']);
//===== MENU KID END =====//



//===== MENU FASILITATOR START =====//
// APPROVAL USULAN GAGASAN
Route::get('/approval-gagasan', [GagasanController::class, 'fasilitator_index']);
Route::get('/detail-approval-gagasan', [GagasanController::class, 'fasilitator_show']);
//===== MENU FASILITATOR END =====//

//===== MENU MANAGER START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-manager', [GagasanController::class, 'manager_index']);
Route::get('/detail-verifikasi-manager', [GagasanController::class, 'manager_show']);
//===== MENU MANAGER END =====//

//===== MENU DEPARTEMEN START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-departemen', [GagasanController::class, 'dept_index']);
Route::get('/detail-verifikasi-departemen', [GagasanController::class, 'dept_show']);
//===== MENU DEPARTEMEN END =====//


//===== MENU REKAP KEGIATAN INOVASI START =====//
// SUMBANG GAGASAN
Route::get('/sumbang-gagasan', [RekapGagasanController::class, 'index']);
Route::get('/detail-sumbang-gagasan', [RekapGagasanController::class, 'show']);
Route::get('/daftar-sumbang-gagasan', [RekapGagasanController::class, 'create_sergio']);

// SISTEM SARAN
Route::get('/sistem-saran', [InovasiController::class, 'ss_index']);

// GIO
Route::get('/GIO', [InovasiController::class, 'gio_index']);

// GIM
Route::get('/GIM', [InovasiController::class, 'gim_index']);

// 5R
Route::get('/5R', [InovasiController::class, 'fr_index']);

// RANKING SG
Route::get('/ranking-sg', [InovasiController::class, 'ranking_index']);

// GRAFIK SG
Route::get('/grafik-sg', [InovasiController::class, 'grafik_index']);
//===== MENU REKAP KEGIATAN INOVASI END =====//


//===== MENU HISTORY START =====//
// HISTORY GAGASAN
Route::get('/history-gagasan', [HistoryController::class, 'gagasan_index']);

// HISTORY SERGIO
Route::get('/history-sergio', [HistoryController::class, 'inovasi_index']);
//===== MENU HISTORY END =====//

//===== MENU LAPORAN START =====//
// LAPORAN GAGASAN
Route::get('/laporan-gagasan', [LaporanController::class, 'gagasan_index']);

// LAPORAN DATA MENTAH
Route::get('/laporan-data-mentah', [LaporanController::class, 'mentah_index']);

// LAPORAN SERGIO
Route::get('/laporan-sergio', [LaporanController::class, 'sergio_index']);

// MEMO LAPORAN KID
Route::get('/laporan-kid', [LaporanController::class, 'kid_index']);

// MEMO LAPORAN SPTK
Route::get('/laporan-sptk', [LaporanController::class, 'sptk_index']);
// HISTORY SERGIO

//===== MENU LAPORAN END =====//