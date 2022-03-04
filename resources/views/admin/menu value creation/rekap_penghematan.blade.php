@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-users"></i>   Menu Value Creation</span>
    <span class="breadcrumb-item" active>Rekap Penghematan Gugus</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Rekap Penghematan Gugus</h4>
                {{-- <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="m-b-15 col-md-10">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode Sergio</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-30 col-md-2">
                            <button class="btn btn-success btn-tone m-r-5" style="width: 100%"><i class="fas fa-download"></i>  Download</button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2"><strong>No</strong></th>
                            <th class="align-middle" rowspan="2"><strong>Ketua</strong></th>
                            <th class="align-middle" rowspan="2"><strong>Status</strong></th>
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
                            <td>Nama Angota 1 Value Creation</td>
                            <td>Memverifikasi 7 dari 9 Gugus</td>
                            <td>Rp116.996.585.220</td>
                            <td>Rp76.196.816.550</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/verifikasi-penghematan">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>Nama Angota 2 Value Creation</td>
                            <td>Memverifikasi 3 dari 9 Gugus</td>
                            <td>Rp412.689.063.363</td>
                            <td>Rp92.378.439.668</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/verifikasi-penghematan">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>Nama Angota 3 Value Creation</td>
                            <td>Selesai</td>
                            <td>Rp412.689.063.363</td>
                            <td>Rp92.378.439.668</td>
                            <td>Rp92.378.439.668</td>
                            <td>Rp92.378.439.668</td>
                            <td>Rp92.378.439.668</td>
                            <td>Rp92.378.439.668</td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" href="/verifikasi-penghematan">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                            <i class="anticon anticon-eye"></i>
                                        </button>
                                    </a>
                                    <a class="m-b-10 m-l-10" href="/verifikasi-penghematan">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Revisi">
                                            <i class="anticon anticon-sync"></i>
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
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Status Persetujuan Koordinator Value Creation</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive" style="width: 100%">
                <table class="table table-borderless table-sm border-bottom">
                    <tbody>
                        <tr class="text-center">
                            <td colspan="5" class="align-top">Gresik, 14 Maret 2022 (Diperbarui dari penanda tangan terbaru)</td>
                        </tr>
                        <tr class="text-center">
                            <td colspan="5" class="align-top"><strong>TIM VERIFIKASI VALUE CREATION GUGUS INOVASI 2020/2021</strong></td>
                        </tr>
                        <tr class="text-center">
                            <td><img src="assets/images/others/qr-code.png" style="width: 200px; height:200px" alt=""></td>
                            <td><img src="assets/images/others/qr-code.png" style="width: 200px; height:200px" alt=""></td>
                            <td><img src="assets/images/others/qr-code.png" style="width: 200px; height:200px" alt=""></td>
                            <td><p class="m-t-100 m-b-100"><span class="badge badge-pill badge-red font-size-13">Belum Menyetujui</span></p></td>
                            <td><p class="m-t-100 m-b-100"><span class="badge badge-pill badge-red font-size-13">Belum Menyetujui</span></p></td>
                        </tr>
                        <tr class="text-center">
                            <td class="m-l-20 m-r-20"><strong>NUGROHO IMAN PRAKOSA</strong></td>
                            <td class="m-l-20 m-r-20"><strong>KRISHNA PADJA K.</strong></td>
                            <td class="m-l-20 m-r-20"><strong>GARY EKA LUVIANO</strong></td>
                            <td class="m-l-20 m-r-20"><strong>RIZZAQI KHOIRUL WAHYUDI</strong></td>
                            <td class="m-l-20 m-r-20"><strong>SIGIT PRIBADI</strong></td>
                        </tr>
                        <tr class="text-center">
                            <td class="m-l-20 m-r-20">VP Anggaran</td>
                            <td class="m-l-20 m-r-20">VP Keuangan</td>
                            <td class="m-l-20 m-r-20">VP Inovasi & Sistem Manajemen</td>
                            <td class="m-l-20 m-r-20">VP Akuntansi Biaya</td>
                            <td class="m-l-20 m-r-20">VP Pelaporan Keuangan & Manajemen</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-t-30">
                <h6>Masukan Tanggal Anda Melakukan Persetujuan</h6>
                <div class="input-affix m-t-10 m-b-20">
                    <i class="prefix-icon anticon anticon-calendar"></i>
                    <input type="text" class="form-control datepicker-input" placeholder="Pilih tanggal approve">
                </div>
                <button class="btn btn-success btn-block">Setujui Hasil Verifikasi Penghematan</button>
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
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker-input').datepicker();
    </script>
@endsection
