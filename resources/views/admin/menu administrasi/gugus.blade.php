@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>Daftar Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Gugus Inovasi & 5R</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-2">
                            <select class="select2" name="state">
                                <option value="AP">Semua Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-2">
                            <select class="select2" name="state">
                                <option value="AP">Semua Status</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-2">
                            <select class="select2" name="state">
                                <option value="AP">Semua Metodologi</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-2">
                            <select class="select2" name="state">
                                <option value="AP">Semua Kompartemen Tujuan</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-2">
                            <select class="select2" name="state">
                                <option value="AP">Semua Departemen Tujuan</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-30 col-md-2">
                            <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered">
                    <thead>
                        <tr class="">
                            <th><strong>No. Reg.</strong></th>
                            <th><strong>Departemen</strong></th>
                            <th><strong>Tgl Kirim</strong></th>
                            <th><strong>Gugus</strong></th>
                            <th><strong>Metodologi</strong></th>
                            <th style="width: 200px"><strong>Judul</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>P/R1</strong></th>
                            <th><strong>D/R2</strong></th>
                            <th><strong>C/R3</strong></th>
                            <th><strong>A/R4</strong></th>
                            <th><strong>R5</strong></th>
                            <th><strong>Makalah Final</strong></th>
                            <th><strong>IK</strong></th>
                            <th><strong>Penghematan</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>SS COLEK 2.</td>
                            <td class="text-center">SS</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                    <button class="badge badge-pill badge-green font-size-13">
                                        APPROVED
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade status-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Edit Status Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="status_gugus">Pilih Status Gugus</label>
                                                        <div class="m-b-15">
                                                            <select class="select2" name="state">
                                                                <option value="AP">Apples</option>
                                                                <option value="NL">Nails</option>
                                                                <option value="BN">Bananas</option>
                                                                <option value="HL">Helicopters</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center">
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/edit-gugus">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gugus">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="delete_gugus">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Gugus?</p>
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
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>SS COLEK 2.</td>
                            <td class="text-center">SS</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                    <button class="badge badge-pill badge-green font-size-13">
                                        APPROVED
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade status-modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Edit Status Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="status_gugus">Pilih Status Gugus</label>
                                                        <div class="m-b-15">
                                                            <select class="select2" name="state">
                                                                <option value="AP">Apples</option>
                                                                <option value="NL">Nails</option>
                                                                <option value="BN">Bananas</option>
                                                                <option value="HL">Helicopters</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center">
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/edit-gugus">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gugus">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal Delete -->
                                        <div class="modal fade" id="delete_gugus">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Gugus?</p>
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
@endsection