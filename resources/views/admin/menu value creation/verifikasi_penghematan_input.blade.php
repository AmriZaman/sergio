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
            <div class="card-body col-lg-12">
                <div class="border-bottom m-b-20">
                    <h4 class="card-title">1. Direct Financial Benefit</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Klaim Gugus</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai" disabled>
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Keterangan Klaim</label>
                        <div class="input-group col-sm-10">
                            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Keterangan / perhitungan yang mendasari klaim tersebut" rows="3" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Hasil Verifikasi</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-b-20">
                    <h4 class="card-title">2. Indirect Financial Benefit</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Klaim Gugus</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai" disabled>
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Keterangan Klaim</label>
                        <div class="input-group col-sm-10">
                            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Keterangan / perhitungan yang mendasari klaim tersebut" rows="3" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Hasil Verifikasi</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-b-20">
                    <h4 class="card-title">3. Transfer of Benefit</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Klaim Gugus</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai" disabled>
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Keterangan Klaim</label>
                        <div class="input-group col-sm-10">
                            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Keterangan / perhitungan yang mendasari klaim tersebut" rows="3" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Hasil Verifikasi</label>
                        <div class="input-group col-sm-10">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount" placeholder="Input nilai">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom m-b-20">
                    <h4 class="card-title">4. Intangible Impact Value</h4>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Klaim Gugus</label>
                        <div class="input-group col-sm-10">
                            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Tulis Keterangan Intangible Impact Value" rows="5" disabled></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Hasil Verifikasi</label>
                        <div class="input-group col-sm-10">
                            <textarea type="text" class="form-control" name="kondisi_awal" placeholder="Tulis Keterangan Intangible Impact Value" rows="5"></textarea>
                        </div>
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
