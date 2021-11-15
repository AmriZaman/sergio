@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <a class="breadcrumb-item" href="/berita">Berita</a>
    <span class="breadcrumb-item active">Judul Berita</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h2 class="font-weight-normal m-b-10">{{ $post["judul"] }}</h2>
                <div class="d-flex m-b-30">
                    <div class="m-l">
                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">{{ $post["penulis"] }}</a>
                        <p class="m-b-0 text-muted font-size-13">{{ $post["tanggal"] }}</p>
                    </div>
                </div>
                <img alt="" class="img-fluid w-100" src="assets/images/others/img-8.jpg">
                <div class="m-t-30">
                    <p>{{ $post["isi"] }}</p>
                </div>
                <div class="d-flex m-t-40 align-items-center">
                    <span class="m-r-15">Share this post: </span>
                    <ul class="list-inline m-b-0">
                        <li class="list-inline-item">
                            <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                                <i class="anticon anticon-facebook"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                                <i class="anticon anticon-twitter"></i>
                            </button>
                        </li>
                        <li class="list-inline-item">
                            <button class="font-size-16 btn btn-hover btn-icon btn-rounded">
                                <i class="anticon anticon-instagram"></i>
                            </button>
                        </li>
                    </ul>
                </div>        
            </div>
        </div>
    </div>
@endsection

@section('js')
    
@endsection