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
                    <li class="{{ (($title === "Berita") or ($title === "Tambah Berita") or ($title === "Detail Berita") or ($title === "Edit Berita")) ? 'active' : '' }}">
                        <a href="/berita">Berita</a>
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
                    <li class="{{ ($title === "NIK") ? 'active' : '' }}">
                        <a href="/nik">Migrasi NIK</a>
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
                        <a href="verifikasi-manager">Verifikasi Usulan Gagasan</a>
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
        </ul>
    </div>
</div>