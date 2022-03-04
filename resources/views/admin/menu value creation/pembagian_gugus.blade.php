@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-users"></i>   Menu Value Creation</span>
    <span class="breadcrumb-item" active>Pembagian Gugus Value Creation</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Pembagian Gugus Value Creation</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-4">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode Sergio</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-4">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Anggota Value Creation</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-2">
                            <button type="button" class="btn btn-success m-r-5 col-md-12" data-toggle="tooltip" data-placement="bottom" title="Generate Pembagian"><i class="anticon anticon-setting"></i> Generate</button>
                        </div>
                        <div class="m-b-30 col-md-2">
                            <button type="button" class="btn btn-danger m-r-5 col-md-12" data-toggle="tooltip" data-placement="bottom" title="Hapus Seluruh Pembagian"><i class="anticon anticon-delete"></i> Hapus</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Nama Karyawan (Role Value Creation)</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Tambah Gugus</button>
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
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Metodologi</option>
                                                <option value="NL">Nails</option>
                                                <option value="BN">Bananas</option>
                                                <option value="HL">Helicopters</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <select class="select2" name="state">
                                                <option value="AP">Semua Bidang</option>
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
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>Gugus</strong></th>
                            <th><strong>Metodologi</strong></th>
                            <th><strong>Bidang</strong></th>
                            <th><strong>Departemen</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>SS PETROPORT</td>
                            <td>SS</td>
                            <td>Perkantoran</td>
                            <td>Komp Mitra Bisnis - Dep Pengelolaan Pelabuhan</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
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
