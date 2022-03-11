@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-book"></i>   Menu Rekap Kegiatan Inovasi</span>
    <span class="breadcrumb-item" active>Ranking SG</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Ranking Partisipasi Pegawai</h4>
        </div>
        <div class="card-body">
            <div class="">
                <h4 class="card-title">Pilih Rentang Periode Perankingan</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex align-items-center">
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-1" style="text-align: center">
                            <span>s.d.</span>
                        </div>
                        <div class="m-b-15 col-md-6">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <label class="col-md-2 col-form-label control-label text-center">Pilih Filter Metodologi:</label>
                        <div class="col-md-8">
                            <div class="row m-t-5">
                                <div class="checkbox col-md-2">
                                    <input id="checkbox1" type="checkbox" checked="">
                                    <label for="checkbox1">SG</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">SS</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox3" type="checkbox" checked="">
                                    <label for="checkbox3">IP</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox4" type="checkbox" checked="">
                                    <label for="checkbox4">GIO</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">GIM</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox6" type="checkbox" checked="">
                                    <label for="checkbox6">5R</label>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-30 col-md-2" style="width: 100%">
                            <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-responsive" style="width: 100%">
                    <thead>
                        <tr class="">
                            <th style="width: 2%"><strong>Rank</strong></th>
                            <th style="width: 12%"><strong>NIK</strong></th>
                            <th style="width: 30%"><strong>Nama</strong></th>
                            <th style="width: 8%"><strong>SG</strong></th>
                            <th style="width: 8%"><strong>SS</strong></th>
                            <th style="width: 8%"><strong>IP</strong></th>
                            <th style="width: 8%"><strong>GIO</strong></th>
                            <th style="width: 8%"><strong>GIM</strong></th>
                            <th style="width: 8%"><strong>5R</strong></th>
                            <th style="width: 8%"><strong>TOTAL</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>T535384</td>
                            <td>JOKO NUGROHO, S.T.</td>
                            <td class="text-center">400</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
                            <td class="text-center">0</td>
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