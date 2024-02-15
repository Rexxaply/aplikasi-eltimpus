<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Jadwal Mata Kuliah</h4>
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
                        <a href="#">Jadwal Mata Kuliah</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Daftar Jadwal Mata Kuliah</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="dashboard.php?page=tambahMatkul" class="btn btn-sm btn-primary text-light"><i class="fas fa-user-plus"></i> Tambah Jadwal Mata Kuliah</a>
                                </div>
                                <div>
                                    <!-- <?php include 'alert.php' ?> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-md">
                                    <table id="dataTable" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="40">No</th>
                                                <th>Nama Instruktur</th>
                                                <th>Jurusan</th>
                                                <th>Hari</th>
                                                <th>Ruangan</th>
                                                <th>Mata Kuliah</th>
                                                <th>Jam</th>
                                                <th width="100">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Juleha</td>
                                                <td>Manajemen Informatika & Komputer</td>
                                                <td>Kamis</td>
                                                <td>Lab 1</td>
                                                <td>Web Programming</td>
                                                <td>12.00 - 13.00 WIB</td>
                                                <td>
                                                    <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit text-white"></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
            <div class="copyright text-muted">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>