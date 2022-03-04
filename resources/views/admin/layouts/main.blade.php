<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sergio | {{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="landpage/images/favicon.ico">

    <!-- page css -->
    @yield('css')
    
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.html">
                        <img src="assets/images/logo/logo.png" alt="Logo" height="40">
                        <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo" height="40">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.html">
                        <img src="assets/images/logo/logo-white.png" alt="Logo" height="40">
                        <img class="logo-fold" src="assets/images/logo/logo-fold-white.png" alt="Logo" height="40">
                    </a>
                </div>

                <!-- Navbar -->
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        {{-- @auth --}}
                            <li class="dropdown dropdown-animated scale-left">
                                <div class="pointer" data-toggle="dropdown">
                                    <div class="row">
                                        <div class="avatar avatar-image  m-h-10 m-r-15">
                                            <img src="assets/images/avatars/thumb-3.jpg"  alt="">
                                        </div>
                                        <div class="m-t-10 m-r-20">
                                            <h6>Nama User</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                    <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                        <div class="d-flex m-r-50">
                                            <div class="avatar avatar-lg avatar-image">
                                                <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                            </div>
                                            <div class="m-l-10">
                                                <p class="m-b-0 text-dark font-weight-semibold">Nama User</p>
                                                {{-- <p class="m-b-0 text-dark font-weight-semibold">{{ auth()->user()->nama }}</p> --}}
                                                <p class="m-b-0 opacity-07">Dept. Inovasi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/profil" class="dropdown-item d-block p-h-15 p-v-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                                <span class="m-l-10">Lihat Profil</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </a>
                                    <a href="/faq" class="dropdown-item d-block p-h-15 p-v-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <i class="anticon anticon-question"></i>
                                                <span class="m-l-10">FAQ</span>
                                            </div>
                                            <i class="anticon font-size-10 anticon-right"></i>
                                        </div>
                                    </a>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <a type="submit" class="dropdown-item d-block p-h-15 p-v-10">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                                    <span class="m-l-10">Logout</span>
                                                </div>
                                                <i class="anticon font-size-10 anticon-right"></i>
                                            </div>
                                        </a>
                                    </form>
                                </div>                             
                            </li>
                        {{-- @endauth --}}
                    </ul>
                </div>
                <!-- Navbar END -->
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            @include('admin/layouts/sidebar')
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Sergio</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                @yield('breadcrumb')
                            </nav>
                        </div>
                    </div>
                    
                    @yield('content')

                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                @include('admin/layouts/footer')
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/chartist/chartist.min.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>

    @yield('js')


    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>