@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <span class="breadcrumb-item" active>Hall of Fame</span>
@endsection

@section('content')
        <div class="m-b-10 col-lg-12">
            <a class="btn btn-success btn-tone btn-block" href="/create-hall-of-fame">Buat Hall of Fame Baru</a>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/others/img-2.jpg" alt="">
                        <div class="card-body">
                            <a href="/detail-hall-of-fame">
                                <h4 class="m-t-10">Pemenang TKMPN XXV</h4>
                            </a>
                            <p class="m-b-20">Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="m-b-0 text-dark font-weight-semibold font-size-15">12 Desember 2019</p>
                                <a class="text-primary btn btn-sm btn-hover" href="detail-hall-of-fame">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="avatar avatar-image avatar-sm">
                                            <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                        </div>
                                        <div class="m-l-10 card-toolbar">
                                            <span class="font-weight-semibold">Dept. Inovasi & Sisman</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="dropdown dropdown-animated scale-left">
                                        <ul>
                                            <li>
                                                <a class="text-gray" href="javascript:void(0)" data-toggle="dropdown">
                                                    <i class="anticon anticon-ellipsis font-size-20"></i>
                                                </a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" type="button" href="/edit-hall-of-fame">Edit</a>
                                                    <a class="dropdown-item" type="button" data-toggle="modal" data-target="#delete_hof">Hapus</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete_hof">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="text-center font-size-150">
                                                        <i class="anticon anticon-warning text-warning"></i>
                                                        <p class="text-dark font-size-16">Apakah anda yakin menghapus Hall of Fame ini?</p>
                                                    </div>
                                                    <br>
                                                    <div class="text-center">
                                                        <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
                                                        <button type="button" class="btn btn-danger m-l-10">Hapus</button>
                                                    </div>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-t-30">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
@endsection

@section('js')
    
@endsection