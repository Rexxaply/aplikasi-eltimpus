<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Mahasiswa</h4>
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
                        <a href="#">Tambah Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">
                                    Form Entry Nama Instruktur
                                </div>
                                <div>
                                    <!-- <?php include 'alert.php' ?> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="data/Instruktur/aksi.php" method="post">
                                    <div class="mb-3 form-group">
                                        <label for="nim">NIM</label>
                                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukkan NIM Mahasiswa">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="nama">Nama Mahasiswa</label>
                                        <input type="text" name="nama" id="nama" class="form-control text-capitalize" required autocomplete="off" placeholder="Masukkan Nama Mahasiswa">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="jurusan">Jurusan</label>
                                        <select name="jurusan" id="jurusan" class="form-control" required>
                                            <option value="" selected disabled>-- Pilih --</option>
                                            <option value="">Administrasi Perkantoran</option>
                                            <option value="">Manajemen Informatika & Komputer</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" id="jabatan" class="form-control" required>
                                            <option value="" selected disabled>-- Pilih --</option>
                                            <option value="">Ketua Kelas</option>
                                            <option value="">Anggota</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Mahasiswa" rows="3" required></textarea>
                                    </div>

                                    <div class="mb-3 form-group file-images">
                                        <img src="../assets/img/user/person.png" class="mb-2 rounded-circle" id="images">
                                        <label for="foto" class="text-black d-block">Foto</label>
                                        <input type="file" class="gambar form-control" id="foto" accept="image/*" required>
                                    </div>

                                    <div class="mb-3 form-group">
                                        <button type="submit" name="tambahMahasiswa" class="w-100 btn btn-outline-success">Submit</button>
                                        <a href="dashboard.php?page=dataMahasiswa" class="btn btn-outline-primary w-100 text-capitalize mt-2">Kembali ke data instruktur</a>
                                    </div>
                                </form>
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