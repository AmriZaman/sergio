@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu Manager</span>
    <a class="breadcrumb-item" href="/verifikasi-plan-action">Verifikasi Plan Action Inovasi</a>
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
                    <a href="/detail-verifikasi-manager" class="btn btn-warning btn-tone m-r-5"><i class="fas fa-eye"></i>  Detail Gagasan</a>
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

    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Approve Tahapan Inovasi (Plan)</h4>
        </div>
        <div class="card-body">
            <h6>Tanggal Approve</h6>
            <div class="input-affix m-b-10">
                <i class="prefix-icon anticon anticon-calendar"></i>
                <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal approve">
            </div>
            <div class="row m-t-30">
                <div class="col-lg-6">
                    <button class="btn btn-danger" style="width: 100%">
                        <i class="fas fa-times"></i> Tolak
                    </button>
                </div>
                <div class="col-lg-6">
                    <button class="btn btn-success" style="width: 100%">
                        <i class="fas fa-check"></i> Verifikasi
                    </button>
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