@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-users"></i>   Menu Value Creation</span>
    <span class="breadcrumb-item" active>Verifikasi Penghematan Gugus</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Daftar Gugus untuk Diverifikasi Nama Karyawan (Role Value Creation)</h4>
                <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2"><strong>No</strong></th>
                            <th class="align-middle" rowspan="2"><strong>Gugus</strong></th>
                            <th class="align-middle" rowspan="2"><strong>Ketua</strong></th>
                            <th class="align-middle" colspan="2"><strong>Klaim Gugus</strong></th>
                            <th class="align-middle" colspan="4"><strong>Hasil Verifikasi</strong></th>
                            <th class="align-middle" rowspan="2"><strong>Aksi</strong></th>
                        </tr>
                        <tr class="text-center">
                            <th class="align-middle"><strong>Realisasi</strong></th>
                            <th class="align-middle"><strong>Potensi</strong></th>
                            <th class="align-middle"><strong>Direct Financial Benefit</strong></th>
                            <th class="align-middle"><strong>Indirect Financial Benefit</strong></th>
                            <th class="align-middle"><strong>Transfer of Benefit</strong></th>
                            <th class="align-middle"><strong>Intangible Impact Value</strong></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>GIO PETROPORT</td>
                            <td><strong>Karyawan A</strong><br>T123456</td>
                            <td>Rp1.912.500.000</td>
                            <td>Rp2.458.928.572</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-value-creation">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/input-hasil-verifikasi-penghematan">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>SS Sergio</td>
                            <td><strong>Karyawan B</strong><br>T123456</td>
                            <td>Rp4.134.283.468</td>
                            <td>Rp49.674.283.468</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-gugus-value-creation">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/input-hasil-verifikasi-penghematan">
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
                <button class="btn btn-success btn-block">Submit Hasil Verifikasi Penghematan</button>
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
