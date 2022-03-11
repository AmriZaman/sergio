@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet"> 
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-book"></i>   Menu Rekap Kegiatan Inovasi</span>
    <span class="breadcrumb-item" active>Grafik Sumbang Gagasan</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Grafik Sumbang Gagasan</h4>
        </div>
        <div class="card-body">
            <div class="">
                <h4 class="card-title">Pilih Rentang Periode Perankingan</h4>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex align-items-center">
                        <div class="m-b-15 col-md-5">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                        <div class="m-b-15 col-md-1" style="text-align: center">
                            <span>s.d.</span>
                        </div>
                        <div class="m-b-15 col-md-6">
                            <select class="select2" name="state">
                                <option value="AP">Pilih Periode</option>
                                <option value="NL">Nails</option>
                                <option value="BN">Bananas</option>
                                <option value="HL">Helicopters</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <label class="col-md-2 col-form-label control-label text-center">Pilih Filter Metodologi:</label>
                        <div class="col-md-8">
                            <div class="row m-t-5">
                                <div class="checkbox col-md-2">
                                    <input id="checkbox1" type="checkbox" checked="">
                                    <label for="checkbox1">SG</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">SS</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">IP</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">GIO</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">GIM</label>
                                </div>
                                <div class="checkbox col-md-2">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">5R</label>
                                </div>
                            </div>
                        </div>
                        <div class="m-b-30 col-md-2" style="width: 100%">
                            <button class="btn btn-success btn-tone m-r-5 col-md-12"><i class="fas fa-download"></i>  Download</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ct-chart" id="horizontal-bar"></div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>

    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script>
        new Chartist.Bar('.ct-chart', {
            labels: ['Periode 17.1', 'Periode 18.1', 'Periode 19.1', 'Periode 20.1', 'Periode 21.1'],
            series: [
                [5, 4, 3, 7, 5],
                [3, 2, 9, 5, 4],
                [8, 6, 12, 12, 9]
            ]
        }, {
            seriesBarDistance: 15,
            reverseData: false,
            horizontalBars: false,
            axisY: {
                offset: 80
            }
        });
    </script>
@endsection