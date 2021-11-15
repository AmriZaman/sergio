@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>Daftar Pegawai</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Pegawai</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="m-b-15 col-md-6">
                            <select class="select2" name="state">
                                <option value="AP">Semua Kompartemen</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-6">
                            <select class="select2" name="state">
                                <option value="AP">Semua Departemen</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="m-b-30 col-lg-2 text-right">
                    <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
            <div class="col-lg-12" style="overflow:auto">
                <table id="data-table" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><strong>NIK</strong></th>
                            <th scope="col"><strong>Nama</strong></th>
                            <th scope="col"><strong>Kompartemen</strong></th>
                            <th scope="col"><strong>Departemen</strong></th>
                            <th scope="col"><strong>Judul Post</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>T314608</td>
                            <td>A. DANI SUROSO</td>
                            <td>Komp Teknologi</td>
                            <td>Dep Keselamatan & Kesehatan Kerja</td>
                            <td>SPr I KK Pabrik II & Pelabuhan</td>
                        </tr>
                        <tr>
                            <td>T314608</td>
                            <td>A. DANI SUROSO</td>
                            <td>Komp Teknologi</td>
                            <td>Dep Keselamatan & Kesehatan Kerja</td>
                            <td>SPr I KK Pabrik II & Pelabuhan</td>
                        </tr>
                        <tr>
                            <td>T314608</td>
                            <td>A. DANI SUROSO</td>
                            <td>Komp Teknologi</td>
                            <td>Dep Keselamatan & Kesehatan Kerja</td>
                            <td>SPr I KK Pabrik II & Pelabuhan</td>
                        </tr>
                        <tr>
                            <td>T314608</td>
                            <td>A. DANI SUROSO</td>
                            <td>Komp Teknologi</td>
                            <td>Dep Keselamatan & Kesehatan Kerja</td>
                            <td>SPr I KK Pabrik II & Pelabuhan</td>
                        </tr>
                        <tr>
                            <td>T314608</td>
                            <td>A. DANI SUROSO</td>
                            <td>Komp Teknologi</td>
                            <td>Dep Keselamatan & Kesehatan Kerja</td>
                            <td>SPr I KK Pabrik II & Pelabuhan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>
        $('.select2').select2();
    </script>
    
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $('#data-table').DataTable({
            "scrollX": true
        });
    </script>
@endsection