@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <a class="breadcrumb-item" href="/panduan-inovasi">Panduan Inovasi</a>
    <span class="breadcrumb-item" active>Edit Panduan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between m-b-15">
                <h4 class="m-b-0">Tambah Panduan Inovasi</h4>
            </div>
            <form id="form-validation">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Judul Panduan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul_panduan" placeholder="Judul Panduan">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Deskripsi</label>
                    <div class="m-b-50 col-sm-10">
                        <div id="panduan">
                            <p>Hello World!</p>
                            <p>Some initial <strong>bold</strong> text</p>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Isi Berita</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Pilih file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success m-l-10">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script>
        new Quill('#panduan', {theme: 'snow'});
    </script>
@endsection