@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">  
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">    
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-trophy"></i>   Menu Konvensi</span>
    <a class="breadcrumb-item" href="/inisiasi-konvensi">Inisiasi Konvensi</a>
    <span class="breadcrumb-item" active>Edit Inisiasi Konvensi</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="d-flex align-items-center justify-content-between m-b-15">
            <h4 class="m-b-0">Edit Inisiasi Konvensi</h4>
        </div>
        <form id="form-validation">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Nama Konvensi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode_periode" placeholder="Nama Konvensi">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Level Konvensi</label>
                <div class="m-b-15 col-md-10">
                    <select class="select2" name="state">
                        <option value="AP">Pilih Level Konvensi</option>
                        <option value="NL">Nasional</option>
                        <option value="BN">Internasional</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label control-label">Waktu Pelaksanaan</label>
                <div class="col-sm-10 d-flex align-items-center">
                    <input type="text" class="form-control datepicker-input" name="pengusulan_gagasan_sg_start" placeholder="Tgl Mulai">
                    <span class="p-h-10">s.d.</span>
                    <input type="text" class="form-control datepicker-input" name="pengusulan_gagasan_sg_end" placeholder="Tgl Berakhir">
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
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>

    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script>
        $('.datepicker-input').datepicker();
    </script>
@endsection