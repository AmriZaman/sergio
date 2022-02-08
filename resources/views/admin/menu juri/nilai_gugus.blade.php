@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-graduate"></i>   Menu Juri</span>
    <span class="breadcrumb-item" active>Nilai Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Daftar Gugus Kelompok 1</h4>
                <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>Gugus</strong></th>
                            <th><strong>Ketua</strong></th>
                            <th><strong>Metodologi</strong></th>
                            <th><strong>Bidang</strong></th>
                            <th><strong>Kompartemen - Departemen</strong></th>
                            <th><strong>Nilai</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>GIO PETROPORT</td>
                            <td>Karyawan A - T123456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Mitra Bisnis - Dep Pengelolaan Pelabuhan</td>
                            <td>-</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-juri">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/input-nilai-gugus">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>GIO Sergio</td>
                            <td>Karyawan B - T223456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Sumber Daya Manusia - Dep Inovasi & Sisman</td>
                            <td>85,3</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-juri">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/input-nilai-gugus">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>GIO PMen</td>
                            <td>Karyawan C - T323456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Sumber Daya Manusia - Dep Inovasi & Sisman</td>
                            <td>89,1</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-juri">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/input-nilai-gugus">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-t-40">
                <button class="btn btn-success btn-block">Submit Nilai</button>
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
