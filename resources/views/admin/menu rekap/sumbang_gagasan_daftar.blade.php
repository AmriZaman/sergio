@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-book"></i>   Menu Rekap</span>
    <a class="breadcrumb-item" href="/sumbang-gagasan">Daftar Gagasan</a>
    <span class="breadcrumb-item" active>Daftar Sergio</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Sergio</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label class="font-weight-bold">Sumber Gagasan</label>
                    <input type="text" class="form-control" name="judul_usulan" placeholder="Judul Usulan" disabled value="21.1-0214 | Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031">
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pilih Periode Sumbang Gagasan</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" value="21.1 - SERGIO PERIODE 2021-2022" disabled>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Pilih Metodologi</label>
                            <select class="select2" name="state">
                                <option value="AP">SS</option>
                                <option value="NL">GIO</option>
                                <option value="BN">GIM</option>
                                <option value="BN">IP</option>
                                <option value="HL">5R</option>
                                
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Pilih Bidang</label>
                            <select class="select2" name="state">
                                <option value="PL">Pilih Bidang</option>
                                <option value="AP">Perkantoran</option>
                                <option value="NL">Manufaktur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Nama Gugus</label>
                    <input type="text" class="form-control" name="judul_usulan" placeholder="Contoh: SS Hara, GIO Optima, GIO GGMU">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Pilih Kompartemen Tujuan</label>
                            <select class="select2" name="state">
                                <option value="AP">Kompartemen D</option>
                                <option value="NL">Kompartemen A</option>
                                <option value="BN">Kompartemen B</option>
                                <option value="HL">Kompartemen C</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Pilih Departemen Tujuan</label>
                            <select class="select2" name="state">
                                <option value="AP">Departemen A</option>
                                <option value="NL">Departemen B</option>
                                <option value="BN">Departemen C</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label class="font-weight-bold">Pilih Bagian</label>
                            <select class="select2" name="state">
                                <option value="AP">Pilih Bagian</option>
                                <option value="NL">Bagian A</option>
                                <option value="BN">Bagian B</option>
                                <option value="HL">Bagian C</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="font-weight-bold">Nomor Telepon</label>
                            <input type="text" class="form-control" name="judul_usulan" placeholder="No. Telp">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="font-weight-bold">Pilih Fasilitator</label>
                    <select class="select2" name="state">
                        <option value="AP">Handoko</option>
                        <option value="NL">Susi Susanti</option>
                        <option value="BN">Wahyudi</option>
                        <option value="HL">Johan</option>
                    </select>
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
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul" value="Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031">
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
                <div class="col-lg-4 text-center m-t-150">
                    <a class="" data-toggle="modal" data-target=".anggota-modal">
                        <button class="btn btn-success btn-xs m-b-20">Tambah Anggota</button>
                    </a>
                    {{-- modal --}}
                    <div class="modal fade anggota-modal">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4">Tambah Anggota Gugus</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="">
                                                    <table id="data-table2" class="table table-bordered" style="width: 100%">
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
        <div class="m-t-20">
            <button class="btn btn-success btn-block">Daftar</button>
        </div>
    </div>
@endsection



@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>

    {{-- <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script> --}}
    {{-- <script>
        $('#data-table').DataTable({
            "scrollX": true
        });
    </script>
    <script>
        $('#data-table2').DataTable({
            "scrollX": true
        });
    </script> --}}
@endsection