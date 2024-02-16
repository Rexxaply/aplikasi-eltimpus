<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Instruktur</h4>
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
                        <a href="#">Instruktur</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Instruktur</a>
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
                                <form action="?page=tambahInstruktur&aksi=tambah" method="post">
                                    <div class="mb-3 form-group">
                                        <label for="kode">Kode Instruktur</label>
                                        <?php
                                        $q = $conn->query("SELECT MAX(kode_instruktur) AS urutan FROM instruktur");
                                        // Membuat kode jurusan otomatis
                                        $data2 = mysqli_fetch_array($q);
                                        $kode2 = $data2['urutan'];
                                        $urutan2 = (int) substr($kode2, 6, 3);
                                        $urutan2++;
                                        ?>
                                        <input type="text" name="kode" id="kode" class="form-control" readonly value="INS - <?= sprintf("%03s", $urutan2) ?> - ELT">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="nama">Nama Instruktur</label>
                                        <input type="text" name="nama" id="nama" class="form-control text-capitalize" required autocomplete="off" placeholder="Masukkan Nama Instruktur">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" required autocomplete="off" placeholder="Masukkan Email Instruktur">
                                    </div>
                                    <div class="mb-3 form-group file-images">
                                        <img src="../assets/img/user/person.png" class="mb-2 rounded-circle" id="images">
                                        <label for="foto" class="text-black d-block">Foto</label>
                                        <input type="file" class="gambar form-control" id="foto" name="foto">
                                    </div>
                                    <div class="mb-3 form-group">
                                        <button type="submit" name="tambahInstruktur" class="w-100 btn btn-outline-success">Submit</button>
                                        <a href="dashboard.php?page=dataInstruktur" class="btn btn-outline-primary w-100 text-capitalize mt-2">Kembali ke data instruktur</a>
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
            <div class="copyright text-muted">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>