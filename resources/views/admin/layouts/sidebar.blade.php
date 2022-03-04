<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fab fa-microsoft"></i>
                    </span>
                    <span class="title">Menu Utama</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ ($title === "Beranda") ? 'active' : '' }}">
                        <a href="/beranda">Beranda</a>
                    </li>
                    <li class="{{ (($title === "Panduan Inovasi") or ($title === "Tambah Panduan") or ($title === "Edit Panduan")) ? 'active' : '' }}">
                        <a href="/panduan-inovasi">Panduan Inovasi</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="title">Menu Administrasi</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Sumbang Gagasan") or ($title === "Tambah Gagasan") or ($title === "Edit Gagasan") or ($title === "Detail Gagasan")) ? 'active' : '' }}">
                        <a href="/gagasan">Daftar Gagasan</a>
                    </li>
                    <li class="{{ (($title === "Gugus") or ($title === "Edit Gugus") or ($title === "Detail Gugus")) ? 'active' : '' }}">
                        <a href="/gugus">Daftar Gugus</a>
                    </li>
                    <li class="{{ (($title === "Periode") or ($title === "Tambah Periode SG") or ($title === "Edit Periode SG") or ($title === "Tambah Periode Sergio") or ($title === "Edit Periode Sergio")) ? 'active' : '' }}">
                        <a href="/periode">Periode</a>
                    </li>
                    <li class="{{ (($title === "User") or ($title === "Edit User SG") or ($title === "Edit User Sergio")) ? 'active' : '' }}">
                        <a href="/user">User</a>
                    </li>
                    <li class="{{ ($title === "Pegawai") ? 'active' : '' }}">
                        <a href="/pegawai">Daftar Pegawai</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="title">Menu KID</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Gagasan Departemen") or ($title === "Detail Gagasan Departemen")) ? 'active' : '' }}">
                        <a href="/gagasan-departemen">Gagasan Departemen</a>
                    </li>
                    <li class="{{ (($title === "Approval Sergio") or ($title === "Detail Approval Sergio")) ? 'active' : '' }}">
                        <a href="/approval-sergio">Approval Sergio</a>
                    </li>
                    {{-- <li class="{{ (($title === "Monitoring Gugus Inovasi") or ($title === "Monitoring Gugus Inovasi")) ? 'active' : '' }}">
                        <a href="/monitoring-gugus-inovasi">Monitoring Gugus Inovasi</a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="title">Menu Fasilitator</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Approval Gagasan") or ($title === "Detail Approval Gagasan")) ? 'active' : '' }}">
                        <a href="/approval-gagasan">Approval Usulan Gagasan</a>
                    </li>
                    <li class="{{ (($title === "Approval Plan Action Inovasi") or ($title === "Detail Approval Plan Action Inovasi")) ? 'active' : '' }}">
                        <a href="/approval-plan-action">Approval Plan Action Inovasi</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="title">Menu Manager</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Verifikasi Gagasan") or ($title === "Detail Verifikasi Gagasan")) ? 'active' : '' }}">
                        <a href="/verifikasi-manager">Verifikasi Usulan Gagasan</a>
                    </li>
                    <li class="{{ (($title === "Verifikasi Plan Action Inovasi") or ($title === "Detail Verifikasi Plan Action Inovasi")) ? 'active' : '' }}">
                        <a href="/verifikasi-plan-action">Verifikasi Plan Action Inovasi</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-tie"></i>
                    </span>
                    <span class="title">Menu SPTK</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Monitoring Gugus Inovasi Kompartemen") or ($title === "Detail Pengajuan Anggaran KIK") or ($title === "Tambah Pengajuan Anggaran KIK")) ? 'active' : '' }}">
                        <a href="monitoring-gugus">Monitoring Gugus Inovasi</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Rekap Nilai Gugus Kompartemen")) ? 'active' : '' }}">
                        <a href="rekap-nilai-gugus">Rekap Nilai Gugus</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-users"></i>
                    </span>
                    <span class="title">Menu Value Creation</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Koordinator Value Creation")) ? 'active' : '' }}">
                        <a href="koordinator-value-creation">Pilih Koordinator</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Pembagian Gugus Value Creation")) ? 'active' : '' }}">
                        <a href="pembagian-gugus-value-creation">Pembagian Gugus</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Verifikasi Penghematan") or ($title === "Input Hasil Verifikasi Penghematan") or ($title === "Detail Gugus Value Creation")) ? 'active' : '' }}">
                        <a href="verifikasi-penghematan">Verifikasi Penghematan</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Rekap Penghematan")) ? 'active' : '' }}">
                        <a href="rekap-penghematan">Rekap Penghematan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-building"></i>
                    </span>
                    <span class="title">Menu Departemen</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Verifikasi Departemen") or ($title === "Detail Verifikasi Departemen")) ? 'active' : '' }}">
                        <a href="verifikasi-departemen">Verifikasi Gagasan Departemen</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-book"></i>
                    </span>
                    <span class="title">Rekap Kegiatan Inovasi</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Roadmap Inovasi")) ? 'active' : '' }}">
                        <a href="/roadmap-inovasi">Roadmap Inovasi</a>
                    </li>
                    <li class="{{ (($title === "Rekap Sumbang Gagasan") or ($title === "Detail Sumbang Gagasan") or ($title === "Daftarkan Sumbang Gagasan")) ? 'active' : '' }}">
                        <a href="/sumbang-gagasan">Sumbang Gagasan</a>
                    </li>
                    <li class="{{ ($title === "SS") ? 'active' : '' }}">
                        <a href="/sistem-saran">Sistem Saran</a>
                    </li>
                    <li class="{{ ($title === "GIO") ? 'active' : '' }}">
                        <a href="/GIO">Gugus Inovasi Operasional</a>
                    </li>
                    <li class="{{ ($title === "GIM") ? 'active' : '' }}">
                        <a href="/GIM">Gugus Inovasi Manajemen</a>
                    </li>
                    <li class="{{ ($title === "5R") ? 'active' : '' }}">
                        <a href="/5R">5R</a>
                    </li>
                    <li class="{{ ($title === "Ranking Sergio") ? 'active' : '' }}">
                        <a href="/ranking-sg">Ranking Sumbang Gagasan</a>
                    </li>
                    <li class="{{ ($title === "Grafik Sergio") ? 'active' : '' }}">
                        <a href="/grafik-sg">Grafik Sumbang Gagasan</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-clock"></i>
                    </span>
                    <span class="title">History</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ ($title === "History Gagasan") ? 'active' : '' }}">
                        <a href="/history-gagasan">History Approval Gagasan</a>
                    </li>
                    <li class="{{ ($title === "History Sergio") ? 'active' : '' }}">
                        <a href="/history-sergio">History Approval Sergio</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-file-alt"></i>
                    </span>
                    <span class="title">Laporan</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ ($title === "Laporan Gagasan") ? 'active' : '' }}">
                        <a href="/laporan-gagasan">Laporan Gagasan</a>
                    </li>
                    <li class="{{ ($title === "Laporan Data Mentah") ? 'active' : '' }}">
                        <a href="/laporan-data-mentah">Laporan Data Mentah</a>
                    </li>
                    <li class="{{ ($title === "Laporan Sergio") ? 'active' : '' }}">
                        <a href="/laporan-sergio">Laporan Sergio</a>
                    </li>
                    <li class="{{ ($title === "Memo KID") ? 'active' : '' }}">
                        <a href="/laporan-kid">Memo Laporan KID</a>
                    </li>
                    <li class="{{ ($title === "Memo SPTK") ? 'active' : '' }}">
                        <a href="/laporan-sptk">Memo Laporan SPTK</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <span class="title">Menu Penjurian</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Inisiasi Penilaian") or ($title === "Inisiasi Penilaian")) ? 'active' : '' }}">
                        <a href="/inisiasi-penilaian">Inisiasi Penilaian</a>
                    </li>
                    {{-- <li class="{{ (($title === "Inisiasi Quota") or ($title === "Inisiasi Quota")) ? 'active' : '' }}">
                        <a href="/inisiasi-quota">Inisiasi Quota</a>
                    </li> --}}
                    <li class="{{ (($title === "Pilih Koordinator Perusahaan") or ($title === "Pilih Koordinator Perusahaan")) ? 'active' : '' }}">
                        <a href="/pilih-koordinator-perusahaan">Koordinator Juri</a>
                    </li>
                    <li class="{{ (($title === "Pilih Juri Kompartemen") or ($title === "Pilih Juri Kompartemen")) ? 'active' : '' }}">
                        <a href="/pilih-juri-kompartemen">Pilih Juri Kompartemen</a>
                    </li>
                    <li class="{{ (($title === "Pilih Juri Perusahaan") or ($title === "Pilih Juri Perusahaan")) ? 'active' : '' }}">
                        <a href="/pilih-juri-perusahaan">Pilih Juri Perusahaan</a>
                    </li>
                    <li class="{{ (($title === "Kelompok Juri Kompartemen") or ($title === "Kelompok Juri Kompartemen")) ? 'active' : '' }}">
                        <a href="/kelompok-juri-kompartemen">Kelompok Juri Kompartemen</a>
                    </li>
                    <li class="{{ (($title === "Kelompok Juri Perusahaan") or ($title === "Kelompok Juri Perusahaan")) ? 'active' : '' }}">
                        <a href="/kelompok-juri-perusahaan">Kelompok Juri Perusahaan</a>
                    </li>
                    <li class="{{ (($title === "Pembagian Gugus Tk Kompartemen") or ($title === "Pembagian Gugus Tk Kompartemen")) ? 'active' : '' }}">
                        <a href="/pembagian-gugus-tk-kompartemen">Pembagian Gugus Tk Kompartemen</a>
                    </li>
                    <li class="{{ (($title === "Pembagian Gugus Tk Perusahaan") or ($title === "Pembagian Gugus Tk Perusahaan")) ? 'active' : '' }}">
                        <a href="/pembagian-gugus-tk-perusahaan">Pembagian Gugus Tk Perusahaan</a>
                    </li>
                    <li class="{{ (($title === "Publish Nilai") or ($title === "Publish Nilai")) ? 'active' : '' }}">
                        <a href="/publish-nilai">Publish Nilai</a>
                    </li>
                    <li class="{{ (($title === "Integrasi Nilai KIPG") or ($title === "Integrasi Nilai KIPG")) ? 'active' : '' }}">
                        <a href="/integrasi-nilai-kipg">Integrasi Nilai KIPG</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <span class="title">Menu Juri</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Nilai Gugus") or ($title === "Input Nilai Gugus")) ? 'active' : '' }}">
                        <a href="/nilai-gugus">Nilai Gugus</a>
                    </li>
                    <li class="{{ (($title === "Rekap Nilai Gugus")) ? 'active' : '' }}">
                        <a href="/rekap-nilai">Rekap Nilai Gugus</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="fas fa-trophy"></i>
                    </span>
                    <span class="title">Menu Konvensi</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ (($title === "Inisiasi Konvensi") or ($title === "Edit Inisiasi Konvensi")) ? 'active' : '' }}">
                        <a href="/inisiasi-konvensi">Inisiasi Konvensi</a>
                    </li>
                    <li class="{{ (($title === "Konvensi Nasional") or ($title === "Edit Gugus Konvensi Nasional") or ($title === "Detail Gugus Konvensi Nasional")) ? 'active' : '' }}">
                        <a href="/konvensi-nasional">Konvensi Nasional</a>
                    </li>
                    <li class="{{ (($title === "Konvensi Internasional") or ($title === "Edit Gugus Konvensi Internasional") or ($title === "Detail Gugus Konvensi Internasional")) ? 'active' : '' }}">
                        <a href="/konvensi-internasional">Konvensi Internasional</a>
                    </li>
                    <li class="{{ (($title === "Rekap Konvensi") or ($title === "Detail Rekap Konvensi")) ? 'active' : '' }}">
                        <a href="/rekap-konvensi">Rekap Konvensi</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>