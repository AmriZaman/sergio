@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-customer-service"></i>   Klinik Inovasi</span>
@endsection

@section('content')
    <div class="container-fluid p-h-0">
        <div class="chat chat-app row">
            <div class="chat-list">
                <div class="chat-user-tool">
                    <i class="anticon anticon-search search-icon p-r-10 font-size-20"></i>
                    <input placeholder="Cari ...">
                </div>
                <div class="chat-user-list">
                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image">
                                <img src="assets/images/avatars/thumb-1.jpg" alt="">
                            </div>
                            <div class="p-l-15">
                                <h5 class="m-b-0">Erik Hidayanto</h5>
                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                    Wow, that was cool!
                                </p>
                            </div>
                        </div>
                    </a>
                    <a class="chat-list-item p-h-25" href="javascript:void(0);">
                        <div class="media align-items-center">
                            <div class="avatar avatar-image">
                                <img src="assets/images/avatars/thumb-7.jpg" alt="">
                            </div>
                            <div class="p-l-15">
                                <h5 class="m-b-0">Gunawan</h5>
                                <p class="msg-overflow m-b-0 text-muted font-size-13">
                                    wah ok pak, terima kasih atas bantuannya
                                </p>
                            </div>
                        </div>
                    </a>
                </div>   
            </div>
            <div class="chat-content">
                <div class="conversation">
                    <div class="conversation-wrapper">
                        <div class="conversation-header justify-content-between">
                            <div class="media align-items-center">
                                <a href="javascript:void(0);" class="chat-close m-r-20 d-md-none d-block text-dark font-size-18 m-t-5" >
                                    <i class="anticon anticon-left-circle"></i>
                                </a>
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                                <div class="p-l-15">
                                    <h6 class="m-b-0">Erik Hidayanto</h6>
                                    <p class="m-b-0 text-muted font-size-13 m-b-0">
                                        <span class="badge badge-success badge-dot m-r-5"></span>
                                        <span>Online</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="conversation-body">
                            <div class="msg justify-content-center">
                                <div class="font-weight-semibold font-size-12"> 7:57PM </div>
                            </div>
                            <div class="msg msg-recipient">
                                <div class="m-r-10">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bubble">
                                    <div class="bubble-wrapper">
                                        <span>Permisi Bapak, maaf mengganggu waktunya, apakah saya bisa menanyakan beberapa hal terkait sistem sergio?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="msg msg-sent">
                                <div class="bubble">
                                    <div class="bubble-wrapper">
                                        <span>Dipersilahkan Pak Erik, apabila ada kendala bisa ditanyakan langsung</span>
                                    </div>
                                </div>
                            </div>
                            <div class="msg msg-recipient">
                                <div class="m-r-10">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="bubble">
                                    <div class="bubble-wrapper p-5">
                                        <img src="https://s3.envato.com/files/249796117/preview.__large_preview.png" alt="https://s3.envato.com/files/249796117/preview.__large_preview.png">
                                    </div>
                                </div>
                            </div>
                            <div class="msg msg-recipient">
                                <div class="bubble m-l-50">
                                    <div class="bubble-wrapper">
                                        <span>Bagaimana cara mendaftarkan sergio Pak?</span>
                                    </div>
                                </div>
                            </div>
                            <div class="msg msg-recipient">
                                <div class="bubble m-l-50">
                                    <div class="bubble-wrapper">
                                        <span>Seperti pada screenshot yang saya lampirkan diatas</span>
                                    </div>
                                </div>
                            </div>
                            <div class="msg msg-sent">
                                <div class="bubble">
                                    <div class="bubble-wrapper">
                                        <span>Mohon maaf bapak, untuk mendaftar ke Sergio, bapak harus terlebih dahulu mendaftarkan Ide bapak ke menu Sumbang Gagasan yang kemudian akan melalui Approval dari Fasilitator dan Manager Departemen Bapak</span>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="conversation-footer">
                            <input class="chat-input" type="text" placeholder="Tulis pesan ...">
                            <ul class="list-inline d-flex align-items-center m-b-0">
                                <li class="list-inline-item m-r-15">
                                    <a class="text-gray font-size-20" href="javascript:void(0);" data-toggle="tooltip" title="Attachment">
                                        <i class="anticon anticon-paper-clip"></i>
                                    </a>
                                </li>    
                                <li class="list-inline-item">
                                    <button class="d-none d-md-block btn btn-primary">
                                        <span class="m-r-10">Kirim</span>
                                        <i class="far fa-paper-plane"></i>
                                    </button>
                                    <a href="javascript:void(0);" class="text-gray font-size-20 d-md-none d-block">
                                        <i class="far fa-paper-plane"></i>
                                    </a>
                                </li>
                            </ul>
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