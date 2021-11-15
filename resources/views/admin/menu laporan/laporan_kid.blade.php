@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-file-alt"></i>   Menu Laporan</span>
    <span class="breadcrumb-item" active>Memo Laporan KID</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Memo Laporan KID</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="m-b-15 col-lg-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Periode</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-15 col-lg-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Bulan</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-15 col-lg-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Tahun</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-30 col-lg-3">
                    <button class="btn btn-success btn-tone m-r-5" style="width: 100%"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
            <h4>Sumbang Gagasan (SG)</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2" style="width: 200px"><strong>Bulan</strong></th>
                            <th class="align-middle" colspan="7">
                                <strong>Jumlah Gagasan Yang Dikirimkan</strong>
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th class="align-middle"><strong>TERKIRIM</strong></th>
                            <th class="align-middle"><strong>REVISI FASILITATOR</strong></th>
                            <th class="align-middle"><strong>APPROVED FASILITATOR</strong></th>
                            <th class="align-middle"><strong>REVISI MANAGER</strong></th>
                            <th class="align-middle"><strong>VERIFIED MANAGER</strong></th>
                            <th class="align-middle"><strong>SUSPEND MANAGER</strong></th>
                            <th class="align-middle"><strong>JUMLAH</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>April</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>117</td>
                            <td>0</td>
                            <td>122</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h4 class="m-t-10">GUGUS INOVASI & 5R DI</h4>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th class="align-middle" rowspan="2" style="width: 300px"><strong>Metodologi</strong></th>
                            <th class="align-middle" colspan="7">
                                <strong>Jumlah Gugus Inovasi / 5R Per Tahapan</strong>
                            </th>
                        </tr>
                        <tr class="text-center">
                            <th class="align-middle"><strong>Plan / R1</strong></th>
                            <th class="align-middle"><strong>Do / R2</strong></th>
                            <th class="align-middle"><strong>Check / R3</strong></th>
                            <th class="align-middle"><strong>Action / R4</strong></th>
                            <th class="align-middle"><strong>R5</strong></th>
                            <th class="align-middle"><strong>JUMLAH</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>SS (Sistem Saran)</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>117</td>
                            <td>122</td>
                        </tr>
                        <tr class="text-center">
                            <td>GIO (Gugus Inovasi Operasional)</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>117</td>
                            <td>122</td>
                        </tr>
                        <tr class="text-center">
                            <td>GIM (Gugus Inovasi Manajemen)</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>117</td>
                            <td>122</td>
                        </tr>
                        <tr class="text-center">
                            <td>5R (Ringkas, Rapi, Resik, Rawat, Rajin)</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                            <td>0</td>
                            <td>117</td>
                            <td>122</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-right" colspan="6"><strong>TOTAL JUMLAH GUGUS INOVASI & 5R</strong></td>
                            <td class="text-center"><strong>1386</strong></td>
                        </tr>
                    </tfoot>
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