@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu Fasilitator</span>
    <span class="breadcrumb-item" active>Approval Plan Action Inovasi</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Daftar Gugus Inovasi & 5R</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Semua Bagian</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Semua Status</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-30 col-md-2">
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
                            <th><strong>P/R1</strong></th>
                            <th><strong>D/R2</strong></th>
                            <th><strong>C/R3</strong></th>
                            <th><strong>A/R4</strong></th>
                            <th><strong>R5</strong></th>
                            <th><strong>Makalah Final</strong></th>
                            <th><strong>IK</strong></th>
                            <th><strong>Penghematan</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>SS COLEK 2.</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <span class="m-b-10 badge badge-pill badge-green font-size-13">
                                    APPROVED
                                </span>
                            </td>
                            <td class="text-center">
                                <i class="fas fa-check text-success"></i>
                                <a class="" data-toggle="modal" data-target=".ttd-fasilitator">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone m-t-5" data-toggle="tooltip" data-placement="bottom" title="Approval Fasilitator">
                                        <i class="anticon anticon-qrcode"></i>
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade ttd-fasilitator">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Tanda Tangan Fasilitator</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="assets/images/others/qr-code.png" style="width: 300px; height:300px" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                                                <button type="button" class="btn btn-success m-l-10">Download</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="" data-toggle="modal" data-target=".ttd-manager">
                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone m-t-5" data-toggle="tooltip" data-placement="bottom" title="Approval Manager">
                                        <i class="anticon anticon-qrcode"></i>
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade ttd-manager">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Tanda Tangan Manager</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="assets/images/others/qr-code.png" style="width: 300px; height:300px" alt="">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success m-l-10">Download</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center">
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-approval-plan-action">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>  
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                            <td>Komp Umum - Dep Corporate Social Responsibility</td>
                            <td>21-09-2021</td>
                            <td>SS COLEK 2.</td>
                            <td>Menihilkan temuan auditor internal terkait belum ada SOP Penagihan Mitra Binaan selama 3 bulan melalui penyusunan PG-IK-69-0031</td>
                            <td>
                                <span class="m-b-10 badge badge-pill badge-green font-size-13">
                                    APPROVED
                                </span>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center"><i class="fas fa-minus text-danger"></i></td>
                            <td class="text-center">
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/detail-approval-plan-action">
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
@endsection