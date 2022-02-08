@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
    <span class="breadcrumb-item" active>Inisiasi Konvensi</span>

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
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Nama Konvensi">
                        </div>
                        <div class="form-group col-md-5">
                            <div class="d-flex align-items-center">
                                <input type="text" class="form-control datepicker-input" name="start" placeholder="Tanggal Mulai">
                                <span class="p-h-10">to</span>
                                <input type="text" class="form-control datepicker-input" name="end" placeholder="Tanggal Berakhir">
                            </div>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Level Konvensi</option>
                                <option value="NL">Nasional</option>
                                <option value="BN">Internasional</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="m-b-30 col-md-2">
                    <button class="btn btn-success m-r-5 col-md-12">Inisiasi</button>
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
                            <th><strong>No</strong></th>
                            <th><strong>Nama Konvensi</strong></th>
                            <th><strong>Level Konvensi</strong></th>
                            <th><strong>Tanggal Dimulai</strong></th>
                            <th><strong>Tanggal Berakhir</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>TKMPN XXV</td>
                            <td>Nasional</td>
                            <td>21-10-2021</td>
                            <td>27-11-2021</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/edit-inisiasi-konvensi">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
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
                                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Konvensi?</p>
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
                        <tr class="">
                            <td>2</td>
                            <td>TKMPN XXIV</td>
                            <td>Nasional</td>
                            <td>21-10-2021</td>
                            <td>27-11-2021</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/edit-inisiasi-konvensi">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
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
                                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Konvensi?</p>
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
                        <tr class="">
                            <td>3</td>
                            <td>Germany Inovation Award</td>
                            <td>Internasional</td>
                            <td>21-10-2021</td>
                            <td>27-11-2021</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/edit-inisiasi-konvensi">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
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
                                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Inisiasi Konvensi?</p>
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
