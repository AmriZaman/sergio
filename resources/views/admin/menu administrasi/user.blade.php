@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>User</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="accordion borderless" id="accordion-borderless">
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title">
                        <a class="collapsed" data-toggle="collapse" href="#collapseOneBorderless">
                            <span>Pilih Role Untuk User</span>
                        </a>
                    </h5>
                </div>
                <div id="collapseOneBorderless" class="collapse" data-parent="#accordion-borderless">
                    <div class="card-body">
                        <div class="m-t-15">
                            <form action="">
                                <label for="formGroupExampleInput">Masukan NIK</label>
                                <select class="select2" name="states[]" multiple="multiple">
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
                                <div class="row m-t-15">
                                    <div class="col-lg-10">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Upload Excell</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="row">
                                            <div class=" col-lg-6">
                                                <button class="btn btn-warning btn-tone" style="width: 100%" data-toggle="tooltip" data-placement="bottom" title="Download Template"><i class="fas fa-download"></i></button>
                                            </div>
                                            <div class=" col-lg-6">
                                                <button class="btn btn-success btn-tone" style="width: 100%" data-toggle="tooltip" data-placement="bottom" title="Upload Excell"><i class="fas fa-upload"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-15">
                                    <div class="col-lg-10">
                                        <div class="row">
                                            <div class="m-b-15 col-md-6">
                                                <select class="select2" name="state">
                                                    <option value="AP">Pilih Periode</option>
                                                    <option value="NL">Nails</option>
                                                    <option value="BN">Bananas</option>
                                                    <option value="HL">Helicopters</option>
                                                </select>
                                            </div>
                                            <div class="m-b-15 col-md-6">
                                                <select class="select2" name="state">
                                                    <option value="AP">Pilih Role</option>
                                                    <option value="NL">Fasilitator</option>
                                                    <option value="BN">Verifikator</option>
                                                    <option value="HL">KID</option>
                                                    <option value="SP">SPTK</option>
                                                    <option value="VC">Value Creation</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-right">
                                        <button class="btn btn-success col-md-12">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home-justified" aria-selected="true">User Sumbang Gagasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile-justified" aria-selected="false">User Sergio</a>
            </li>
        </ul>
        <div class="tab-content m-t-15" id="myTabContentJustified">
            {{-- SUMBANG GAGASAN --}}
            <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-15">
                        <h4 class="m-b-0">Daftar User Sumbang Gagasan</h4>
                    </div>
                    <div class="col-lg-12" style="overflow:auto">
                        <table id="data-table" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Periode</strong></th>
                                    <th scope="col"><strong>NIK</strong></th>
                                    <th scope="col"><strong>Nama</strong></th>
                                    <th scope="col"><strong>Role</strong></th>
                                    <th scope="col"><strong>Departemen</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21.1 - Sumbang Gagasan 2021-2022</td>
                                    <td>T525317</td>
                                    <td>ADITIYA CAHYA WARDANA, S.T., M.M.</td>
                                    <td>FASILITATOR_SG</td>
                                    <td>Dep Administrasi & Penjualan</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_user_sg">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_user_sg">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus User Sumbang Gagasan?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>21.1 - Sumbang Gagasan 2021-2022</td>
                                    <td>T525317</td>
                                    <td>ADITIYA CAHYA WARDANA, S.T., M.M.</td>
                                    <td>FASILITATOR_SG</td>
                                    <td>Dep Administrasi & Penjualan</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_user_sg2">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_user_sg2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus User Sumbang Gagasan?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- SERGIO --}}
            <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-15">
                        <h4 class="m-b-0">Daftar User Sergio</h4>
                    </div>
                    <div class="col-lg-12" style="overflow:auto">
                        <table id="data-table2" class="table" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>Periode</strong></th>
                                    <th scope="col"><strong>NIK</strong></th>
                                    <th scope="col"><strong>Nama</strong></th>
                                    <th scope="col"><strong>Role</strong></th>
                                    <th scope="col"><strong>Departemen</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21.1 - Sergio 2021-2022</td>
                                    <td>T525317</td>
                                    <td>ADITIYA CAHYA WARDANA, S.T., M.M.</td>
                                    <td>FASILITATOR_SG</td>
                                    <td>Dep Administrasi & Penjualan</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_user_srg">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_user_srg">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus User Sergio?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>21.1 - Sergio 2021-2022</td>
                                    <td>T525317</td>
                                    <td>ADITIYA CAHYA WARDANA, S.T., M.M.</td>
                                    <td>FASILITATOR_SG</td>
                                    <td>Dep Administrasi & Penjualan</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_user_srg2">
                                                <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                    <i class="anticon anticon-delete"></i>
                                                </button>
                                                <!-- Modal Delete -->
                                                <div class="modal fade" id="delete_user_srg2">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center font-size-150">
                                                                    <i class="anticon anticon-warning text-warning"></i>
                                                                    <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus User Sergio?</p>
                                                                </div>
                                                                <div class="text-center">
                                                                    <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                                    <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                                </div>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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