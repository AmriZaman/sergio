@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-user"></i>   Profil Karyawan</span>
@endsection

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
@endsection

@section('content')
    <div class="accordion m-b-20" id="accordion-plan">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">
                    <a data-toggle="collapse" href="#collapsePlan">
                        <span>Fasilitator</span>
                    </a>
                </h4>
            </div>
            <div id="collapsePlan" class="collapse show" data-parent="#accordion-plan">
                <div class="card-body">
                    <label class="font-weight-bold" for="formGroupExampleInput">Fasilitator / Atasan Langsung</label>
                    <div class="m-b-10" style="width: 100%">
                        <select class="select2" name="state">
                            <option value="AP">Pilih Fasilitator</option>
                            <option value="NL">T123456 - Karyawan A</option>
                            <option value="BN">T223456 - Karyawan B</option>
                            <option value="HL">T323456 - Karyawan C</option>
                        </select>
                    </div>
                    <span>Fasilitator yang Anda pilih nantinya akan berwenang melakukan persetujuan, revisi atau penangguhan Gagasan yang Anda kirimkan. Jika status kepegawaian Anda masih PKWT, silahkan menentukan fasilitator sesuai dengan Kepala Bagian atau yang setingkat pada struktur organisasi pemagangan (PKWT) Anda saat ini.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between m-b-15">
                <h4 class="m-b-0">Profil Karyawan</h4>
            </div>
            <div>
                <div class="row">
                    <div class="col-lg-5">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-7">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td style="width: 100px">No Induk</td>
                                        <td style="width: 10px">:</td>
                                        <td>T123456</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Nama</td>
                                        <td style="width: 10px">:</td>
                                        <td>Pratama Egy</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Tempat Lahir</td>
                                        <td style="width: 10px">:</td>
                                        <td>Jakarta</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Tanggal Lahir</td>
                                        <td style="width: 10px">:</td>
                                        <td>12-10-1989</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Alamat</td>
                                        <td style="width: 10px">:</td>
                                        <td>Jl. Sagu, no 10, Gresik</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Position Code</td>
                                        <td style="width: 10px">:</td>
                                        <td>D77182731C</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Position Name</td>
                                        <td style="width: 10px">:</td>
                                        <td>SMd II Manajemen Pengetahuan & Inovasi</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Kompartemen</td>
                                        <td style="width: 10px">:</td>
                                        <td>Komp Sumber Daya Manusia</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 100px">Departemen</td>
                                        <td style="width: 10px">:</td>
                                        <td>Dep Inovasi & Sistem Manajemen</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
                        <span>Kontak Email dan Nomor Extension</span>
                    </a>
                </h4>
            </div>
            <div id="collapsePlan" class="collapse show" data-parent="#accordion-plan">
                <div class="card-body">
                    <div class="form-group">
                        <label class="font-weight-bold" for="formGroupExampleInput">Alamat E-mail 1</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan alamat email">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="formGroupExampleInput">Alamat E-mail 2</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan alamat email">
                    </div>
                    <div class="form-group">
                        <label class="font-weight-bold" for="formGroupExampleInput">Nomor Extension</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan nomor extension">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-t-20">
        <button class="btn btn-success btn-block">Simpan Perubahan</button>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>
@endsection