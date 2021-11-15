@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <span class="breadcrumb-item" active>Periode</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home-justified" aria-selected="true">Periode Sumbang Gagasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile-justified" aria-selected="false">Periode Sergio</a>
            </li>
        </ul>
        <div class="tab-content m-t-15" id="myTabContentJustified">
            {{-- <div class="card-body"> --}}
                {{-- SUMBANG GAGASAN --}}
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between m-b-15">
                            <h4 class="m-b-0">Daftar Periode Sumbang Gagasan</h4>
                            <div class="card-toolbar">
                                <a class="btn btn-success" href="/tambah-periode-sg" data-toggle="tooltip" data-placement="bottom" title="Tambah Periode Baru">
                                    <i class="anticon anticon-plus-circle m-r-5"></i> 
                                    <span>Periode</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12" style="overflow:auto">
                            <table id="data-table" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>Kode</strong></th>
                                        <th scope="col"><strong>Tema</strong></th>
                                        <th scope="col"><strong>Tgl Usulan</strong></th>
                                        <th scope="col"><strong>Tgl Verifikasi</strong></th>
                                        <th scope="col"><strong>Tgl Penilaian</strong></th>
                                        <th scope="col"><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>21.1</td>
                                        <td>Sumbang Gagasan 2021-2022</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>
                                            <div class="row">
                                                <a class="m-b-10 m-l-10" href="/edit-periode-sg">
                                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                        <i class="anticon anticon-edit"></i>
                                                    </button> 
                                                </a>
                                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="anticon anticon-delete"></i>
                                                    </button>
                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="delete_periode_sg">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="text-center font-size-150">
                                                                        <i class="anticon anticon-warning text-warning"></i>
                                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Periode Sumbang Gagasan?</p>
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
                                        <td>21.1</td>
                                        <td>Sumbang Gagasan 2021-2022</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>
                                            <div class="row">
                                                <a class="m-b-10 m-l-10" href="/edit-periode-sg">
                                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                        <i class="anticon anticon-edit"></i>
                                                    </button> 
                                                </a>
                                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sg">
                                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="anticon anticon-delete"></i>
                                                    </button>
                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="delete_periode_sg">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="text-center font-size-150">
                                                                        <i class="anticon anticon-warning text-warning"></i>
                                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Periode Sumbang Gagasan?</p>
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
                            <h4 class="m-b-0">Daftar Periode Sergio</h4>
                            <div class="card-toolbar">
                                <a class="btn btn-success col-md-12" href="/tambah-periode-sergio" data-toggle="tooltip" data-placement="bottom" title="Tambah Periode Baru">
                                    <i class="anticon anticon-plus-circle m-r-5"></i> 
                                    <span>Periode</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-12" style="overflow:auto">
                            <table id="data-table2" class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>Kode</strong></th>
                                        <th scope="col"><strong>Tema</strong></th>
                                        <th scope="col"><strong>Tgl Usulan</strong></th>
                                        <th scope="col"><strong>Tgl Verifikasi</strong></th>
                                        <th scope="col"><strong>Tgl Penilaian</strong></th>
                                        <th scope="col"><strong>Aksi</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>21.1</td>
                                        <td>SERGIO PERIODE 2021-2022</td>
                                        <td>06-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>05-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>06-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>
                                            <div class="row">
                                                <a class="m-b-10 m-l-10" href="/edit-periode-sergio">
                                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                        <i class="anticon anticon-edit"></i>
                                                    </button> 
                                                </a>
                                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sergio">
                                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="anticon anticon-delete"></i>
                                                    </button>
                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="delete_periode_sergio">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="text-center font-size-150">
                                                                        <i class="anticon anticon-warning text-warning"></i>
                                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Periode Sergio?</p>
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
                                        <td>21.1</td>
                                        <td>SERGIO PERIODE 2021-2022</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>15-09-2021 <strong> s/d </strong> 31-12-2021</td>
                                        <td>
                                            <div class="row">
                                                <a class="m-b-10 m-l-10" href="/edit-periode-sg">
                                                    <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                                        <i class="anticon anticon-edit"></i>
                                                    </button> 
                                                </a>
                                                <a class="m-b-10 m-l-10" data-toggle="modal" data-target="#delete_periode_sergio">
                                                    <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                                        <i class="anticon anticon-delete"></i>
                                                    </button>
                                                    <!-- Modal Delete -->
                                                    <div class="modal fade" id="delete_periode_sergio">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-body">
                                                                    <div class="text-center font-size-150">
                                                                        <i class="anticon anticon-warning text-warning"></i>
                                                                        <p class="text-dark font-size-16 m-b-40">Apakah anda yakin menghapus Periode Sergio?</p>
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
            {{-- </div> --}}
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
    <script>
        $('#data-table2').DataTable({
            "scrollX": true
        });
    </script>
@endsection