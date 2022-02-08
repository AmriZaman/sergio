@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
    <span class="breadcrumb-item" active>Rekap Konvensi</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Rekap Gugus Konvensi</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="m-b-15 col-md-12">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Konvensi - Level</option>
                        <option value="NL">TKMPN XXV - Nasional</option>
                        <option value="BN">TKMPN XXIV - Nasional</option>
                    </select>
                </div>
            </div>
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
                                    <a class="m-b-10 m-l-10" href="/detail-rekap-konvensi">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
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
                                    <a class="m-b-10 m-l-10" href="/detail-rekap-konvensi">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
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
