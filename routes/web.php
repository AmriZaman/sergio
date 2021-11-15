<?php


use App\Models\Berita;
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
//===== LANDING PAGE START =====//
Route::get('/', function () {
    return view('landpage/home', [
        "title" => "Home"
    ]);
});
//===== LANDING PAGE END =====//

//===== LOGIN START =====//
Route::get('/login', function () {
    return view('admin/login/login', [
        "title" => "Login"
    ]);
});
//===== LOGIN END =====//

//===== MENU UTAMA START =====//
//BERANDA
Route::get('/beranda', function () {
    return view('admin/menu utama/beranda', [
        "title" => "Beranda"
    ]);
});
// BERITA

Route::get('/berita', function () {
    return view('admin/menu utama/berita_list', [
        "title" => "Berita",
        "posts" => Berita::all()
    ]);
});
Route::get('berita/{slug}', function ($slug) {
    $berita_posts = [
        [
            "$judul" => "Judul Berita 1",
            "$penulis" => "Penulis Berita 1",
            "$tanggal" => "31-10-2021",
            "$isi" => "Isi berita 1, Ea elit cupidatat eiusmod reprehenderit occaecat sit enim labore et pariatur aute aute laboris sint. Amet cupidatat amet anim dolor aliqua aliquip et consequat aliquip adipisicing sit laboris velit. Est enim nisi duis velit exercitation ut nisi. Exercitation deserunt laboris eiusmod aliqua ex et cillum sit. Ex sint labore est ullamco esse anim in ad commodo reprehenderit.",
            "$slug" => "judul-berita-satu"
        ],
        [
            "$judul" => "Judul Berita 2",
            "$penulis" => "Penulis Berita 2",
            "$tanggal" => "28-10-2021",
            "$isi" => "Isi berita 2, Sunt magna eu adipisicing id amet aliquip qui exercitation dolor cillum. Ut nostrud cillum aliquip duis amet amet minim minim nulla exercitation veniam laborum sit irure. In qui tempor laborum incididunt dolore ipsum ad mollit veniam. Veniam laborum reprehenderit sit aliquip nulla nulla fugiat. In commodo labore non voluptate.",
            "$slug" => "judul-berita-dua"
        ],
    ];

    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('admin/menu utama/berita_post', [
        "title" => "Detail Berita",
        "post" => $new_post
    ]);
});



Route::get('/tambah-berita', function () {
    return view('admin/menu utama/berita_create', [
        "title" => "Tambah Berita"
    ]);
});
Route::get('/edit-berita', function () {
    return view('admin/menu utama/berita_edit', [
        "title" => "Edit Berita"
    ]);
});
// PANDUAN INOVASI
Route::get('/panduan-inovasi', function () {
    return view('admin/menu utama/panduan_list', [
        "title" => "Panduan Inovasi"
    ]);
});
Route::get('/tambah-panduan', function () {
    return view('admin/menu utama/panduan_create', [
        "title" => "Tambah Panduan"
    ]);
});
Route::get('/edit-panduan', function () {
    return view('admin/menu utama/panduan_edit', [
        "title" => "Edit Panduan"
    ]);
});
//===== MENU UTAMA END =====//

//===== MENU ADMINISTRASI START =====//
// DAFTAR GAGASAN
Route::get('/gagasan', function () {
    return view('admin/menu administrasi/gagasan', [
        "title" => "Sumbang Gagasan"
    ]);
});
Route::get('/tambah-gagasan', function () {
    return view('admin/menu administrasi/gagasan_create', [
        "title" => "Tambah Gagasan"
    ]);
});
Route::get('/edit-gagasan', function () {
    return view('admin/menu administrasi/gagasan_edit', [
        "title" => "Edit Gagasan"
    ]);
});
Route::get('/detail-gagasan', function () {
    return view('admin/menu administrasi/gagasan_detail', [
        "title" => "Detail Gagasan"
    ]);
});

// DAFTAR GUGUS
Route::get('/gugus', function () {
    return view('admin/menu administrasi/gugus', [
        "title" => "Gugus"
    ]);
});
Route::get('/edit-gugus', function () {
    return view('admin/menu administrasi/gugus_edit', [
        "title" => "Edit Gugus"
    ]);
});
Route::get('/detail-gugus', function () {
    return view('admin/menu administrasi/gugus_detail', [
        "title" => "Detail Gugus"
    ]);
});

// PERIODE
Route::get('/periode', function () {
    return view('admin/menu administrasi/periode', [
        "title" => "Periode"
    ]);
});
Route::get('/tambah-periode-sg', function () {
    return view('admin/menu administrasi/periode_create_sg', [
        "title" => "Tambah Periode SG"
    ]);
});
Route::get('/edit-periode-sg', function () {
    return view('admin/menu administrasi/periode_edit_sg', [
        "title" => "Edit Periode SG"
    ]);
});
Route::get('/tambah-periode-sergio', function () {
    return view('admin/menu administrasi/periode_create_sergio', [
        "title" => "Tambah Periode Sergio"
    ]);
});
Route::get('/edit-periode-sergio', function () {
    return view('admin/menu administrasi/periode_edit_sergio', [
        "title" => "Edit Periode Sergio"
    ]);
});

// USER
Route::get('/user', function () {
    return view('admin/menu administrasi/user', [
        "title" => "User"
    ]);
});
Route::get('/edit-user-sg', function () {
    return view('admin/menu administrasi/user_edit_sg', [
        "title" => "Edit User SG"
    ]);
});
Route::get('/edit-user-sergio', function () {
    return view('admin/menu administrasi/user_edit_sergio', [
        "title" => "Edit User Sergio"
    ]);
});

// DAFTAR PEGAWAI
Route::get('/pegawai', function () {
    return view('admin/menu administrasi/daftar_pegawai', [
        "title" => "Pegawai"
    ]);
});

// NIK
Route::get('/nik', function () {
    return view('admin/menu administrasi/nik', [
        "title" => "NIK"
    ]);
});

//===== MENU ADMINISTRASI END =====//


//===== MENU KID START =====//
// GAGASAN DEPARTEMEN
Route::get('/gagasan-departemen', function () {
    return view('admin/menu kid/gagasan_departemen', [
        "title" => "Gagasan Departemen"
    ]);
});
Route::get('/detail-gagasan-departemen', function () {
    return view('admin/menu kid/gagasan_departemen_detail', [
        "title" => "Detail Gagasan Departemen"
    ]);
});

// APPROVAL SERGIO
Route::get('/approval-sergio', function () {
    return view('admin/menu kid/approval_sergio', [
        "title" => "Approval Sergio"
    ]);
});
Route::get('/detail-approval-sergio', function () {
    return view('admin/menu kid/approval_sergio_detail', [
        "title" => "Detail Approval Sergio"
    ]);
});

//===== MENU KID END =====//

//===== MENU FASILITATOR START =====//
// APPROVAL USULAN GAGASAN
Route::get('/approval-gagasan', function () {
    return view('admin/menu fasilitator/approval_gagasan', [
        "title" => "Approval Gagasan"
    ]);
});
Route::get('/detail-approval-gagasan', function () {
    return view('admin/menu fasilitator/approval_gagasan_detail', [
        "title" => "Detail Approval Gagasan"
    ]);
});
//===== MENU FASILITATOR END =====//

//===== MENU MANAGER START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-manager', function () {
    return view('admin/menu manager/verifikasi_gagasan', [
        "title" => "Verifikasi Gagasan"
    ]);
});
Route::get('/detail-verifikasi-manager', function () {
    return view('admin/menu manager/verifikasi_gagasan_detail', [
        "title" => "Detail Verifikasi Gagasan"
    ]);
});
//===== MENU MANAGER END =====//

//===== MENU DEPARTEMEN START =====//
// VERIFIKASI USULAN GAGASAN
Route::get('/verifikasi-departemen', function () {
    return view('admin/menu departemen/verifikasi_gagasan', [
        "title" => "Verifikasi Departemen"
    ]);
});
Route::get('/detail-verifikasi-departemen', function () {
    return view('admin/menu departemen/verifikasi_gagasan_detail', [
        "title" => "Detail Verifikasi Departemen"
    ]);
});
//===== MENU DEPARTEMEN END =====//

//===== MENU REKAP KEGIATAN INOVASI START =====//
// SUMBANG GAGASAN
Route::get('/sumbang-gagasan', function () {
    return view('admin/menu rekap/sumbang_gagasan', [
        "title" => "Rekap Sumbang Gagasan"
    ]);
});
Route::get('/detail-sumbang-gagasan', function () {
    return view('admin/menu rekap/sumbang_gagasan_detail', [
        "title" => "Detail Sumbang Gagasan"
    ]);
});
Route::get('/daftar-sumbang-gagasan', function () {
    return view('admin/menu rekap/sumbang_gagasan_daftar', [
        "title" => "Daftarkan Sumbang Gagasan"
    ]);
});

// SISTEM SARAN
Route::get('/sistem-saran', function () {
    return view('admin/menu rekap/sistem_saran', [
        "title" => "SS"
    ]);
});

// GIO
Route::get('/GIO', function () {
    return view('admin/menu rekap/gio', [
        "title" => "GIO"
    ]);
});

// GIM
Route::get('/GIM', function () {
    return view('admin/menu rekap/gim', [
        "title" => "GIM"
    ]);
});

// 5R
Route::get('/5R', function () {
    return view('admin/menu rekap/5r', [
        "title" => "5R"
    ]);
});

// RANKING SG
Route::get('/ranking-sg', function () {
    return view('admin/menu rekap/ranking', [
        "title" => "Ranking Sergio"
    ]);
});

// GRAFIK SG
Route::get('/grafik-sg', function () {
    return view('admin/menu rekap/grafik', [
        "title" => "Grafik Sergio"
    ]);
});

//===== MENU REKAP KEGIATAN INOVASI END =====//

//===== MENU HISTORY START =====//
// HISTORY GAGASAN
Route::get('/history-gagasan', function () {
    return view('admin/menu history/history_gagasan', [
        "title" => "History Gagasan"
    ]);
});

// HISTORY SERGIO
Route::get('/history-sergio', function () {
    return view('admin/menu history/history_sergio', [
        "title" => "History Sergio"
    ]);
});
//===== MENU HISTORY END =====//

//===== MENU LAPORAN START =====//
// LAPORAN GAGASAN
Route::get('/laporan-gagasan', function () {
    return view('admin/menu laporan/laporan_gagasan', [
        "title" => "Laporan Gagasan"
    ]);
});

// LAPORAN DATA MENTAH
Route::get('/laporan-data-mentah', function () {
    return view('admin/menu laporan/laporan_data_mentah', [
        "title" => "Laporan Data Mentah"
    ]);
});

// LAPORAN SERGIO
Route::get('/laporan-sergio', function () {
    return view('admin/menu laporan/laporan_sergio', [
        "title" => "Laporan Sergio"
    ]);
});

// MEMO LAPORAN KID
Route::get('/laporan-kid', function () {
    return view('admin/menu laporan/laporan_kid', [
        "title" => "Memo KID"
    ]);
});

// MEMO LAPORAN SPTK
Route::get('/laporan-sptk', function () {
    return view('admin/menu laporan/laporan_sptk', [
        "title" => "Memo SPTK"
    ]);
});



// HISTORY SERGIO

//===== MENU LAPORAN END =====//