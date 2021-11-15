@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>Daftar Gagasan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Sumbang Gagasan</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Status</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Kompartemen Tujuan</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Departemen Tujuan</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="m-b-30 col-lg-2 text-right">
                    <a class="btn btn-success col-md-12" href="/tambah-gagasan" data-toggle="tooltip" data-placement="bottom" title="Tambah Gagasan Baru">
                        <i class="anticon anticon-plus-circle m-r-5"></i> 
                        <span>Gagasan</span>
                    </a>
                </div>
            </div>
            
            <table id="data-table" class="table table-responsive" style="width:100%">
                <thead>
                    <tr>
                        <th><strong>No. Registrasi</strong></th>
                        <th style="width:100px"><strong>Tgl Kirim</strong></th>
                        <th><strong>Judul</strong></th>
                        <th><strong>Departemen Tujuan</strong></th>
                        <th><strong>Status</strong></th>
                        <th style="width:100px"><strong>Aksi</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>21.1-0203</td>
                        <td>21-09-2021</td>
                        <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                        <td>Komp Teknologi - Dep Keselamatan & Kesehatan Kerja</td>
                        <td>
                            <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                <button class="badge badge-pill badge-gold font-size-13">
                                    REVISI_FASILITATOR
                                </button>
                            </a>
                            <!-- Modal Status -->
                            <div class="modal fade status-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4">Edit Status Gagasan</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="status_gagasan">Pilih Status Gagasan</label>
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
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
                                </a>
                                <a class="m-b-10 m-l-10" href="/edit-gagasan">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button> 
                                </a>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gagasan">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_gagasan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Gagasan?</p>
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
                        <td>21.1-0203</td>
                        <td>21-09-2021</td>
                        <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                        <td>Komp Teknologi - Dep Keselamatan & Kesehatan Kerja</td>
                        <td>
                            <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                <button class="badge badge-pill badge-gold font-size-13">
                                    REVISI_FASILITATOR
                                </button>
                            </a>
                            <!-- Modal Status -->
                            <div class="modal fade status-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4">Edit Status Gagasan</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="status_gagasan">Pilih Status Gagasan</label>
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
                                            <button type="button" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
                                </a>
                                <a class="m-b-10 m-l-10" href="/edit-gagasan">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button> 
                                </a>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gagasan">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_gagasan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="font-size-16">Apakah anda yakin menghapus Gagasan?</p>
                                                    </div>
                                                    <br>
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
                        <td>21.1-0203</td>
                        <td>21-09-2021</td>
                        <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                        <td>Komp Teknologi - Dep Keselamatan & Kesehatan Kerja</td>
                        <td>
                            <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                <button class="badge badge-pill badge-gold font-size-13">
                                    REVISI_FASILITATOR
                                </button>
                            </a>
                            <!-- Modal Status -->
                            <div class="modal fade status-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4">Edit Status Gagasan</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="status_gagasan">Pilih Status Gagasan</label>
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
                                            <button type="button" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
                                </a>
                                <a class="m-b-10 m-l-10" href="/edit-gagasan">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button> 
                                </a>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gagasan">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_gagasan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="font-size-16">Apakah anda yakin menghapus Gagasan?</p>
                                                    </div>
                                                    <br>
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
                        <td>21.1-0203</td>
                        <td>21-09-2021</td>
                        <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                        <td>Komp Teknologi - Dep Keselamatan & Kesehatan Kerja</td>
                        <td>
                            <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                <button class="badge badge-pill badge-gold font-size-13">
                                    REVISI_FASILITATOR
                                </button>
                            </a>
                            <!-- Modal Status -->
                            <div class="modal fade status-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4">Edit Status Gagasan</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="status_gagasan">Pilih Status Gagasan</label>
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
                                            <button type="button" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
                                </a>
                                <a class="m-b-10 m-l-10" href="/edit-gagasan">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button> 
                                </a>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gagasan">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_gagasan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="font-size-16">Apakah anda yakin menghapus Gagasan?</p>
                                                    </div>
                                                    <br>
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
                        <td>21.1-0203</td>
                        <td>21-09-2021</td>
                        <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                        <td>Komp Teknologi - Dep Keselamatan & Kesehatan Kerja</td>
                        <td>
                            <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                <button class="badge badge-pill badge-gold font-size-13">
                                    REVISI_FASILITATOR
                                </button>
                            </a>
                            <!-- Modal Status -->
                            <div class="modal fade status-modal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4">Edit Status Gagasan</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <i class="anticon anticon-close"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="status_gagasan">Pilih Status Gagasan</label>
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
                                            <button type="button" class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
                                </a>
                                <a class="m-b-10 m-l-10" href="/edit-gagasan">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                        <i class="anticon anticon-edit"></i>
                                    </button> 
                                </a>
                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_gagasan">
                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                        <i class="anticon anticon-delete"></i>
                                    </button>
                                    <!-- Modal Delete -->
                                    <div class="modal fade" id="delete_gagasan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="font-size-16">Apakah anda yakin menghapus Gagasan?</p>
                                                    </div>
                                                    <br>
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