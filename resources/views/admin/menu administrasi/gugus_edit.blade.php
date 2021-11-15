@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <a class="breadcrumb-item" href="/gugus">Daftar Gugus</a>
    <span class="breadcrumb-item" active>Edit Informasi Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Edit Informasi Gugus</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Sumber Gagasan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" disabled value="21.1-0199 | Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Periode Sergio</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="21.1 - SERGIO PERIODE 2021-2022" disabled>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">Metodologi</label>
                            <div class="m-b-10" style="width: 100%">
                                <select class="select2" name="state">
                                    <option value="AP">Pilih Metodologi</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">Bidang</label>
                            <div class="m-b-10" style="width: 100%">
                                <select class="select2" name="state">
                                    <option value="AP">Pilih Bidang</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-success col-md-12">
                        <label class="font-size-12">
                            <strong>Contoh Inovasi Bidang Manufaktur </strong>(Nanti ini bisa ganti)
                            <p class="font-weight-light">Menurunkan Downtime Mesin, Modifikasi Alat, Maintenance, Pemanfaatan Bahan Baku, dll.</p>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Nama Gugus</label>
                    <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Nama Gugus">
                    <div class="alert alert-success col-md-12">
                        <label class="font-size-12">
                            <strong>Contoh Nama Gugus: </strong>GIO BATU BARA, SS BOILER, 5R CEMERLANG, dll
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">Kompartemen</label>
                            <div class="m-b-10" style="width: 100%">
                                <select class="select2" name="state">
                                    <option value="AP">Pilih Kompartemen</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">Bagian</label>
                            <div class="m-b-10" style="width: 100%">
                                <select class="select2" name="state">
                                    <option value="AP">Pilih Bagian</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">Departemen</label>
                            <div class="m-b-10" style="width: 100%">
                                <select class="select2" name="state">
                                    <option value="AP">Pilih Departemen</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="font-weight-bold" for="formGroupExampleInput">No. Telepon</label>
                            <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="No Telepon">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Inovasi anda berkaitan dengan:</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Meningkatkan Kualitas Produk</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox">
                                <label for="checkbox2">Menghilangkan Denda</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox">
                                <label for="checkbox3">Menghemat Kebutuhan ATK</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox">
                                <label for="checkbox4">Pemanfaatan Limbah</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox">
                                <label for="checkbox5">Modif Mesin/Alat</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox6" type="checkbox">
                                <label for="checkbox6">Security</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkbox">
                                <input id="checkbox7" type="checkbox">
                                <label for="checkbox7">Menghemat Energi (Listrik, batubara, BBM) dan Air</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox8" type="checkbox">
                                <label for="checkbox8">Product / Jasa Baru</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox9" type="checkbox">
                                <label for="checkbox9">Laba</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox10" type="checkbox">
                                <label for="checkbox10">Safety & Health</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox11" type="checkbox">
                                <label for="checkbox11">Mempercepat Waktu</label>
                            </div>
                            <div class="checkbox">
                                <input id="checkbox12" type="checkbox">
                                <label for="checkbox12">Omzet</label>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <input id="checkbox13" type="checkbox" checked="">
                        <label for="checkbox13">Lain-lain</label>
                    </div>
                    <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Kaitan inovasi">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Tema</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Tema">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Judul</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Range Jadwal Plan (P) :</label>
                    <div class="d-flex align-items-center">
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal mulai">
                        </div>
                        <span class="p-h-10">s.d.</span>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal berakhir">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Range Jadwal Do (D) :</label>
                    <div class="d-flex align-items-center">
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal mulai">
                        </div>
                        <span class="p-h-10">s.d.</span>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal berakhir">
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Range Jadwal Check (C) :</label>
                    <div class="d-flex align-items-center">
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal mulai">
                        </div>
                        <span class="p-h-10">s.d.</span>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal berakhir">
                        </div>
                    </div>
                </div> 
                <div class="form-group">
                    <label class="font-weight-bold" for="formGroupExampleInput">Range Jadwal Action (A) :</label>
                    <div class="d-flex align-items-center">
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal mulai">
                        </div>
                        <span class="p-h-10">s.d.</span>
                        <div class="input-affix m-b-10">
                            <i class="prefix-icon anticon anticon-calendar"></i>
                            <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal berakhir">
                        </div>
                    </div>
                </div> 
            </form>
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
                    <a class="" data-toggle="modal" data-target=".fasilitator-modal">
                        <button class="btn btn-success btn-xs m-b-20">Ganti Fasilitator</button>
                    </a>
                    <!-- Modal Status -->
                    <div class="modal fade fasilitator-modal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4">Ganti Fasilitator Gugus</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="">
                                                    <table id="data-table" class="table table-bordered" style="width: 100%">
                                                        <thead>
                                                            <tr>
                                                                <th><strong>NIK</strong></th>
                                                                <th><strong>Nama</strong></th>
                                                                <th><strong>POS Title</strong></th>
                                                                <th><strong>Aksi</strong></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>T314597</td>
                                                                <td>ABDUL MALIK</td>
                                                                <td>AVP Pengantongan I A & Produk Samping</td>
                                                                <td>
                                                                    <button class="btn btn-success btn-sm">Pilih</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T314597</td>
                                                                <td>ABDUL MALIK</td>
                                                                <td>AVP Pengantongan I A & Produk Samping</td>
                                                                <td>
                                                                    <button class="btn btn-success btn-sm">Pilih</button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>T314597</td>
                                                                <td>ABDUL MALIK</td>
                                                                <td>AVP Pengantongan I A & Produk Samping</td>
                                                                <td>
                                                                    <button class="btn btn-success btn-sm">Pilih</button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_anggota">
                        <button class="btn btn-danger btn-xs m-b-20">Hapus Anggota</button>
                        <!-- Modal Delete -->
                        <div class="modal fade" id="delete_anggota">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="text-center font-size-150">
                                            <i class="anticon anticon-warning text-warning"></i>
                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Anggota?</p>
                                        </div>
                                        <div class="text-center">
                                            <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                            <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <button class="btn btn-success btn-xs m-b-20">Pilih sebagai Sekretaris</button>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Upload Dokumen</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-2">
                    <label class="font-weight-bold" for="formGroupExampleInput">Tahapan</label>
                    <div class="m-b-10" style="width: 100%">
                        <select class="select2" name="state">
                            <option value="AP">Pilih Tahapan</option>
                            <option value="NL">Nails</option>
                            <option value="BN">Bananas</option>
                            <option value="HL">Helicopters</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <label class="font-weight-bold" for="formGroupExampleInput">Jenis Dokumen</label>
                    <div class="m-b-10" style="width: 100%">
                        <select class="select2" name="state">
                            <option value="AP">Pilih Jenis Dokumen</option>
                            <option value="NL">Nails</option>
                            <option value="BN">Bananas</option>
                            <option value="HL">Helicopters</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-5">
                    <label class="font-weight-bold" for="formGroupExampleInput">File Dokumen</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <p class="text-danger font-size-12">
                        Format file ppt, pptx, doc, docx, xls, xlsx, pdf, jpg, jpeg, atau png dan Ukuran maksimal 3MB/file
                    </p>
                </div>
                <div class="col-lg-2">
                    <label class="font-weight-bold" for="formGroupExampleInput">Upload & Simpan</label>
                    <button class="btn btn-success btn-tone m-r-5" style="width: 100%"><i class="fas fa-upload"></i>  Upload</button>
                </div>
            </div>
        </div>
        
        {{-- INI NANTI HARUS SESUAI SAMA JENIS DOKUMEN YG DIPILIH --}}
        <div class="card-body">
            <h4>Intruksi Kerja (IK)</h4>
            <div class="row">
                <div class="col-lg-4">
                    <label class="font-weight-bold" for="formGroupExampleInput">Standarisasi</label>
                    <div class="m-b-10" style="width: 100%">
                        <select class="select2" name="state">
                            <option value="AP">Pilih Standarisasi</option>
                            <option value="NL">Nails</option>
                            <option value="BN">Bananas</option>
                            <option value="HL">Helicopters</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-8">
                    <label class="font-weight-bold" for="formGroupExampleInput">Nomor</label>
                    <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Nomor">
                </div>
            </div>
            <label class="font-weight-bold" for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Judul">
        </div>
        <div class="card-body">
            <h4>Makalah Final</h4>
            <label class="font-weight-bold" for="formGroupExampleInput">Judul Abstrak</label>
            <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Judul abstrak">
            <label class="font-weight-bold" for="formGroupExampleInput">Isi Abstrak</label>
            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Isi abstrak" rows="5"></textarea>
        </div>
        <div class="card-body">
            <h4>Penghematan</h4>
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
                                            <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Angka">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="m-b-10" style="width: 100%">
                                                <select class="select2" name="state">
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
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai">
                                    </div>
                                </div>
                            </div>
                            <p class="text-dark"><strong>1.2. PENGELUARAN/ BIAYA-BIAYA</strong></p>
                            <p class="text-dark">Jenis dan jumlah Biaya yang dikeluarkan selama kegiatan Inovasi,</p>
                            <p class="text-dark"><i>Contoh: Biaya Investasi, Biaya Perbaikan, Biaya Operasional, dsb.</i></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keterangan">
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-11">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai">
                                        </div>
                                        <button class="btn btn-icon btn-danger btn-rounded btn-tone col-md-1">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-11">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                        </div>
                                        <button class="btn btn-icon btn-success btn-rounded btn-tone col-md-1">
                                            <i class="fas fa-plus"></i>
                                        </button>
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
                                            <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Angka">
                                        </div>
                                        <div class="col-md-7">
                                            <div class="m-b-10" style="width: 100%">
                                                <select class="select2" name="state">
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
                                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai">
                                    </div>
                                </div>
                            </div>
                            <p class="text-dark"><strong>2.2. POTENSI PENGELUARAN/ BIAYA-BIAYA</strong></p>
                            <p class="text-dark">Jenis dan jumlah Potensi Biaya yang dikeluarkan selama kegiatan Inovasi,</p>
                            <p class="text-dark"><i>Contoh: Biaya Investasi, Biaya Perbaikan, Biaya Operasional, dsb.</i></p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Keterangan">
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-11">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nilai">
                                        </div>
                                        <button class="btn btn-icon btn-danger btn-rounded btn-tone col-md-1">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="input-group mb-3 col-md-11">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-default">Rp</span>
                                            </div>
                                            <input type="text" class="form-control" id="formGroupExampleInput" value="0" disabled>
                                        </div>
                                        <button class="btn btn-icon btn-success btn-rounded btn-tone col-md-1">
                                            <i class="fas fa-plus"></i>
                                        </button>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_dokumen">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_dokumen">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Dokumen Pendukung?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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

    <div class="m-t-20">
        <button class="btn btn-success btn-block">Simpan Perubahan</button>
    </div
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