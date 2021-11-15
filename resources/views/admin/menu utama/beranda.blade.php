@extends('admin.layouts.main')

@section('breadcrumb')
    <span class="breadcrumb-item"><i class="anticon anticon-appstore"></i>   Menu Utama</span>
    <span class="breadcrumb-item" active>Beranda</span>
    
    {{-- backup
    <a class="breadcrumb-item" href="#">Breadcrumb 1</a>
    <span class="breadcrumb-item active">Breadcrumb 2</span> --}}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0">Sumbang Gagasan</p>
                            <h2 class="m-b-0">
                                <span>1.033</span>
                            </h2>
                        </div>
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0">Sistem Saran</p>
                            <h2 class="m-b-0">
                                <span>1.000</span>
                            </h2>
                        </div>
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0">5R</p>
                            <h2 class="m-b-0">
                                <span>406</span>
                            </h2>
                        </div>
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0">GIO</p>
                            <h2 class="m-b-0">
                                <span>98</span>
                            </h2>
                        </div>
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-2">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <p class="m-b-0">GIM</p>
                            <h2 class="m-b-0">
                                <span>101</span>
                            </h2>
                        </div>
                        <div class="avatar avatar-icon avatar-lg avatar-cyan">
                            <i class="anticon anticon-bar-chart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Card Informasi END --}}


    <div class="card">
        <div class="card-body">
            <div class="d-flex align-items-center justify-content-between m-b-15">
                <h4 class="m-b-0">Headline</h4>
                <div class="card-toolbar">
                    <div class="dropdown dropdown-animated scale-left">
                        <ul>
                            <li>
                                <a class="text-gray" href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="anticon anticon-ellipsis font-size-20"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" type="button" data-toggle="modal" data-target=".headline-modal">Edit</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Large modal -->
                <div class="modal fade headline-modal">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title h4">Edit Headline</h5>
                                <button type="button" class="close" data-dismiss="modal">
                                    <i class="anticon anticon-close"></i>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Judul">
                                    </div>
                                    <div class="form-group">
                                        <div id="headline">
                                            <p>Hello World!</p>
                                            <p>Some initial <strong>bold</strong> text</p>
                                            <p><br></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                Explicabo voluptatum ex ad laboriosam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                Explicabo voluptatum ex ad laboriosam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                Explicabo voluptatum ex ad laboriosam.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                Explicabo voluptatum ex ad laboriosam.
            </p>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-6 col-lg-7">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-15">
                        <h4 class="m-b-0">Reward & Penghargaan</h4>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-animated scale-left">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="javascript:void(0)" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis font-size-20"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" type="button" data-toggle="modal" data-target=".penghargaan-modal">Edit</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Large modal -->
                        <div class="modal fade penghargaan-modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h4">Edit Reward & Penghargaan</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Judul">
                                            </div>
                                            <div class="form-group">
                                                <div id="penghargaan">
                                                    <p>Hello World!</p>
                                                    <p>Some initial <strong>bold</strong> text</p>
                                                    <p><br></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between m-b-15">
                        <h4 class="m-b-0">Petunjuk Pelaksanaan</h4>
                        <div class="card-toolbar">
                            <div class="dropdown dropdown-animated scale-left">
                                <ul>
                                    <li>
                                        <a class="text-gray" href="javascript:void(0)" data-toggle="dropdown">
                                            <i class="anticon anticon-ellipsis font-size-20"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" type="button" data-toggle="modal" data-target=".petunjuk-modal">Edit</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Large Edit -->
                        <div class="modal fade petunjuk-modal">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h4">Edit Petunjuk Pelaksanaan</h5>
                                        <button type="button" class="close" data-dismiss="modal">
                                            <i class="anticon anticon-close"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Judul">
                                            </div>
                                            <div class="form-group">
                                                <div id="petunjuk">
                                                    <p>Hello World!</p>
                                                    <p>Some initial <strong>bold</strong> text</p>
                                                    <p><br></p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, explicabo nisi! Molestias 
                        animi corrupti deleniti? Illo nam et quas corrupti inventore suscipit numquam, nemo labore. 
                        Explicabo voluptatum ex ad laboriosam.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        new Quill('#headline', {theme: 'snow'});
        new Quill('#penghargaan', {theme: 'snow'});
        new Quill('#petunjuk', {theme: 'snow'});
    </script>
@endsection