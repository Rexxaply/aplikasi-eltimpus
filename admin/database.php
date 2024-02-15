<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Backup Database</h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="dashboard.php">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Backup Database</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row g-3 mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card text-center my-rounded">
                            <div class="bg-danger w-auto text-center text-white my-rounded-costum py-2">
                                <span>Peringatan <i class="fas fa-exclamation-triangle"></i></span><br>
                                <span>Halaman ini hanya untuk membackup database</span>
                            </div>
                            <div class="mt-4">
                                <i class="fas fa-database fa-8x text-warning"></i>
                                <div class="card-body">
                                    <p class="card-text">Klik untuk membackup</p>
                                    <a href="../config/backup.php" class="btn btn-success">Backup</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-center">
            <div class="copyright">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>