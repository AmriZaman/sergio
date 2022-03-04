@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-customer-service"></i>   Frequently Asked Questions (FAQ)</span>
@endsection

@section('content')
    <div class="card">
        <div class="card-header border-bottom">
            <h4 class="card-title">Frequently Asked Questions (FAQ)</h4>
        </div>
        <div class="card-body">
            <h4>Pertanyaan Seputar Sergio</h4>
            <div class="accordion" id="accordion-default">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#collapseOneDefault">
                                <span>Q: Apa itu Sergio?</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOneDefault" class="collapse" data-parent="#accordion-default">
                        <div class="card-body">
                            <p>---PEMBAHASAN / JAWABANNYA---</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#collapseTwoDefault">
                                <span>Q: Bagaimana cara login ke akun Sergio?</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwoDefault" class="collapse" data-parent="#accordion-default">
                        <div class="card-body">
                            <p>---PEMBAHASAN / JAWABANNYA---</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">
                            <a class="collapsed" data-toggle="collapse" href="#collapseThreeDefault">
                                <span>Q: Apa perbedaan Sergio lama dan baru?</span>
                            </a>
                        </h5>
                    </div>
                    <div id="collapseThreeDefault" class="collapse" data-parent="#accordion-default">
                        <div class="card-body">
                            <p>---PEMBAHASAN / JAWABANNYA---</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="assets/js/pages/chat.js"></script>
@endsection