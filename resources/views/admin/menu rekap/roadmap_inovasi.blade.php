@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-graduate"></i>   Menu Juri</span>
    <span class="breadcrumb-item" active>Rekap Nilai Gugus</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Roadmap Inovasi</h4>
                <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="m-b-15 col-md-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Periode SG</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-15 col-md-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Periode Sergio</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-15 col-md-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Metodologi</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
                <div class="m-b-15 col-md-3">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Bidang</option>
                        <option value="NL">Nails</option>
                        <option value="BN">Bananas</option>
                        <option value="HL">Helicopters</option>
                    </select>
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>No</strong></th>
                            <th><strong>Ketua</strong></th>
                            <th><strong>Departemen</strong></th>
                            <th><strong>Sumbang Gagasan</strong></th>
                            <th><strong>Sergio</strong></th>
                            <th><strong>KIK</strong></th>
                            <th><strong>KIPG</strong></th>
                            <th><strong>Konvensi Nasional</strong></th>
                            <th><strong>Konvensi Internasional</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>Aslan - T571847</td>
                            <td>Komp Sumber Daya Manusia <br> Dept Inovasi & Sistem Manajemen</td>
                            <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                            <td>
                                <strong>SS Firebox</strong>
                                <br>
                                Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi
                            </td>
                            <td>Gold</td>
                            <td>Gold</td>
                            <td>
                                <label>TKMPN XXV</label>
                                <br>
                                <strong>Gold</strong>
                            </td>
                            <td>-</td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>Aslan - T571847</td>
                            <td>Komp Sumber Daya Manusia <br> Dept Inovasi & Sistem Manajemen</td>
                            <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                            <td>
                                <strong>SS Firebox</strong>
                                <br>
                                Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi
                            </td>
                            <td>Gold</td>
                            <td>Gold</td>
                            <td>
                                <label>TKMPN XXV</label>
                                <br>
                                <strong>Gold</strong>
                            </td>
                            <td>
                                <label>
                                    Konvensi 1
                                </label>
                                <br>
                                <strong>Juara 3</strong>
                            </td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>Aslan - T571847</td>
                            <td>Komp Sumber Daya Manusia <br> Dept Inovasi & Sistem Manajemen</td>
                            <td>Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi</td>
                            <td>
                                <strong>SS Firebox</strong>
                                <br>
                                Meningkatkan Lifetime Firebox di Area Open Storage Belerang Agar Tidak Cepat Rusak karena Korosi
                            </td>
                            <td>Gold</td>
                            <td>Gold</td>
                            <td>
                                <label>TKMPN XXV</label>
                                <br>
                                <strong>Gold</strong>
                            </td>
                            <td>-</td>
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
