@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-graduate"></i>   Menu Penjurian</span>
    <span class="breadcrumb-item" active>Integrasi Nilai KIPG</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Daftar Gugus KIPG</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">21.1 - SERGIO PERIODE 2021-2022</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Metodologi</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Kompartemen</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-3">
                            <select class="select2" name="state">
                                <option value="AP">Semua Departemen</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="m-b-30 col-md-2">
                    <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
            <div class="table-responsive">
                <table id="data-table" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr class="">
                            <th><strong>No</strong></th>
                            <th><strong>Periode</strong></th>
                            <th><strong>Gugus</strong></th>
                            <th><strong>Kompartemen - Departemen</strong></th>
                            <th><strong>Nilai Internal</strong></th>
                            <th><strong>Nilai Eksternal</strong></th>
                            <th><strong>Nilai Total</strong></th>
                            <th><strong>Keterangan Juara</strong></th>
                            <th><strong>Aksi</strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td>1</td>
                            <td>21.1 - SERGIO PERIODE 2021-2022</td>
                            <td>GIO PETROPORT</td>
                            <td>Komp Mitra Bisnis <br> Dep Pengelolaan Pelabuhan</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".keterangan-juara">
                                    <button class="btn btn-success btn-rounded btn-tone font-size-13">
                                        Tidak Ada
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade keterangan-juara">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Edit Keterangan Juara</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="status_gugus">Pilih Keterangan Juara</label>
                                                        <div class="m-b-15">
                                                            <select class="select2" name="state">
                                                                <option value="AP">- Pilih -</option>
                                                                <option value="NL">Juara 1</option>
                                                                <option value="BN">Juara 2</option>
                                                                <option value="HL">Juara 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target=".input-nilai">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Input Nilai Eksternal">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                    <!-- Modal Status -->
                                    <div class="modal fade input-nilai">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4">Input Nilai Eksternal</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="status_gugus">Input Nilai Eksternal</label>
                                                            <input type="text" class="form-control" placeholder="Range Nilai: 1-100">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                    <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>2</td>
                            <td>21.1 - SERGIO PERIODE 2021-2022</td>
                            <td>GIO Sergio</td>
                            <td>Komp Sumber Daya Manusia <br> Dep Inovasi & Sisman</td>
                            <td>85,3</td>
                            <td>-</td>
                            <td>-</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".keterangan-juara">
                                    <button class="btn btn-success btn-rounded btn-tone font-size-13">
                                        Tidak Ada
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade keterangan-juara">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Edit Keterangan Juara</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="status_gugus">Pilih Keterangan Juara</label>
                                                        <div class="m-b-15">
                                                            <select class="select2" name="state">
                                                                <option value="AP">- Pilih -</option>
                                                                <option value="NL">Juara 1</option>
                                                                <option value="BN">Juara 2</option>
                                                                <option value="HL">Juara 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target=".input-nilai">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Input Nilai Eksternal">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                    <!-- Modal Status -->
                                    <div class="modal fade input-nilai">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4">Input Nilai Eksternal</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="status_gugus">Input Nilai Eksternal</label>
                                                            <input type="text" class="form-control" placeholder="Range Nilai: 1-100">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                    <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="">
                            <td>3</td>
                            <td>21.1 - SERGIO PERIODE 2021-2022</td>
                            <td>GIO PMen</td>
                            <td>Komp Sumber Daya Manusia
                                <br>
                                Dep Inovasi & Sisman</td>
                            <td>89,1</td>
                            <td>86,9</td>
                            <td>88</td>
                            <td>
                                <a class="m-b-10" data-toggle="modal" data-target=".keterangan-juara">
                                    <button class="btn btn-success btn-rounded btn-tone font-size-13">
                                        Tidak Ada
                                    </button>
                                </a>
                                <!-- Modal Status -->
                                <div class="modal fade keterangan-juara">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title h4">Edit Keterangan Juara</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <i class="anticon anticon-close"></i>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="status_gugus">Pilih Keterangan Juara</label>
                                                        <div class="m-b-15">
                                                            <select class="select2" name="state">
                                                                <option value="AP">- Pilih -</option>
                                                                <option value="NL">Juara 1</option>
                                                                <option value="BN">Juara 2</option>
                                                                <option value="HL">Juara 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="row">
                                    <a class="m-b-10 m-l-10" data-toggle="modal" data-target=".input-nilai">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Input Nilai Eksternal">
                                            <i class="anticon anticon-edit"></i>
                                        </button>
                                    </a>
                                    <!-- Modal Status -->
                                    <div class="modal fade input-nilai">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4">Input Nilai Eksternal</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <i class="anticon anticon-close"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="status_gugus">Input Nilai Eksternal</label>
                                                            <input type="text" class="form-control" placeholder="Range Nilai: 1-100">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                                    <button type="button" class="btn btn-success m-l-10">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="m-t-40">
                <button class="btn btn-success btn-block">Submit Nilai</button>
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
