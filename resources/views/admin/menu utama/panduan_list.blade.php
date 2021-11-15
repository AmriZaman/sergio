@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <span class="breadcrumb-item" active>Panduan Inovasi</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-9">
                    <div class="m-b-10">
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-search"></i>
                            <input type="text" class="form-control" placeholder="Cari Panduan Inovasi">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <a class="btn btn-success col-md-12" href="/tambah-panduan">
                        <i class="anticon anticon-plus-circle m-r-5"></i> 
                        <span>Tambah Panduan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Card Panduan --}}
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="text-dark font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/edit-panduan">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/panduan-edit">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/panduan-edit">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/panduan-edit">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/panduan-edit">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="m-t-10">Contoh Panduan</h4>
                            <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa...</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center">
                                <div class="col-md-6">
                                    <p class="m-b-0 text-dark font-weight-semibold font-size-15">Jan 2, 2019</p>
                                </div>
                                
                                <div class="col-md-6 text-right">
                                    <a data-toggle="modal" data-target="#delete_panduan">
                                        <button class="btn btn-icon btn-danger btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Delete">
                                            <i class="anticon anticon-delete"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_panduan">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="font-size-16">Apakah anda yakin menghapus Panduan?</p>
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
                                    </a>
                                    <a href="/panduan-edit">
                                        <button class="btn btn-icon btn-warning btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Edit">
                                            <i class="anticon anticon-edit"></i>
                                        </button> 
                                    </a>
                                    <a href="">
                                        <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Download">
                                            <i class="anticon anticon-download"></i>
                                        </button>  
                                    </a>
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