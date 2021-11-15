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
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered table-responsive" style="width: 100%">
                    <thead>
                        <tr class="">
                            <th style="width: 2%"><strong>Rank</strong></th>
                            <th style="width: 12%"><strong>NIK</strong></th>
                            <th style="width: 30%"><strong>Nama</strong></th>
                            <th style="width: 8%"><strong>VER</strong></th>
                            <th style="width: 8%"><strong>APP</strong></th>
                            <th style="width: 8%"><strong>SUS</strong></th>
                            <th style="width: 8%"><strong>REV_MGR</strong></th>
                            <th style="width: 8%"><strong>REV_FAS</strong></th>
                            <th style="width: 8%"><strong>KRM</strong></th>
                            <th style="width: 8%"><strong>REJECT</strong></th>
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