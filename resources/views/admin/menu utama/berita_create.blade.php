@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <a class="breadcrumb-item" href="/berita">Berita</a>
    <span class="breadcrumb-item active">Tambah Berita</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between m-b-15">
                <h4 class="m-b-0">Tambah Berita Baru</h4>
            </div>
            <form id="form-validation">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Judul Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Nama Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama_penulis" placeholder="Penulis">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label control-label">Isi Berita</label>
                    <div class="m-b-50 col-sm-10">
                        <div id="berita">
                            <p>Hello World!</p>
                            <p>Some initial <strong>bold</strong> text</p>
                            <p><br></p>
                        </div>
                    </div>
                </div>
                <div class="form-group text-right">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-success m-l-10">Tambah</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
    {{-- <script src="assets/vendors/jquery-validation/jquery.validate.min.js"></script> --}}

    <script>
        new Quill('#berita', {theme: 'snow'});
    </script>

    {{-- <script>
        $( "#form-validation" ).validate({
            ignore: ':hidden:not(:checkbox)',
            errorElement: 'label',
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            rules: {
                judul_berita: {
                    required: true
                    maxlength: 8
                },
                nama_penulis: {
                    required: true,
                    minlength: 6
                }
            }
        });
    </script> --}}
@endsection