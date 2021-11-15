@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>Migrasi NIK</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">Form Migrasi NIK</h4>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="row">
                            <div class="m-b-15 col-md-6">
                                <label for="formGroupExampleInput">Masukan NIK Lama</label>
                                <select class="select2" name="states" multiple="multiple">
                                    <option value="AP">Apples</option>
                                    <option value="NL">Nails</option>
                                    <option value="BN">Bananas</option>
                                    <option value="HL">Helicopters</option>
                                    <option value="AP1">Apples</option>
                                    <option value="NL1">Nails</option>
                                    <option value="BN1">Bananas</option>
                                    <option value="HL1">Helicopters</option>
                                    <option value="AP2">Apples</option>
                                    <option value="NL2">Nails</option>
                                    <option value="BN2">Bananas</option>
                                    <option value="HL2">Helicopters</option>
                                    <option value="AP3">Apples</option>
                                    <option value="NL3">Nails</option>
                                    <option value="BN3">Bananas</option>
                                    <option value="HL3">Helicopters</option>
                                    <option value="AP4">Apples</option>
                                    <option value="NL4">Nails</option>
                                    <option value="BN4">Bananas</option>
                                    <option value="HL4">Helicopters</option>
                                    <option value="AP5">Apples</option>
                                    <option value="NL5">Nails</option>
                                    <option value="BN5">Bananas</option>
                                    <option value="HL5">Helicopters</option>
                                </select>
                            </div>
                            <div class="m-b-15 col-md-6">
                                <label for="formGroupExampleInput">Masukan NIK Baru</label>
                                <input type="text" class="form-control" placeholder="NIK Baru">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-right m-t-30">
                        <button class="btn btn-success col-md-12">Submit</button>
                    </div>
                </div>
            </form>
  
        </div>
    </div>

    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">History Migrasi NIK</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-lg-12" style="overflow:auto">
                <table id="data-table" class="table" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col"><strong>Jenis Role</strong></th>
                            <th scope="col"><strong>Jenis NIK</strong></th>
                            <th scope="col"><strong>NIK Lama</strong></th>
                            <th scope="col"><strong>NIK Baru</strong></th>
                            <th scope="col"><strong>Tanggal</strong></th>
                            <th scope="col"><strong>Oleh</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>sg_profil</td>
                            <td>nik_fasilitator</td>
                            <td>t243060</td>
                            <td>t243060</td>
                            <td>20-02-2018</td>
                            <td>bop</td>
                        </tr>
                        <tr>
                            <td>sg_profil</td>
                            <td>nik_fasilitator</td>
                            <td>t243060</td>
                            <td>t243060</td>
                            <td>20-02-2018</td>
                            <td>bop</td>
                        </tr>
                        <tr>
                            <td>sg_profil</td>
                            <td>nik_fasilitator</td>
                            <td>t243060</td>
                            <td>t243060</td>
                            <td>20-02-2018</td>
                            <td>bop</td>
                        </tr>
                        <tr>
                            <td>sg_profil</td>
                            <td>nik_fasilitator</td>
                            <td>t243060</td>
                            <td>t243060</td>
                            <td>20-02-2018</td>
                            <td>bop</td>
                        </tr>
                        <tr>
                            <td>sg_profil</td>
                            <td>nik_fasilitator</td>
                            <td>t243060</td>
                            <td>t243060</td>
                            <td>20-02-2018</td>
                            <td>bop</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>
        $('.select2').select2();
    </script>
    
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $('#data-table').DataTable({
            "scrollX": true
        });
    </script>
    <script>
        $('#data-table2').DataTable({
            "scrollX": true
        });
    </script>
@endsection