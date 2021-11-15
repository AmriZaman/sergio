@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">    
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-user"></i>   Menu Administrasi</span>
    <a class="breadcrumb-item" href="/periode">Periode</a>
    <span class="breadcrumb-item" active>Edit Periode SG</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between m-b-15">
            <h4 class="m-b-0">Edit Periode Sumbang Gagasan</h4>
        </div>
        <form id="form-validation">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Kode Periode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode_periode" placeholder="Kode Periode">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Tema Periode</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="tema_periode" placeholder="Tema Periode">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Pengusulan Gagasan</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <input type="text" class="form-control datepicker-input" name="pengusulan_gagasan_sg_start" placeholder="From">
                    <span class="p-h-10">s.d.</span>
                    <input type="text" class="form-control datepicker-input" name="pengusulan_gagasan_sg_end" placeholder="To">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Verifikasi</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <input type="text" class="form-control datepicker-input" name="verifikasi_sg_start" placeholder="From">
                    <span class="p-h-10">s.d.</span>
                    <input type="text" class="form-control datepicker-input" name="verifikasi_sg_end" placeholder="To">
                </div>
            </div>     
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Penilaian Juri</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <input type="text" class="form-control datepicker-input" name="penilaian_juri_sg_start" placeholder="From">
                    <span class="p-h-10">s.d.</span>
                    <input type="text" class="form-control datepicker-input" name="penilaian_juri_sg_end" placeholder="To">
                </div>
            </div>     
            <div class="form-group text-right">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-success m-l-10">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker-input').datepicker();
    </script>
@endsection