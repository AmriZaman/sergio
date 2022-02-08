@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
<span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
<a class="breadcrumb-item" href="/konvensi-internasional">Konvensi Internasional</a>
<span class="breadcrumb-item" active>Detail Gugus Konvensi Internasional</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Detail Gugus Konvensi Internasional</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <table class="table-responsive table-sm table-borderless col-md-12">
                                <tbody>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Konvensi</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Konvensi 1</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Nama Gugus</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">GIO Petroport</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Judul</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan Pedoman</td>
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

            <div class="card-body">
                <div class="border-bottom">
                    <h4 class="card-title">Anggota Gugus</h4>
                </div>
                <div class="row m-t-20">
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

            <div class="card-body">
                <div class="border-bottom">
                    <h4 class="card-title">Dokumen Gugus</h4>
                </div>

                <div class="accordion m-b-20 m-t-20" id="accordion-plan">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <a data-toggle="collapse" href="#collapsePlan">
                                    <span>Dokumen Konvensi</span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsePlan" class="collapse show" data-parent="#accordion-plan">
                            <div class="card-body">
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
                                                <td>Risalah</td>
                                                <td>21-09-2021</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="m-b-10 m-l-10">
                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                                                <i class="anticon anticon-download"></i>
                                                            </button> 
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>File Presentasi</td>
                                                <td>21-09-2021</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="m-b-10 m-l-10">
                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                                                <i class="anticon anticon-download"></i>
                                                            </button> 
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Video</td>
                                                <td>21-09-2021</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="m-b-10 m-l-10">
                                                            <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Watch">
                                                                <i class="anticon anticon-video-camera"></i>
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

                <div class="border-bottom">
                    <h4 class="card-title">Keterangan Juara</h4>
                </div>
                <div class="m-t-20 m-b-10" style="width: 100%">
                    <input type="text" class="form-control" placeholder="Tulis Keterangan Prestasi / Juara" value="Juara 1" disabled>
                </div>

                <div class="m-t-40">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="/konvensi-internasional">
                                <button class="btn btn-danger btn-block btn-tone">Kembali</button>
                            </a>
                        </div>
                    </div>
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
@endsection
