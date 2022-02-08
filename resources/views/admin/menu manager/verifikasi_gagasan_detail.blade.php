@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user-tie"></i>   Menu Manager</span>
    <a class="breadcrumb-item" href="/verifikasi-manager">Verifikasi Usulan Gagasan</a>
    <span class="breadcrumb-item" active>Detail Usulan Gagasan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Detail Gagasan</h4>
                <div class="card-toolbar">
                    <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download</button>
                </div>
            </div>
        </div>
        <div class="card-body border-bottom">
            <div class="row">
                <div class="col-lg-6">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>Nomor Registrasi</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">21.1-0297</td>
                                </tr>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>Pengirim</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">Muhammad Amri Zaman</td>
                                </tr>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>NIK</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">t007002</td>
                                </tr>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>Departemen</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">Departemen Inovasi</td>
                                </tr>
                            </tbody>
                        </table>
                        
                        {{-- <div class="col-md-4">
                            <p class="text-dark"><strong>Nomor Registrasi</strong></p>
                            <p class="text-dark"><strong>Pengirim</strong></p>
                            <p class="text-dark"><strong>NIK</strong></p>
                            <p class="text-dark"><strong>Departemen</strong></p>
                        </div> --}}
                        {{-- <div class="col-md-6">
                            <p class="text-dark">: 21.1-0297</p>
                            <p class="text-dark">: Muhammad Amri Zaman</p>
                            <p class="text-dark">: t007002</p>
                            <p class="text-dark">: Departemen Inovasi</p>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>Tanggal Kirim</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">29-09-2021 10:39:26</td>
                                </tr>
                                <tr>
                                    <td class="text-dark" style="width: 30%"><strong>Departemen Tujuan</strong></td>
                                    <td class="text-dark" style="width: 5%">:</td>
                                    <td class="text-dark" style="width: 65%">Departemen Sistem Manajemen</td>
                                </tr>
                            </tbody>
                        </table>
                        {{-- <div class="col-md-4">
                            <p class="text-dark"><strong>Tanggal Kirim</strong></p>
                            <p class="text-dark"><strong>Departemen Tujuan</strong></p>
                        </div>
                        <div class="col-md-8">
                            <p class="text-dark">: 29-09-2021 10:39:26</p>
                            <p class="text-dark">: Departemen Sistem Manajemen</p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-bottom">
            <h5><strong>Judul</strong></h5>
            <p class="m-b-15 text-dark">Pemakaian NaOH untuk menetralkan limbah poin J ± 160 ton/bulan</p>
            <h5><strong>Gambaran Awal</strong></h5>
            <p class="m-b-15 text-dark">Poin J merupakan salah satu unit yang berada di equalizer system sebagai 
                tampungan awal pertemuan limbah-limbah produksi pabrik II, dikarenakan dominan pH limbah 
                asam yaitu < 5 dan syarat limbah boleh dibuang ke laut yaitu > 6 ( basa ) maka, yang harus 
                kita lakukan adalah dengan menginjeksi kapur atupun dengan menggunakan NaOH. - Karena saat 
                ini kapur tidak diijinkan untuk menetralkan pH dikarenakan limbah berwarna putih dan juga 
                kolam segmen sangat cepat sekali terbentuknya lumpur maka, jalan satu satunya yaitu menggunakan 
                NaOH cair. - Di karenakan penggunaan NaOH untuk menetralkan pH sangat banyak maka, akan 
                mempengaruhi tingginya biaya produksi khususnya untuk penegndalian limbah. - Untuk itu 
                harapannya agar pemakain NaOH dapat diminalkan dengan cara-cara apapun agar pH limbah dapat 
                memenuhi syarat KLH sebelum di buang ke laut.</p>
            <h5><strong>Perbaikan</strong></h5>
            <p class="m-b-15 text-dark">melengkapi anjungan seperti bagian atas hopper (posisi untuk cleaning, 
                diatasnya ogleng), yang tersedia 4 anjungan (keliling)</p>
            <h5><strong>Manfaat</strong></h5>
            <p class="text-dark">untuk kenyamanan dan keamanan ketika bongkar dan rakit hopper yang dipindahkan</p>
        </div>
        <div class="card-body border-bottom">
            <div class="row">
                <table class="table-responsive table-sm table-borderless col-md-12">
                    <tbody>
                        <tr>
                            <td class="text-dark" style="width: 110px"><h5><strong>Status</strong></h5></td>
                            <td class="text-dark"><h5>KIRIM</h5></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-body border-bottom">
            <div class="row">
                <div class="col-lg-6 m-b-15">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark"><h5><strong>Catatan Fasilitator</strong></h5></td>
                                </tr>
                                <tr>
                                    <td class="text-dark"><p>Belum ada catatan fasilitator</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <table class="table-responsive table-sm table-borderless col-md-12">
                            <tbody>
                                <tr>
                                    <td class="text-dark"><h5><strong>Catatan Unit Kerja Tujuan</strong></h5></td>
                                </tr>
                                <tr>
                                    <td class="text-dark"><p>Belum ada catatan manager</p></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="accordion m-b-20" id="accordion-plan">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" href="#collapsePlan">
                        <span>File Pendukung</span>
                    </a>
                </h4>
            </div>
            <div id="collapsePlan" class="collapse show" data-parent="#accordion-plan">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col"><strong>File</strong></th>
                                    <th scope="col"><strong>Keterangan</strong></th>
                                    <th scope="col"><strong>Aksi</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>RKS Administrasi Umum.pdf</td>
                                    <td>Draft RKS Administrasi Umum</td>
                                    <td>
                                        <div class="row">
                                            <a class="m-b-10 m-l-10">
                                                <button class="btn btn-icon btn-success btn-sm btn-rounded btn-tone" data-toggle="tooltip" data-placement="bottom" title="Detail">
                                                    <i class="anticon anticon-eye"></i>
                                                </button> 
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
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Tindak Lanjut Manager</h4>
        </div>
        <div class="card-body">
            <label class="font-weight-bold" for="formGroupExampleInput">Catatan Manager</label>
            <textarea type="text" class="form-control m-b-20" name="kondisi_awal" placeholder="Tinggalkan catatan" rows="5"></textarea>
            <label class="font-weight-bold" for="formGroupExampleInput">Merekomendasikan untuk dilanjutkan ke:</label>
            <div class="m-b-20" style="width: 100%">
                <select class="select2" name="state">
                    <option value="AP">Pilih metodologi</option>
                    <option value="NL">Nails</option>
                    <option value="BN">Bananas</option>
                    <option value="HL">Helicopters</option>
                </select>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <button class="btn btn-danger" style="width: 100%">
                        <i class="fas fa-times"></i> Tolak
                    </button>
                </div>
                <div class="col-lg-4">
                    <button class="btn btn-default" style="width: 100%">
                        <i class="fas fa-sync-alt"></i> Revisi
                    </button>
                </div>
                {{-- <div class="col-lg-3">
                    <button class="btn btn-warning" style="width: 100%">
                        <i class="fas fa-exclamation"></i> Perlu Verifikasi Departemen
                    </button>
                </div> --}}
                <div class="col-lg-4">
                    <button class="btn btn-success" style="width: 100%">
                        <i class="fas fa-check"></i> Terima
                    </button>
                </div>
            </div>
        </div>
    </div>
    

@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>
@endsection