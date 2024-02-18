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
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn">
                            <div class="mt-4">
                                <i class="fas fa-chalkboard-teacher fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $get_instruktur ?></h4>
                                    <p class="card-text">Instruktur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-03s">
                            <div class="mt-4">
                                <i class="fas fa-book-open fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $get_matkul ?></h4>
                                    <p class="card-text">Daftar Mata Kuliah</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-06s">
                            <div class="mt-4">
                                <i class="fas fa-graduation-cap fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $get_mahasiswa ?></h4>
                                    <p class="card-text">Jumlah Mahasiswa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="card text-center my-rounded on-hover animate__animated animate__zoomIn animate__delay-09s">
                            <div class="mt-4">
                                <i class="fas fa-university fa-10x"></i>
                                <div class="card-body">
                                    <h4 class="card-title"><?= $get_jurusan ?></h4>
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
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($get_pembayaran,0,",",".") ?>,-</div>
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