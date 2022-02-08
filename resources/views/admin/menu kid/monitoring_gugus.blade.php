@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu KID</span>
    <span class="breadcrumb-item" active>Monitoring Gugus Inovasi</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Gugus Inovasi Kompartemen Sumber Daya Manusia</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-5">
                    <select class="select2" name="state">
                        <option value="AP">Semua Periode</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <select class="select2" name="state">
                        <option value="AP">Semua Kompartemen</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="col-lg-2 m-b-30">
                    <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Daftar Gugus</h4>
                {{-- <div class="card-toolbar">
                    <a class="btn btn-success btn-tone m-r-5" href="/tambah-pengajuan-anggaran-kik"><i class="fas fa-plus"></i>  Ajukan Anggaran</a>
                </div> --}}
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th><strong>Metodologi</strong></th>
                            <th><strong>Jumlah Gugus</strong></th>
                            <th><strong>Pilih Gugus untuk KIK</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SS (Sistem Saran)</td>
                            <td>10</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Kompartemen</option>
                                                            <option value="NL">Nails</option>
                                                            <option value="BN">Bananas</option>
                                                            <option value="HL">Helicopters</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
                                                            <option value="NL">Nails</option>
                                                            <option value="BN">Bananas</option>
                                                            <option value="HL">Helicopters</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>GIO (Gugus Inovasi Operasional)</td>
                            <td>13</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>GIM (Gugus Inovasi Managerial)</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>IP (Individual Project)</td>
                            <td>17</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5R</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong>49</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex align-items-center justify-content-between m-t-20">
                <h4 class="card-title">Daftar Gugus Mengikuti KIK</h4>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th><strong>Metodologi</strong></th>
                            <th><strong>Jumlah Gugus</strong></th>
                            <th><strong>Pilih Gugus untuk KIPG</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SS (Sistem Saran)</td>
                            <td>6</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>GIO (Gugus Inovasi Operasional)</td>
                            <td>5</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>GIM (Gugus Inovasi Managerial)</td>
                            <td>1</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>IP (Individual Project)</td>
                            <td>7</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5R</td>
                            <td>3</td>
                            <td>
                                <button class="btn btn-success btn-tone btn-sm m-r-5" data-toggle="modal" data-target=".tambah-gugus"><i class="fas fa-plus"></i>  Pilih Gugus</button>
                                {{-- Modal --}}
                                <div class="modal fade tambah-gugus">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Pilih Gugus</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <select class="select2" name="state">
                                                            <option value="AP">Semua Departemen</option>
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
                                                        <table id="data-table" class="table table-bordered" style="width:100%">
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
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS P-Men</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Inovasi & Sisman</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="">
                                                                    <td>SS Satpam</td>
                                                                    <td>SS - Perkantoran</td>
                                                                    <td>Keamanan</td>
                                                                    <td>
                                                                        <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                                            <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="anticon anticon-plus"></i>
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong>22</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex align-items-center justify-content-between m-t-20">
                <h4 class="card-title">Daftar Gugus Mengikuti KIPG</h4>
                {{-- <div class="card-toolbar">
                    <a class="btn btn-success btn-tone m-r-5" href="/tambah-pengajuan-anggaran-kik"><i class="fas fa-plus"></i>  Ajukan Anggaran</a>
                </div> --}}
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th><strong>Metodologi</strong></th>
                            <th><strong>Jumlah Gugus</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SS (Sistem Saran)</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>GIO (Gugus Inovasi Operasional)</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>GIM (Gugus Inovasi Managerial)</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>IP (Individual Project)</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>5R</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td><strong>TOTAL</strong></td>
                            <td><strong>10</strong></td>
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