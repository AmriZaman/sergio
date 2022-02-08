@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
    <span class="breadcrumb-item" active>Konvensi Nasional</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Tambah Gugus Konvensi Nasional</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="m-b-15 col-md-12">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Konvensi - Level</option>
                                <option value="NL">TKMPN XXV - Nasional</option>
                                <option value="BN">TKMPN XXIV - Nasional</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="m-b-30 col-md-3">
                    <button class="btn btn-success btn-tone m-r-5" data-toggle="modal" data-target=".tambah-gugus" style="width: 100%"><i class="fas fa-plus"></i>  Tambah Gugus</button>
                    {{-- Modal --}}
                    <div class="modal fade tambah-gugus">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title h4">Daftar Gugus</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <i class="anticon anticon-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Periode</option>
                                                <option value="NL">Nails</option>
                                                <option value="BN">Bananas</option>
                                                <option value="HL">Helicopters</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Metodologi</option>
                                                <option value="NL">Nails</option>
                                                <option value="BN">Bananas</option>
                                                <option value="HL">Helicopters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Kompartemen</option>
                                                <option value="NL">Nails</option>
                                                <option value="BN">Bananas</option>
                                                <option value="HL">Helicopters</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Departemen</option>
                                                <option value="NL">Nails</option>
                                                <option value="BN">Bananas</option>
                                                <option value="HL">Helicopters</option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table id="data-table2" class="table table-bordered" style="width:100%">
                                                <thead>
                                                    <tr class="">
                                                        <th><strong>Gugus</strong></th>
                                                        <th><strong>Metodologi - Bidang</strong></th>
                                                        <th><strong>Departemen</strong></th>
                                                        <th><strong>Aksi</strong></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="">
                                                        <td>SS Sergio</td>
                                                        <td>SS - Perkantoran</td>
                                                        <td>Inovasi & Sisman</td>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="checkbox3" type="checkbox" >
                                                                <label for="checkbox3">Pilih</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>SS P-Men</td>
                                                        <td>SS - Perkantoran</td>
                                                        <td>Inovasi & Sisman</td>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="checkbox1" type="checkbox" >
                                                                <label for="checkbox1">Pilih</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td>SS Satpam</td>
                                                        <td>SS - Perkantoran</td>
                                                        <td>Keamanan</td>
                                                        <td>
                                                            <div class="checkbox">
                                                                <input id="checkbox2" type="checkbox" >
                                                                <label for="checkbox2">Pilih</label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success m-l-10">Simpan</button>
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
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Daftar Gugus Konvensi Nasional</h4>
                <div class="card-toolbar">
                    {{--  --}}
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>No</strong></th>
                            <th><strong>Gugus</strong></th>
                            <th><strong>Ketua</strong></th>
                            <th><strong>Departemen</strong></th>
                            <th><strong>Nama Konvensi</strong></th>
                            <th><strong>Keterangan Juara</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>GIO PETROPORT</td>
                            <td>Karyawan A - T123456</td>
                            <td>Komp Mitra Bisnis - Dep Pengelolaan Pelabuhan</td>
                            <td>TKMPN XXV</td>
                            <td>
                                <span class="m-b-10 badge badge-pill badge-default font-size-13">
                                    Tidak Ada
                                </span>
                            </td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-konvensi-nasional">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/edit-gugus-konvensi-nasional">
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
                            <td>2</td>
                            <td>SS Sergio</td>
                            <td>Karyawan B - T223456</td>
                            <td>Komp Sumber Daya Manusia - Dep Inovasi & Sisman</td>
                            <td>TKMPN XXV</td>
                            <td>
                                <span class="m-b-10 badge badge-pill badge-green font-size-13">
                                    Diamond
                                </span>
                            </td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-konvensi-nasional">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/edit-gugus-konvensi-nasional">
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
    <script>
        $('#data-table2').DataTable({
        });
    </script>
@endsection
