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
Route::get('/', function () {
    return view('landpage/home', [
        "title" => "Home"
    ]);
});
//===== LANDING PAGE END =====//


//===== LOGIN START =====//
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//===== LOGIN END =====//

//===== PROFIL START =====//
Route::get('/profil', function () {
    return view('admin/profile/profile', [
        "title" => "Profil Karyawan"
    ]);
});
//===== PROFIL END =====//

//===== KLINIK INOVASI START =====//
Route::get('/klinik-inovasi', function () {
    return view('admin/klinik inovasi/klinik_inovasi', [
        "title" => "Klinik Inovasi"
    ]);
});
//===== KLINIK INOVASI END =====//

//===== MENU UTAMA START =====//
//BERANDA
Route::get('/beranda', [BerandaController::class, 'index']);

// PANDUAN INOVASI
Route::get('/panduan-inovasi', [PanduanController::class, 'index']);
Route::get('/tambah-panduan', [PanduanController::class, 'create']);
Route::get('/edit-panduan/{slug}', [PanduanController::class, 'edit']);

//Hall of Fame
Route::get('/hall-of-fame', function () {
    return view('admin/menu utama/hall_of_fame', [
        "title" => "Hall of Fame"
    ]);
});
Route::get('/create-hall-of-fame', function () {
    return view('admin/menu utama/hof_create', [
        "title" => "Tambah Hall of Fame"
    ]);
});
Route::get('/edit-hall-of-fame', function () {
    return view('admin/menu utama/hof_edit', [
        "title" => "Edit Hall of Fame"
    ]);
});
Route::get('/detail-hall-of-fame', function () {
    return view('admin/menu utama/hof_detail', [
        "title" => "Detail Hall of Fame"
    ]);
});
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

Route::get('/monitoring-gugus-inovasi', function () {
    return view('admin/menu kid/monitoring_gugus', [
        "title" => "Monitoring Gugus Inovasi"
    ]);
});
//===== MENU KID END =====//



//===== MENU FASILITATOR START =====//
// APPROVAL USULAN GAGASAN
Route::get('/approval-gagasan', [GagasanController::class, 'fasilitator_index']);
Route::get('/detail-approval-gagasan', [GagasanController::class, 'fasilitator_show']);

Route::get('/approval-plan-action', function () {
    return view('admin/menu fasilitator/approval_plan_action', [
        "title" => "Approval Plan Action Inovasi"
    ]);
});
Route::get('/detail-approval-plan-action', function () {
    return view('admin/menu fasilitator/approval_plan_action_detail', [
        "title" => "Detail Approval Plan Action Inovasi"
    ]);
});
//===== MENU FASILITATOR END =====//

//===== MENU MANAGER START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-manager', [GagasanController::class, 'manager_index']);
Route::get('/detail-verifikasi-manager', [GagasanController::class, 'manager_show']);
Route::get('/verifikasi-plan-action', function () {
    return view('admin/menu manager/verifikasi_plan_action', [
        "title" => "Verifikasi Plan Action Inovasi"
    ]);
});
Route::get('/detail-verifikasi-plan-action', function () {
    return view('admin/menu manager/verifikasi_plan_action_detail', [
        "title" => "Detail Verifikasi Plan Action Inovasi"
    ]);
});
//===== MENU MANAGER END =====//

//===== MENU DEPARTEMEN START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-departemen', [GagasanController::class, 'dept_index']);
Route::get('/detail-verifikasi-departemen', [GagasanController::class, 'dept_show']);
//===== MENU DEPARTEMEN END =====//


//===== MENU REKAP KEGIATAN INOVASI START =====//
// ROADMAP INOVASI
Route::get('/roadmap-inovasi', function () {
    return view('admin/menu rekap/roadmap_inovasi', [
        "title" => "Roadmap Inovasi"
    ]);
});

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

//===== MENU PENJURIAN START =====//
Route::get('/inisiasi-penilaian', function () {
    return view('admin/menu penjurian/inisiasi_penilaian', [
        "title" => "Inisiasi Penilaian"
    ]);
});
Route::get('/inisiasi-quota', function () {
    return view('admin/menu penjurian/inisiasi_quota', [
        "title" => "Inisiasi Quota"
    ]);
});
Route::get('/pilih-koordinator-perusahaan', function () {
    return view('admin/menu penjurian/koordinator_juri', [
        "title" => "Pilih Koordinator Perusahaan"
    ]);
});
Route::get('/pilih-juri-kompartemen', function () {
    return view('admin/menu penjurian/pilih_juri_kompartemen', [
        "title" => "Pilih Juri Kompartemen"
    ]);
});
Route::get('/pilih-juri-perusahaan', function () {
    return view('admin/menu penjurian/pilih_juri_perusahaan', [
        "title" => "Pilih Juri Perusahaan"
    ]);
});
Route::get('/kelompok-juri-kompartemen', function () {
    return view('admin/menu penjurian/kelompok_juri_kompartemen', [
        "title" => "Kelompok Juri Kompartemen"
    ]);
});
Route::get('/kelompok-juri-perusahaan', function () {
    return view('admin/menu penjurian/kelompok_juri_perusahaan', [
        "title" => "Kelompok Juri Perusahaan"
    ]);
});
Route::get('/pembagian-gugus-tk-kompartemen', function () {
    return view('admin/menu penjurian/pembagian_gugus_tk_kompartemen', [
        "title" => "Pembagian Gugus Tk Kompartemen"
    ]);
});
Route::get('/pembagian-gugus-tk-perusahaan', function () {
    return view('admin/menu penjurian/pembagian_gugus_tk_perusahaan', [
        "title" => "Pembagian Gugus Tk Perusahaan"
    ]);
});
Route::get('/publish-nilai', function () {
    return view('admin/menu penjurian/publish_nilai', [
        "title" => "Publish Nilai"
    ]);
});
Route::get('/integrasi-nilai-kipg', function () {
    return view('admin/menu penjurian/integrasi_nilai', [
        "title" => "Integrasi Nilai KIPG"
    ]);
});
//===== MENU PENJURIAN END =====//

//===== MENU JURI START =====//
Route::get('/nilai-gugus', function () {
    return view('admin/menu juri/nilai_gugus', [
        "title" => "Nilai Gugus"
    ]);
});
Route::get('/detail-gugus-juri', function () {
    return view('admin/menu juri/detail_gugus_juri', [
        "title" => "Nilai Gugus"
    ]);
});
Route::get('/input-nilai-gugus', function () {
    return view('admin/menu juri/input_nilai_gugus', [
        "title" => "Input Nilai Gugus"
    ]);
});
Route::get('/rekap-nilai', function () {
    return view('admin/menu juri/rekap_nilai_gugus', [
        "title" => "Rekap Nilai Gugus"
    ]);
});
//===== MENU JURI END =====//

//===== MENU SPTK START =====//
Route::get('/monitoring-gugus', function () {
    return view('admin/menu sptk/monitoring_gugus', [
        "title" => "Monitoring Gugus Inovasi Kompartemen"
    ]);
});
Route::get('/rekap-nilai-gugus', function () {
    return view('admin/menu sptk/rekap_nilai_gugus', [
        "title" => "Rekap Nilai Gugus Kompartemen"
    ]);
});
//===== MENU SPTK END =====//

//===== MENU VALUE CREATION START =====//
Route::get('/koordinator-value-creation', function () {
    return view('admin/menu value creation/koordinator', [
        "title" => "Koordinator Value Creation"
    ]);
});
Route::get('/pembagian-gugus-value-creation', function () {
    return view('admin/menu value creation/pembagian_gugus', [
        "title" => "Pembagian Gugus Value Creation"
    ]);
});
Route::get('/verifikasi-penghematan', function () {
    return view('admin/menu value creation/verifikasi_penghematan', [
        "title" => "Verifikasi Penghematan"
    ]);
});
Route::get('/detail-gugus-value-creation', function () {
    return view('admin/menu value creation/detail_gugus_value_creation', [
        "title" => "Detail Gugus Value Creation"
    ]);
});
Route::get('/input-hasil-verifikasi-penghematan', function () {
    return view('admin/menu value creation/verifikasi_penghematan_input', [
        "title" => "Input Hasil Verifikasi Penghematan"
    ]);
});
Route::get('/rekap-penghematan', function () {
    return view('admin/menu value creation/rekap_penghematan', [
        "title" => "Rekap Penghematan"
    ]);
});
//===== MENU VALUE CREATION END =====//

//===== MENU KONVENSI=====//
Route::get('/inisiasi-konvensi', function () {
    return view('admin/menu konvensi/inisiasi_konvensi', [
        "title" => "Inisiasi Konvensi"
    ]);
});

Route::get('/edit-inisiasi-konvensi', function () {
    return view('admin/menu konvensi/inisiasi_konvensi_edit', [
        "title" => "Edit Inisiasi Konvensi"
    ]);
});

Route::get('/konvensi-nasional', function () {
    return view('admin/menu konvensi/konvensi_nasional', [
        "title" => "Konvensi Nasional"
    ]);
});

Route::get('/edit-gugus-konvensi-nasional', function () {
    return view('admin/menu konvensi/gugus_konvensi_nasional_edit', [
        "title" => "Edit Gugus Konvensi Nasional"
    ]);
});

Route::get('/detail-gugus-konvensi-nasional', function () {
    return view('admin/menu konvensi/gugus_konvensi_nasional_detail', [
        "title" => "Detail Gugus Konvensi Nasional"
    ]);
});

Route::get('/konvensi-internasional', function () {
    return view('admin/menu konvensi/konvensi_internasional', [
        "title" => "Konvensi Internasional"
    ]);
});

Route::get('/edit-gugus-konvensi-internasional', function () {
    return view('admin/menu konvensi/gugus_konvensi_internasional_edit', [
        "title" => "Edit Gugus Konvensi Internasional"
    ]);
});

Route::get('/detail-gugus-konvensi-internasional', function () {
    return view('admin/menu konvensi/gugus_konvensi_internasional_detail', [
        "title" => "Detail Gugus Konvensi Internasional"
    ]);
});

Route::get('/rekap-konvensi', function () {
    return view('admin/menu konvensi/rekap_konvensi', [
        "title" => "Rekap Konvensi"
    ]);
});

Route::get('/detail-rekap-konvensi', function () {
    return view('admin/menu konvensi/rekap_konvensi_detail', [
        "title" => "Detail Rekap Konvensi"
    ]);
});
//===== MENU KONVENSI=====//