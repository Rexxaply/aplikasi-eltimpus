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
                                    <button class="btn btn-success mt-3" data-toggle="modal" data-target="#sample">Import Data Mahasiswa</button>
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
                                        <label for="jk">Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control" required>
                                            <option value="" selected disabled>-- Pilih --</option>
                                            <option value="L">Laki-Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
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

<!-- Modal XLS -->
<div class="modal fade" id="sample" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">XLS Upload</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=tambahMahasiswa&aksi=xls" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group file-images">
                        <input type="file" class="form-control gambar" name="userfile" id="filexls">
                    </div>

                    <div>
                        <span>* Catatan</span>
                        <ul class="mt-3">
                            <li>Saat sudah selesai menginput data maka header wajib dihapus</li>
                            <li>Pastikan data tidak ada yang kosong</li>
                            <li>Jurusan harus sesuai dengan data jurusan yang sudah tersedia</li>
                            <li>Untuk Jenis Kelamin hanya perlu menulis L untuk laki-laki dan P untuk Perempuan</li>
                        </ul>
                    </div>
                    <div>
                        <a href="../assets/XLS/sample.xlsx" class="fa-2x" download="sample">Download Sample XLSX</a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahSemester" class="btn btn-primary">Upload File XLS/XXLSX</button>
                </div>
            </form>
        </div>
    </div>
</div>