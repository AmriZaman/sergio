@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <span class="breadcrumb-item" active>Berita</span>
@endsection

@section('content')
        <div class="m-b-10">
            <a class="btn btn-success btn-tone btn-block" href="/tambah-berita">Buat Berita Baru</a>
        </div>

        @foreach ($posts as $post)
            <article>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-fluid" src="assets/images/others/img-2.jpg" alt="">
                            </div>
                            <div class="col-md-8">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="/berita/{{ $post["slug"] }}">
                                        <h4 class="m-b-10">{{ $post["judul"] }}</h4>
                                    </a>
                                    <div class="m-l-10 card-toolbar">
                                        <div class="dropdown dropdown-animated scale-left">
                                            <ul>
                                                <li>
                                                    <a class="text-gray" href="javascript:void(0)" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis font-size-20"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" type="button" href="/edit-berita">Edit</a>
                                                        <a class="dropdown-item" type="button" data-toggle="modal" data-target="#delete_berita">Hapus</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="delete_berita">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="text-center font-size-150">
                                                            <i class="anticon anticon-warning text-warning"></i>
                                                            <p class="text-dark font-size-16">Apakah anda yakin menghapus Berita ini?</p>
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
                                <div class="d-flex align-items-center m-t-5 m-b-15">
                                    <span class="text-gray font-weight-semibold">{{ $post["penulis"] }}</span>
                                    <span class="m-h-5 text-gray">|</span>
                                    <span class="text-gray">{{ $post["tanggal"] }}</span>
                                </div>
                                <p class="m-b-20">{{ $post["isi"] }}</p>
                                <div class="text-right">
                                    <a class="btn btn-hover font-weight-semibold" href="/berita-post">
                                        <span>Read More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach




        <div>
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