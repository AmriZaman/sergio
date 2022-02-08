@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-book"></i>   Menu Rekap Kegiatan Inovasi</span>
    <span class="breadcrumb-item" active>GIM</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Sergio - Gugus Inovasi Manajemen (GIM)</h4>
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
                                <option value="AP">Semua Bagian</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-30 col-md-3">
                            <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered">
                    <thead>
                        <tr class="">
                            <th><strong>No. Reg.</strong></th>
                            <th><strong>Bagian</strong></th>
                            <th><strong>Tgl Kirim</strong></th>
                            <th><strong>Gugus</strong></th>
                            <th style="width: 200px"><strong>Judul</strong></th>
                            <th><strong>Status</strong></th>
                            <th><strong>P</strong></th>
                            <th><strong>D</strong></th>
                            <th><strong>C</strong></th>
                            <th><strong>A</strong></th>
                            <th><strong>Makalah Final</strong></th>
                            <th><strong>IK</strong></th>
                            <th><strong>Penghematan</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>GIM COLEK 2.</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                    <span class="badge badge-pill badge-green font-size-13">
                                        APPROVED
                                    </span>
                                </a>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr class="">
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>GIM COLEK 2.</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".status-modal">
                                    <span class="badge badge-pill badge-green font-size-13">
                                        APPROVED
                                    </span>
                                </a>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
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