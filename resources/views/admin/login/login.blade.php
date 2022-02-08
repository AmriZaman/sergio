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
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" src="assets/images/logo/logo.png" width="160">
                                        <h2 class="m-b-0">Login</h2>
                                    </div>
                                    @if(session()->has('loginError'))
                                        <div class="alert alert-danger">
                                            <div class="d-flex align-items-center justify-content-start">
                                                <span class="alert-icon">
                                                    <i class="anticon anticon-close-o"></i>
                                                </span>
                                                <span>{{ session('loginError') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                    <form action="/login" method="post">
                                        @csrf 
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">NIK:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                {{-- <input type="text" name="nik" class="form-control" @error('nik') is-invalid @enderror id="nik" placeholder="NIK" autofocus required value="{{ old('nik') }}"> --}}
                                                <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK" autofocus required>
                                                {{-- @error('nik')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror --}}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-primary float-right" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex p-h-40 justify-content-between">
                    <span class="">© Departemen Inovasi & Sistem Manajemen <a href="/beranda">Beranda</a></span>
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-primary" type="submit">
                            Logout
                        </button>
                        {{-- <a type="submit" class="dropdown-item d-block p-h-15 p-v-10">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                    <span class="m-l-10">Logout</span>
                                </div>
                                <i class="anticon font-size-10 anticon-right"></i>
                            </div>
                        </a> --}}
                    </form>
                    
                </div>
            </div>
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