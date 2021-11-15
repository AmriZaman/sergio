@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-file-alt"></i>   Menu Laporan</span>
    <span class="breadcrumb-item" active>Laporan Gagasan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Laporan Gagasan</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table id="data-table" class="table table-responsive col-lg-12">
                <thead>
                    <tr>
                        <th><strong>No. Registrasi</strong></th>
                        <th><strong>Tgl Kirim</strong></th>
                        <th><strong>Pengirim</strong></th>
                        <th><strong>Departemen Pengirim</strong></th>
                        <th style="width: 200px"><strong>Judul</strong></th>
                        <th><strong>Departemen Tujuan</strong></th>
                        <th><strong>Status</strong></th>
                        <th><strong>Fasilitator</strong></th>
                        <th><strong>Tgl App/Ver </strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                    <tr>
                        <td>21.1-0420</td>
                        <td>14-10-2021</td>
                        <td>Ahmad Yasin, S.T.</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>Merubah titik sampling SO2 Exit dari duct out Tower Absorber menjadi dititik ideal pengambilan sampling dicerobong / stack</td>
                        <td>Komp Pabrik III - Dep Produksi III B</td>
                        <td>KIRIM</td>
                        <td>Pak Budi</td>
                        <td>19-10-2021</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $('#data-table').DataTable({
            "scrollX": true
        });
    </script>
@endsection