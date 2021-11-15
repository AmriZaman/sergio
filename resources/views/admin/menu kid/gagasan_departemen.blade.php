@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu KID</span>
    <span class="breadcrumb-item" active>Gagasan Departemen</span>

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
                <div class="col-lg-12">
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
                            <span class="m-b-10 badge badge-pill badge-gold font-size-13">
                                REVISI_FASILITATOR
                            </span>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan-departemen">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
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
                            <span class="m-b-10 badge badge-pill badge-gold font-size-13">
                                REVISI_FASILITATOR
                            </span>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan-departemen">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
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
                            <span class="m-b-10 badge badge-pill badge-gold font-size-13">
                                REVISI_FASILITATOR
                            </span>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan-departemen">
                                    <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                        <i class="anticon anticon-eye"></i>
                                    </button>  
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
                            <span class="m-b-10 badge badge-pill badge-gold font-size-13">
                                REVISI_FASILITATOR
                            </span>
                        </td>
                        <td>
                            <div class="row">
                                <a class="m-b-10 m-l-10" href="/detail-gagasan-departemen">
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