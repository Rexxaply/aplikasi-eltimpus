<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Cicilan</h4>
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
                        <a href="#">Cicilan</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="" method="post">
                                    <table class="table">
                                        <tr>
                                            <td>NIM</td>
                                            <td>:</td>
                                            <td><input type="text" name="nim" placeholder="Masukkan NIM Mahaiswa" class="form-control"></td>
                                            <td><button type="submit" class="btn btn-primary" name="cari">Cari</button></td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>

                        <?php
                        if (isset($_POST['nim']) && $_POST['nim'] != '') {
                            $nim = $_POST['nim'];
                            $q = $conn->query(
                                "SELECT * FROM mahasiswa mhs INNER JOIN jurusan jrs ON mhs.jurusan_id = jrs.id_jurusan 
                                    INNER JOIN tahun_ajaran ta ON mhs.tahun_ajaran = ta.tahun_pelajaran
                                    WHERE mhs.nim = '$nim'"
                            );
                            $mahasiswa = mysqli_fetch_assoc($q);

                            if ($mahasiswa == '') { ?>

                                <h5 class="text-center mt-5">Data tidak ditemukan!</h5>

                            <?php } else {
                                $id_mahasiswa = $mahasiswa['id_mahasiswa'];
                                $nimhs = $mahasiswa['nim']; ?>

                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h5 class="m-0 font-weight-bold text-primary">Biodata Mahasiswa</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                                <tr>
                                                    <td>NIM</td>
                                                    <td><?= $mahasiswa['nim'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama Mahasiswa</td>
                                                    <td><?= $mahasiswa['nama_mahasiswa'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jurusan</td>
                                                    <td><?= $mahasiswa['jurusan'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Angkatan</td>
                                                    <td><?= $mahasiswa['tahun_pelajaran'] ?></td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                $jq = $conn->query("SELECT * FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");
                                $hasil = mysqli_fetch_array($jq);
                                $tahunanggaran = substr($hasil['tahun_ajaran'], 0, 4);
                                $nexttahunanggaran = $tahunanggaran + 1;

                                $ceklunas = $conn->query("SELECT COUNT(tgl_bayar) FROM pembayaran WHERE tgl_bayar !=0 AND mahasiswa_id = '$id_mahasiswa'");
                                $lunas = mysqli_fetch_array($ceklunas);
                                $width = $lunas[0]/12*100;

                                if ($width <= 45) {
                                    $progress = "progress-bar bg-danger";
                                } elseif ($width <= 65) {
                                    $progress = "progress-bar bg-warning";
                                } elseif ($width <= 75) {
                                    $progress = "progress-bar bg-info";
                                } elseif ($width <= 100) {
                                    $progress = "progress-bar bg-success";
                                }

                                if ($lunas[0] == 12) {
                                    $keterangan = "Cicilan Lunas&nbsp;";
                                } elseif ($lunas[0] < 12) {
                                    $keterangan = "Cicilan Dibayar $lunas[0] bulan&nbsp;";
                                }
                                ?>

                                <div class="card">
                                    <a href="#tampilData" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="tampilData">
                                        <h6 class="m-0 font-weight-bold text-primary">Data Pembayaran Cicilan [Tahun <?= $tahunanggaran; ?>/<?= $nexttahunanggaran; ?>]</h6>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div><?= $keterangan ?></div>
                                            </div>
                                            <div class="col">
                                                <div class="progress progress-sm mr-2">
                                                    <div class="<?= $progress ?>" role="progressbar" style="width: <?= $width ?>%" aria-valuenow="<?= $lunas[0] ?>" aria-valuemin="0" aria-valuemax="12"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="collapse show" id="tampilData">
                                        <div class="card-body">
                                            <?php include "modules/cicilan/data.php"; ?>
                                        </div>
                                    </div>
                                </div>

                        <?php }
                        }
                        ?>

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
<script>
    // let nim = <?= json_encode($_POST['nim'] ?? null) ?>;
    
    // if (nim) {
    //     window.location.reload();
    // }
</script>