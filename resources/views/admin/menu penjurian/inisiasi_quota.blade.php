@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu Penjurian</span>
    <span class="breadcrumb-item" active>Inisiasi Quota</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Inisiasi Quota</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-6">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode - Level Penilaian</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Metodologi</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Metodologi</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="m-b-15 col-md-2">
                                    <input type="text" class="form-control" name="judul_usulan" placeholder="Batas Bawah">
                                </div>
                                <div class="m-b-15 col-md-1">
                                    <h4 class="text-center">-</h4>
                                </div>
                                <div class="m-b-15 col-md-2">
                                    <input type="text" class="form-control" name="judul_usulan" placeholder="Batas Atas">
                                </div>
                                <div class="m-b-15 col-md-1">
                                    <h4 class="text-center">=</h4>
                                </div>
                                <div class="m-b-15 col-md-3">
                                    <input type="text" class="form-control" name="judul_usulan" placeholder="Quota">
                                </div>
                                <div class="m-b-30 col-md-3">
                                    <button class="btn btn-success m-r-5 col-md-12">Simpan</button>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Quota</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>Periode - Level Penilaian</strong></th>
                            <th><strong>Metodologi - Bidang</strong></th>
                            <th><strong>Batas Bawah</strong></th>
                            <th><strong>Batas Atas</strong></th>
                            <th><strong>Quota</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>SERGIO PERIODE 2021-2022 - Level Kompartemen</td>
                            <td>SS - Perkantoran</td>
                            <td>80</td>
                            <td>100</td>
                            <td>10</td>
                            <td>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_periode_sg">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Quota?</p>
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
                            </td>
                        </tr>
                        <tr class="">
                            <td>SERGIO PERIODE 2021-2022 - Level Kompartemen</td>
                            <td>GIO - Perkantoran</td>
                            <td>40</td>
                            <td>80</td>
                            <td>20</td>
                            <td>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_periode_sg">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Quota?</p>
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
                            </td>
                        </tr>
                        <tr class="">
                            <td>SERGIO PERIODE 2020-2021 - Level Kompartemen</td>
                            <td>SS - Perkantoran</td>
                            <td>70</td>
                            <td>100</td>
                            <td>15</td>
                            <td>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_periode_sg">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Quota?</p>
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
                            </td>
                        </tr>
                    </tbody>
                </table>
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
