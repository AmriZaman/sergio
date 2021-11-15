@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <a class="breadcrumb-item" href="/gugus">Daftar Gugus</a>
    <span class="breadcrumb-item" active>Detail Informasi Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Detail Informasi Gugus</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
        </div>
        <div class="card-body border-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Nomor Registrasi</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                                </tr>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Metodologi</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">SS</td>
                                </tr>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Kategori</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">Perkantoran</td>
                                </tr>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Nama Gugus</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">SS COLEK 2.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Kompartemen</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">Komp Umum</td>
                                </tr>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Departemen</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">Dep Corporate Social Responsibility</td>
                                </tr>
                                <tr>
                                    <td class="text-dark align-top" style="width: 30%"><strong>Bagian</strong></td>
                                    <td class="text-dark align-top" style="width: 5%">:</td>
                                    <td class="text-dark align-top" style="width: 65%">Bag Administrasi Keuangan</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-bottom">
            <h5><strong>Inovasi ini berkaitan dengan</strong></h5>
            <p class="m-b-15 m-l-10 text-dark"><i class="fas fa-caret-right"></i> Lain-lain (Menihilkan)</p>
            {{-- <p class="m-b-15">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-dark"><i class="fas fa-caret-right"></i> Lain-lain (Menihilkan)</li>
                </ul>
            </p> --}}
            <h5><strong>Tema</strong></h5>
            <p class="m-b-15 text-dark">Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</p>
            <h5><strong>Judul</strong></h5>
            <p class="m-b-15 text-dark">Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</p>
            <h5><strong>Status</strong></h5>
            <p class="m-b-15 text-dark">APPROVED</p>
            <h5><strong>Catatan</strong></h5>
            <p class="m-b-15 text-dark">Lanjutkan</p>
            <h5><strong>Range Jadwal Plan (P)</strong></h5>
            <p class="m-b-15 text-dark">01-02-2021 s.d. 28-02-2021</p>
            <h5><strong>Range Jadwal Do (D)</strong></h5>
            <p class="m-b-15 text-dark">01-03-2021 s.d. 15-03-2021</p>
            <h5><strong>Range Jadwal Check (C)</strong></h5>
            <p class="m-b-15 text-dark">16-03-2021 s.d. 31-03-2021</p>
            <h5><strong>Range Jadwal Action (A)</strong></h5>
            <p class="m-b-15 text-dark">01-04-2021 s.d. 30-04-2021</p>
        </div>
    </div>


    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Susunan Keanggotaan Gugus</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 text-center m-b-15">
                    <h4><strong>KETUA GUGUS</strong></h4>
                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <h4>ARIEF SATRIYO WIBOWO, S.E.</h4>
                    <p>T525297</p>
                    <p>AVP Administrasi Keuangan</p>
                </div>
                <div class="col-lg-4 text-center m-b-15">
                    <h4><strong>FASILITATOR</strong></h4>
                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <h4>ARIEF SATRIYO WIBOWO, S.E.</h4>
                    <p>T525297</p>
                    <p>AVP Administrasi Keuangan</p>
                </div>
                <div class="col-lg-4 text-center m-b-15">
                    <h4><strong>SEKRETARIS GUGUS</strong></h4>
                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <h4>ARIEF SATRIYO WIBOWO, S.E.</h4>
                    <p>T525297</p>
                    <p>AVP Administrasi Keuangan</p>
                </div>
            </div>
            <div class="m-t-20 text-center">
                <h4><strong>ANGGOTA GUGUS</strong></h4>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center m-b-20">
                    <div class="avatar avatar-image" style="width: 150px; height:150px">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <h4>ARIEF SATRIYO WIBOWO, S.E.</h4>
                    <p>T525297</p>
                    <p>AVP Administrasi Keuangan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion m-b-20" id="accordion-plan">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" href="#collapsePlan">
                        <span>Tahapan Plan (P)</span>
                    </a>
                </h4>
            </div>
            <div id="collapsePlan" class="collapse show" data-parent="#accordion-plan">
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Dokumen Pendukung</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Jenis Dokumen</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOTULEN</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>NOTULEN</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="accordion m-b-20" id="accordion-do">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" href="#collapseDo">
                        <span>Tahapan Do (D)</span>
                    </a>
                </h4>
            </div>
            <div id="collapseDo" class="collapse show" data-parent="#accordion-do">
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Dokumen Pendukung</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Jenis Dokumen</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOTULEN</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion m-b-20" id="accordion-check">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    <a data-toggle="collapse" href="#collapseCheck">
                        <span>Tahapan Check (C)</span>
                    </a>
                </h5>
            </div>
            <div id="collapseCheck" class="collapse show" data-parent="#accordion-check">
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Dokumen Pendukung</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Jenis Dokumen</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOTULEN</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="accordion m-b-20" id="accordion-action">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    <a data-toggle="collapse" href="#collapseAction">
                        <span>Tahapan Action (A)</span>
                    </a>
                </h5>
            </div>
            <div id="collapseAction" class="collapse show" data-parent="#accordion-action">
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Dokumen Pendukung</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Jenis Dokumen</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>NOTULEN</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Instruksi Kerja</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Standarisasi</strong></th>
                                    <th scope="col"><strong>Nomor</strong></th>
                                    <th scope="col"><strong>Judul</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>IK</td>
                                    <td>PG-IK-69-0031</td>
                                    <td>Mekanisme Penagihan Mitra Binaan</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Makalah Final</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Judul Abstrak</strong></th>
                                    <th scope="col"><strong>Isi Abstrak</strong></th>
                                    <th scope="col"><strong>Tanggal Upload</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                                    <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                                    <td>21-09-2021</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Realisasi dan Potensi</label>
                    <table>
                        <tbody>
                            <tr class="text-dark">
                                <td class="align-text-top" style="width: 15px"><p class="text-dark"><strong>1.</strong></p></td>
                                <td>
                                    <p class="text-dark"><strong>REALISASI PENGHEMATAN/PENDAPATAN</strong></p>
                                    <p class="text-dark">Merupakan jumlah pendapatan/penghematan riil yang dihasilkan oleh gugus selama proyek inovasi/kegiatan improvement (dalam hal ini adalah periode data yang dipakai gugus dalam Tahapan Check).</p>
                                    <p class="text-dark"><strong>1.1. PENGHEMATAN / PENDAPATAN</strong></p>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p class="text-dark">Periode data yang dipakai Gugus Selama Periode CHECK:</p>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Angka" disabled>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="m-b-10" style="width: 100%">
                                                        <select class="select2" name="state" disabled>
                                                            <option value="minggu">Minggu</option>
                                                            <option value="bulan">Bulan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="text-dark">Total Penghematan/Pendapatan Gugus Selama Periode CHECK (1.1):</p>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark"><strong>1.2. PENGELUARAN/ BIAYA-BIAYA</strong></p>
                                    <p class="text-dark">Jenis dan jumlah Biaya yang dikeluarkan selama kegiatan Inovasi,</p>
                                    <p class="text-dark"><i>Contoh: Biaya Investasi, Biaya Perbaikan, Biaya Operasional, dsb.</i></p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keterangan" disabled>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3 col-md-12">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai" disabled>
                                            </div>
                                            <div class="input-group mb-3 col-md-12">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark"><strong>Total Realisasi Penghematan/ Pendapatan Bersih (Pendapatan 1.1 – Biaya 1.2):</strong></p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-dark">
                                <td class="align-text-top" style="width: 15px"><p class="text-dark"><strong>2.</strong></p></td>
                                <td>
                                    <p class="text-dark"><strong>POTENSI PENGHEMATAN/PENDAPATAN</strong></p>
                                    <p class="text-dark">Merupakan jumlah pendapatan/penghematan potensial atau peluang pendapatan/penghematan yang dihasilkan oleh gugus selama periode yang ditetapkan oleh gugus. (misal : gugus memproyeksikan peluang pendapatan/penghematan selama 1 tahun.)</p>
                                    <p class="text-dark"><strong>2.1. POTENSI PENGHEMATAN / PENDAPATAN</strong></p>
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <p class="text-dark">Periode data yang dipakai Gugus Selama Periode CHECK:</p>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Angka" disabled>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="m-b-10" style="width: 100%">
                                                        <select class="select2" name="state" disabled>
                                                            <option value="minggu">Minggu</option>
                                                            <option value="bulan">Bulan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <p class="text-dark">Total Penghematan/Pendapatan Gugus Selama Periode CHECK (2.1):</p>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark"><strong>2.2. POTENSI PENGELUARAN/ BIAYA-BIAYA</strong></p>
                                    <p class="text-dark">Jenis dan jumlah Potensi Biaya yang dikeluarkan selama kegiatan Inovasi,</p>
                                    <p class="text-dark"><i>Contoh: Biaya Investasi, Biaya Perbaikan, Biaya Operasional, dsb.</i></p>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keterangan" disabled>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="input-group mb-3 col-md-12">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai" disabled>
                                            </div>
                                            <div class="input-group mb-3 col-md-12">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark"><strong>Total POTENSI Penghematan/ Pendapatan Bersih (Pendapatan 2.1 – Biaya 2.2):</strong></p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>

    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $('#data-table').DataTable({
            "scrollX": true
        });
    </script>

    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker-input').datepicker();
    </script>
@endsection