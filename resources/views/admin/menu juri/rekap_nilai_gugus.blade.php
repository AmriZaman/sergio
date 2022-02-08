@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-graduate"></i>   Menu Juri</span>
    <span class="breadcrumb-item" active>Rekap Nilai Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Rekap Nilai Gugus Kelompok 1</h4>
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
                            <th><strong>Departemen</strong></th>
                            <th><strong>Nilai Total</strong></th>
                            <th><strong>Penghargaan</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>GIO PETROPORT</td>
                            <td>Karyawan A - T123456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Mitra Bisnis - Dep Pengelolaan Pelabuhan</td>
                            <td>70</td>
                            <td>Silver</td>
                        </tr>
                        <tr>
                            <td>GIO Sergio</td>
                            <td>Karyawan B - T223456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Sumber Daya Manusia - Dep Inovasi & Sisman</td>
                            <td>88,3</td>
                            <td>Gold</td>
                        </tr>
                        <tr>
                            <td>GIO PMen</td>
                            <td>Karyawan C - T323456</td>
                            <td>GIO</td>
                            <td>Perkantoran</td>
                            <td>Komp Sumber Daya Manusia - Dep Inovasi & Sisman</td>
                            <td>87,5</td>
                            <td>Gold</td>
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
