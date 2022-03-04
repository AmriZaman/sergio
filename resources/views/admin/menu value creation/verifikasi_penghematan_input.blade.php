@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <link href="assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-users"></i>   Menu Value Creation</span>
    <a class="breadcrumb-item" href="/verifikasi-penghematan">Verifikasi Penghematan Gugus</a>
    <span class="breadcrumb-item" active>Input Hasil Verifikasi Penghematan</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="card-title">Form Hasil Verifikasi Penghematan</h4>
                {{-- <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-download"></i>  Download Panduan Penilaian</button> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <table class="table-responsive table-sm table-borderless col-md-12">
                                <tbody>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Nomor Registrasi</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">002/SS/Komp Umum/Dep Corporate Social Responsibili</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Metodologi</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">GIO</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Kategori</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Perkantoran</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Nama Gugus</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">GIO Petroport</td>
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
                                        <td class="text-dark align-top" style="width: 30%"><strong>Kompartemen</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Komp Umum</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Departemen</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Dep Corporate Social Responsibility</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark align-top" style="width: 30%"><strong>Bagian</strong></td>
                                        <td class="text-dark align-top" style="width: 5%">:</td>
                                        <td class="text-dark align-top" style="width: 65%">Bag Administrasi Keuangan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="card-body col-lg-12">
                <div class="border-bottom">
                    <h4 class="m-b-10">Plan, Do, Check, Action (40%)</h4>
                </div>
                <div class="col-lg-12 m-t-10">
                    <h5><strong>Plan</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Identifikasi masalah (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Penentuan Tema & judul (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Penetapan Sasaran (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Pembuatan hubungan Sebab Akibat (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Analisis & penetapan akar penyebab (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Perencanaan Perbaikan (5W+2H) (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Pemanfaatan peranan pihak terkait (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Do</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Upaya Perbaikan (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Pemantauan Penerapan Perbaikan (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Kerjasama anggota (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Check</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Evaluasi Hasil (4%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Pengelolaan dampak (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Proses pembelajaran (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Action</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Standarisasi (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Penetapan Tema berikutnya (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="border-bottom m-t-30">
                    <h4 class="m-b-10">Creativity & Result (50%)</h4>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Creativity</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Kreativitas penyelesaian masalah (10%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Keaslian Ide (10%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Result</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Rasio Pencapaian Before & After (10%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Manfaat finansial (12%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Evaluasi terhadap aspek Mutu (8%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="border-bottom m-t-30">
                    <h4 class="m-b-10">Paper & Presentation (10%)</h4>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Paper</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Sistimatika & Kesesuaian dengan aturan (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Estetika & Daya tarik Risalah (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Konsistensi Pelaporan PDCA (2%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 m-t-20">
                    <h5><strong>Presentation</strong></h5>
                    <div class="row m-t-10">
                        <div class="col-md-6">
                            <label>Kejelasan dan Pengelolaan Presentasi (3%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label>Teamwork (1%)</label>
                            <select class="select2" name="state">
                                <option value="0">0</option>
                                <option value="10">10</option>
                                <option value="9">9</option>
                                <option value="8">8</option>
                                <option value="7">7</option>
                                <option value="6">6</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="m-t-40">
                    <button class="btn btn-success btn-block">Simpan Nilai</button>
                </div>
            </div> --}}
            <div class="card-body col-lg-12">
                <div class="border-bottom">
                    <h4 class="card-title">Direct Financial Benefit</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-t-20">
                    <h4 class="card-title">Indirect Financial Benefit</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-t-20">
                    <h4 class="card-title">Transfer of Benefit</h4>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                        <div class="input-group-append">
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-t-20">
                    <h4 class="card-title">Intangible Impact Value</h4>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                    </div>
                </div>
                <div class="m-t-40">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/verifikasi-penghematan">
                                <button class="btn btn-warning btn-block">Kembali</button>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-success btn-block">Simpan Nilai</button>
                        </div>
                    </div>
                </div>
            </div>
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
