@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <a class="breadcrumb-item" href="/gagasan">Daftar Gagasan</a>
    <span class="breadcrumb-item" active>Tambah Gagasan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <form id="form-validation">
            <div class="card-header border-bottom">
                <h4 class="card-title">Form Tambah Gagasan</h4>
            </div>
            <div class="card-body">
                <h4>Pilih Periode Sumbang Gagasan</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="radio">
                            <input id="radio1" name="radioDemo" type="radio" checked="">
                            <label for="radio1">21.1 - Sumbang Gagasan 2021-2022</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="radio">
                            <input id="radio2" name="radioDemo" type="radio">
                            <label for="radio2">20.1 - Sumbang Gagasan 2020-2021</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4>Pilih Departemen Tujuan</h4>
                <select class="select2" name="state">
                    <option value="AP">Pilih Departemen</option>
                    <option value="NL">Kompartemen A - Departemen B</option>
                    <option value="BN">Kompartemen B - Departemen A</option>
                    <option value="HL">Kompartemen C - Departemen A</option>
                </select>
            </div>
            <div class="card-body">
                <h4>Tulis Usulan</h4>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Judul Usulan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul_usulan" placeholder="Judul sulan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="col-form-label control-label">Gambaran Kondisi Awal</label>
                        <p class="text-danger font-size-10">*maksimal 1.000 karakter (huruf)</p>
                    </div>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Tulis kondisi awal" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="col-form-label control-label">Gagasan Perbaikan</label>
                        <p class="text-danger font-size-10">*maksimal 1.000 karakter (huruf)</p>
                    </div>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="gagasan_perbaikan" placeholder="Tulis gagasan perbaikan" rows="5"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="col-form-label control-label">Analisa Manfaat</label>
                        <p class="text-danger font-size-10">*maksimal 1.000 karakter (huruf)</p>
                    </div>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="analisa_manfaat" placeholder="Tulis analisa manfaat" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4>Upload File Pendukung</h4>
                <div class="form-group row">
                    <div class="col-sm-2">
                        <label class="col-form-label control-label">Dokumentasi Pendukung Lain</label>
                        <p class="text-danger font-size-10">
                            *Format file ppt, pptx, doc, docx, xls, xlsx, pdf, jpg, jpeg, atau png <br>
                            *Ukuran maksimal 5 MB/file <br>
                            *Hilangkan tanda centang pada nama file pendukung sebelum menekan tombol KIRIM USULAN GAGASAN untuk membatalkan penyertaan lampiran.
                        </p>
                    </div>
                    <div class="col-sm-10">
                        <div class="custom-file m-b-20">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih file</label>
                        </div>
                        <textarea type="text" class="form-control m-b-20" name="deskripsi_file" placeholder="Tulis deskripsi file yang akan diupload" rows="3"></textarea>
                        <button class="btn btn-success btn-tone m-r-5"><i class="fas fa-upload"></i>  Upload</button>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="text-right">
                    {{-- <div class="checkbox m-r-10">
                        <input id="checkbox2" type="checkbox" class="btn-success btn-tone">
                        <label for="checkbox2">Saya menyetujui peraturan yang ada di event Sumbang Gagasan.</label>
                    </div> --}}
                    <button class="btn btn-default m-r-10">Cancel</button>
                    <button class="btn btn-success">Tambah</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>
@endsection