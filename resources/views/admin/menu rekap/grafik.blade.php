@extends('admin.layouts.main')

@section('css')
    <link href="assets/vendors/select2/select2.css" rel="stylesheet"> 
@endsection

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="fas fa-book"></i>   Menu Rekap Kegiatan Inovasi</span>
    <span class="breadcrumb-item" active>Grafik Sumbang Gagasan</span>

    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Grafik Sumbang Gagasan</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="m-b-15">
                        <select class="select2" name="state">
                            <option value="AP">Semua Periode</option>
                            <option value="NL">Nails</option>
                            <option value="BN">Bananas</option>
                            <option value="HL">Helicopters</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="m-b-15">
                        <select class="select2" name="state">
                            <option value="AP">Semua Bulan</option>
                            <option value="NL">Nails</option>
                            <option value="BN">Bananas</option>
                            <option value="HL">Helicopters</option>
                        </select>
                    </div>
                </div>
            </div>
            <ul class="nav nav-tabs nav-justified" id="myTabJustified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-justified" data-toggle="tab" href="#home-justified" role="tab" aria-controls="home-justified" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-justified" data-toggle="tab" href="#profile-justified" role="tab" aria-controls="profile-justified" aria-selected="false">Profile</a>
                </li>
            </ul>
            <div class="tab-content m-t-15" id="myTabContentJustified">
                <div class="tab-pane fade show active" id="home-justified" role="tabpanel" aria-labelledby="home-tab-justified">
                    <div class="card-body">
                        <h4>Jumlah Sumbang Gagasan Periode 21.1 Per Kompartemen Bulan Desember 2021</h4>
                        <div class="ct-chart" id="horizontal-bar"></div>
                        <h4 class="m-t-20">Jumlah Sumbang Gagasan Periode 21.1 Per Kompartemen S/D Bulan Desember 2021</h4>
                        <div class="ct-chart" id="horizontal-bar2"></div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab-justified">
                    <div class="card-body">
                        <h4>Jumlah Sumbang Gagasan Periode 21.1 Per Departemen Bulan Desember 2021</h4>
                        <div class="ct-chart" id="horizontal-bar3"></div>
                        <h4 class="m-t-20">Jumlah Sumbang Gagasan Periode 21.1 Per Departemen S/D Bulan Desember 2021</h4>
                        <div class="ct-chart" id="horizontal-bar4"></div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script>$('.select2').select2();</script>

    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script>
        new Chartist.Bar('#horizontal-bar', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });

        new Chartist.Bar('#horizontal-bar2', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });

        new Chartist.Bar('#horizontal-bar3', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });

        new Chartist.Bar('#horizontal-bar4', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            series: [
                [5, 4, 3, 7, 5, 10, 3]
            ]
        }, {
            seriesBarDistance: 10,
            reverseData: true,
            horizontalBars: true,
            axisY: {
                offset: 70
            }
        });
    </script>
@endsection