<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Mahasiswa</h4>
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
                        <a href="#">Mahasiswa</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="dashboard.php?page=tambahMahasiswa" class="btn btn-sm btn-primary text-light"><i class="fas fa-user-plus"></i> Tambah Mahasiswa</a>
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
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Jurusan</th>
                                                <th>Alamat</th>
                                                <th>Foto</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>224-ADP-002</td>
                                                <td>Abdul</td>
                                                <td>Administrasi Perkantoran</td>
                                                <td>Jl. Suka Maju No.8</td>
                                                <td><img src="../assets/img/user/person.png" style="width: 45px; aspect-ratio: 1/1; background: #dfdfdf; object-fit: cover;" alt=""></td>
                                                <td><a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit text-white"></i></a></td>
                                                <td><a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a></td>
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
            <div class="copyright">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>