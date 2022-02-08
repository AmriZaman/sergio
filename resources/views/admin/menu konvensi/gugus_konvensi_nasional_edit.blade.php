@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
<span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
<a class="breadcrumb-item" href="/konvensi-nasional">Konvensi Nasional</a>
<span class="breadcrumb-item" active>Edit Gugus Konvensi Nasional</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Edit Gugus Konvensi Nasional</h4>
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
                                        <td class="text-dark align-top" style="width: 65%">TKMPN XXV</td>
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

            <div class="card-body">
                <div class="border-bottom">
                    <h4 class="card-title">Upload Dokumen</h4>
                </div>
                <div class="row m-t-20">
                    <div class="col-lg-5">
                        <label class="font-weight-bold" for="formGroupExampleInput">Jenis Dokumen</label>
                        <div class="m-b-10" style="width: 100%">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Jenis Dokumen</option>
                                <option value="NL">Risalah</option>
                                <option value="BN">Proposal</option>
                                <option value="HL">Laporan</option>
                                <option value="PT">File Presentasi</option>
                                <option value="LV">Video</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <label class="font-weight-bold" for="formGroupExampleInput">File Dokumen</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <label class="font-weight-bold" for="formGroupExampleInput">Upload & Simpan</label>
                        <button class="btn btn-success btn-tone m-r-5" style="width: 100%"><i class="fas fa-upload"></i>  Upload</button>
                    </div>
                </div>

                <div class="accordion m-b-20" id="accordion-plan">
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
                                                <td>File Presentasi</td>
                                                <td>21-09-2021</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="m-b-10 m-l-10">
                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                                                <i class="anticon anticon-download"></i>
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
                                                <td>Video</td>
                                                <td>21-09-2021</td>
                                                <td>
                                                    <div class="row">
                                                        <a class="m-b-10 m-l-10">
                                                            <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Watch">
                                                                <i class="anticon anticon-video-camera"></i>
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

                <div class="border-bottom">
                    <h4 class="card-title">Keterangan Juara</h4>
                </div>
                <input type="text" class="form-control m-b-10" id="formGroupExampleInput" placeholder="Contoh: Diamond; Presentasi Terbaik; dll">

                <div class="m-t-40">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/konvensi-nasional">
                                <button class="btn btn-danger btn-block">Batal</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-block">Simpan Perubahan</button>
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
