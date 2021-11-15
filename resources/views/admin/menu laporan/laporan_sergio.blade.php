@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-file-alt"></i>   Menu Laporan</span>
    <span class="breadcrumb-item" active>Laporan Sergio</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Laporan Sergio</h4>
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