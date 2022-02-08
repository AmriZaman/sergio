@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu Penjurian</span>
    <span class="breadcrumb-item" active>Inisiasi Penilaian</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Pilih Juri Kompartemen</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Level Penilaian</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-30 col-md-2">
                            <button class="btn btn-success m-r-5 col-md-12">Inisiasi</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Juri Kompartemen</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>Periode</strong></th>
                            <th><strong>Level Penilaian</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>18.1 - SERGIO PERIODE 2021-2022</td>
                            <td>Kompartemen</td>
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
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Penilaian?</p>
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
                            <td>19.1 - SERGIO PERIODE 2021-2022</td>
                            <td>Kompartemen</td>
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
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Penilaian?</p>
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
                            <td>20.1 - SERGIO PERIODE 2021-2022</td>
                            <td>Kompartemen</td>
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
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Penilaian?</p>
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
                            <td>21.1 - SERGIO PERIODE 2021-2022</td>
                            <td>Kompartemen</td>
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
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Penilaian?</p>
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
