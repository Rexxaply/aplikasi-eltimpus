<div class="main-panel">
    <div class="content my-margin">
        <div class="panel-header bg-primary-gradient">
        </div>
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title text-white">Dashboard</h4>
            </div>
            <div class="page-category">
                <div class="row my-3">
                    <div class="col-md-12 text-white">
                        <i class="fas fa-info-circle"></i> Hello <strong class="text-warning">Reza</strong>, Selamat Datang di <strong> ELTIMPUS </strong>
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn">
                            <div class="mt-4">
                                <i class="fas fa-chalkboard-teacher fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <p class="card-text">Instruktur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-03s">
                            <div class="mt-4">
                                <i class="fas fa-book-open fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <p class="card-text">Daftar Mata Kuliah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-06s">
                            <div class="mt-4">
                                <i class="fas fa-graduation-cap fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <p class="card-text">Jumlah Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-09s">
                            <div class="mt-4">
                                <i class="fas fa-university fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <p class="card-text">Daftar Jurusan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card flex-warp my-rounded on-hover py-3 animate__animated animate__fadeInRight animate__delay-07s">
                            <div class="card-body">
                                <div class="row ml-4">
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-5x mr-4 text-success"></i>
                                    </div>
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Uang</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 0</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card d-flex flex-warp my-rounded on-hover animate__animated animate__fadeInRight animate__delay-09s">
                            <div class="card-body">
                                <div class="row ml-4">
                                    <div class="col-12-md mb-2">
                                        <span class="font-weight-bold fa-2x">Sakit</span>
                                    </div>
                                </div>
                                <div class="row ml-4">
                                    <div class="col-2-md">
                                        <i class="far fa-dizzy fa-5x text-warning"></i>
                                    </div>
                                    <div class="col-7">
                                        <h4 class="card-title">0</h4>
                                        <span class="card-text"><span class="font-weight-bold text-danger">Total</span> dari 0 Mahasiswa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card d-flex flex-warp my-rounded on-hover animate__animated animate__fadeInRight animate__delay-1-1s">
                            <div class="card-body">
                                <div class="row ml-4">
                                    <div class="col-12-md mb-2">
                                        <span class="font-weight-bold fa-2x">Izin</span>
                                    </div>
                                </div>
                                <div class="row ml-4">
                                    <div class="col-2-md">
                                        <i class="far fa-meh fa-5x text-primary"></i>
                                    </div>
                                    <div class="col-7">
                                        <h4 class="card-title">0</h4>
                                        <span class="card-text"><span class="font-weight-bold text-danger">Total</span> dari 0 Mahasiswa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card d-flex flex-warp my-rounded on-hover animate__animated animate__fadeInRight animate__delay-1-3s">
                            <div class="card-body">
                                <div class="row ml-4">
                                    <div class="col-12-md mb-2">
                                        <span class="font-weight-bold fa-2x">Alpa</span>
                                    </div>
                                </div>
                                <div class="row ml-4">
                                    <div class="col-2-md">
                                        <i class="far fa-frown fa-5x text-danger"></i>
                                    </div>
                                    <div class="col-7">
                                        <h4 class="card-title">0</h4>
                                        <span class="card-text"><span class="font-weight-bold text-danger">Total</span> dari 0 Mahasiswa</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'calendar.php' ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-center">
            <div class="copyright text-muted">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>