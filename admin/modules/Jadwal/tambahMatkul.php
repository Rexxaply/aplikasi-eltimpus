<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Tambah Mata Kuliah</h4>
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
                        <a href="#">Tambah Jadwal Mata Kuliah</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title text-uppercase">
                                    Form Entry Jadwal Mata Kuliah
                                </div>
                                <div>
                                    <!-- <?php include 'alert.php' ?> -->
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="?page=tambahMatkul&aksi=tambah" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3 form-group">
                                                <label for="kode">Kode Jadwal Mata kuliah</label>
                                                <input class="form-control" name="kode" id="kode" type="text" readonly value="ELT-<?= date('YmdHis') ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 form-group">
                                                <label for="ta">Tahun Pelajaran</label>
                                                <?php
                                                $thn_aktif = mysqli_fetch_array($conn->query("SELECT * FROM tahun_ajaran WHERE status = 'true'"));
                                                ?>
                                                <input class="form-control" name="ta" id="ta" type="hidden" readonly value="<?= $thn_aktif['id_tahun_ajaran'] ?>">
                                                <input class="form-control" type="text" readonly value="<?= $thn_aktif['tahun_pelajaran'] ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 form-group">
                                                <?php
                                                $sms_aktif = mysqli_fetch_array($conn->query("SELECT * FROM semester WHERE status = 'true'"));
                                                ?>
                                                <label for="semester">Semester</label>
                                                <input class="form-control" name="semester" id="semester" type="hidden" readonly value="<?= $sms_aktif['id_semester'] ?>">
                                                <input class="form-control" type="text" readonly value="<?= $sms_aktif['semester'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="instruktur">Nama Instruktur</label>
                                                <select name="instruktur" id="instruktur" class="form-control" required>
                                                    <option value="" selected disabled>-- Pilih --</option>
                                                    <?php
                                                    $q = $conn->query("SELECT * FROM instruktur");
                                                    foreach ($q as $ins) {
                                                    ?>
                                                        <option value="<?= $ins['id_instruktur'] ?>"><?= $ins['nama_instruktur'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mata_kuliah">Mata Kuliah</label>
                                                <select name="mata_kuliah" id="mata_kuliah" class="form-control" required>
                                                    <option value="" selected disabled>-- Pilih --</option>
                                                    <?php
                                                    $q = $conn->query("SELECT * FROM mata_kuliah");
                                                    foreach ($q as $mtk) {
                                                    ?>
                                                        <option value="<?= $mtk['id_matkul'] ?>"><?= $mtk['mata_kuliah'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="ruangan">Ruangan</label>
                                                <select name="ruangan" id="ruangan" class="form-control" required>
                                                    <option value="" selected disabled>-- Pilih --</option>
                                                    <option value="Lab 1">Lab 1</option>
                                                    <option value="Lab 2">Lab 2</option>
                                                    <option value="Lab 3">Lab 3</option>
                                                    <option value="Lab 4">Lab 4</option>
                                                    <option value="Lab 5">Lab 5</option>
                                                    <option value="Lab 6">Lab 6</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jurusan">Jurusan</label>
                                                <select name="jurusan" id="jurusan" class="form-control" required>
                                                    <option value="" selected disabled>-- Pilih --</option>
                                                    <?php
                                                    $q = $conn->query("SELECT * FROM jurusan");
                                                    foreach ($q as $jrs) {
                                                    ?>
                                                        <option value="<?= $jrs['id_jurusan'] ?>"><?= $jrs['jurusan'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-check text-capitalize">
                                                <label>Hari</label><br>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="senin">
                                                    <span class="form-radio-sign">senin</span>
                                                </label>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="selasa">
                                                    <span class="form-radio-sign">selasa</span>
                                                </label>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="rabu">
                                                    <span class="form-radio-sign">rabu</span>
                                                </label>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="kamis">
                                                    <span class="form-radio-sign">kamis</span>
                                                </label>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="jum'at">
                                                    <span class="form-radio-sign">jum'at</span>
                                                </label>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="hari" value="sabtu">
                                                    <span class="form-radio-sign">sabtu</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="jam">Jam Mulai - Jam Selesai</label>
                                                <input type="text" name="jam" id="jam" class="form-control" placeholder="00.00 - 00.00 WIB" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <button type="submit" name="tambahMatkul" class="w-100 btn btn-outline-success">Submit</button>
                                        <a href="dashboard.php?page=mataKuliah" class="btn btn-outline-primary w-100 text-capitalize mt-2">Kembali ke data instruktur</a>
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