@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <a class="breadcrumb-item" href="/hall-of-fame">Hall of Fame</a>
    <span class="breadcrumb-item active">Judul Hall of Fame</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="container">
                <h2 class="font-weight-normal m-b-10">Pemenang TKMPN XXV</h2>
                <div class="d-flex m-b-30">
                    <div class="m-l">
                        <a class="text-dark m-b-0 font-weight-semibold">Dept. Inovasi & Sisman</a>
                        <p class="m-b-0 text-muted font-size-13">12 Desember 2021</p>
                    </div>
                </div>
                <img alt="" class="img-fluid w-100" src="assets/images/others/img-8.jpg">
                <div class="m-t-30">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tempus urna id porttitor viverra. Sed vestibulum et ipsum non viverra. Nullam molestie mattis dolor in malesuada. Vestibulum pharetra dui vitae purus lobortis porta. Maecenas sagittis risus ante, quis euismod elit congue nec. Nullam vel ornare lectus. Maecenas pretium lorem eget laoreet auctor. Nulla posuere, turpis placerat dignissim tempor, odio est tempor felis, in pharetra nibh dolor nec sem. Pellentesque vel nunc non ex feugiat condimentum id at odio. Donec lobortis lorem nulla, in facilisis eros porttitor convallis. Suspendisse potenti.

                        Nam maximus augue sapien, quis pulvinar leo tristique vitae. Donec commodo sodales metus, non placerat mi faucibus at. Nam ut fermentum nulla. Etiam eu lectus ipsum. Nullam consequat lobortis ex, sed tincidunt mi elementum laoreet. Aenean pharetra enim turpis. Donec eget ligula vel nisl rutrum commodo. Cras nulla sapien, fringilla non maximus sit amet, sagittis et ipsum. Praesent et consequat eros, semper accumsan metus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        
                        Proin at ligula sed dolor posuere scelerisque at nec urna. Aenean eros urna, placerat ac est ut, ornare rutrum lorem. Curabitur diam est, maximus vitae sagittis vitae, condimentum sed diam. Vivamus et odio elementum, consectetur nisi ac, rutrum erat. Vestibulum lobortis cursus lorem quis laoreet. Nam pulvinar eros ut purus laoreet condimentum. Nunc id lectus quam</p>
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