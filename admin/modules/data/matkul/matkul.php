<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Mata Kuliah</h4>
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
                        <a href="#">Data Master</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Data Mata Kuliah</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <button class="btn btn-sm btn-primary text-light" data-toggle="modal" data-target="#tambahMatkul"><i class="fas fa-plus"></i> Tambah jadwal mata kuliah</button>
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
                                                <th>Kode Mata Kuliah</th>
                                                <th>Mata Kuliah</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $qry = $conn->query("SELECT * FROM mata_kuliah ORDER BY kode_matkul ASC");
                                            foreach ($qry as $mtk) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $mtk['kode_matkul'] ?></td>
                                                    <td><?= $mtk['mata_kuliah'] ?></td>
                                                    <td>
                                                        <!-- Button Update & Modal -->
                                                        <button href="" class="btn btn-sm btn-primary"><i class="fas fa-edit text-white" data-toggle="modal" data-target="#updateMatkul<?= $mtk['id_matkul'] ?>"></i></button>
                                                    </td>
                                                    <td>
                                                        <!-- Button Hapus & Modal -->
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMatkul<?= $mtk['id_matkul'] ?>"><i class="fas fa-trash"></i></button>

                                                        <div class="modal fade" id="deleteMatkul<?= $mtk['id_matkul'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Mata Kuliah</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Menghapus <strong class="text-danger"><?= $mtk['mata_kuliah'] ?></strong> ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=matkul&aksi=delete&id=<?= $mtk['id_matkul'] ?>" class="btn btn-primary">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambahMatkul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entry Mata Kuliah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=matkul&aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $q = $conn->query("SELECT MAX(kode_matkul) AS urutan FROM mata_kuliah");
                        // Membuat kode jurusan otomatis
                        $data2 = mysqli_fetch_array($q);
                        $kode2 = $data2['urutan'];
                        $urutan2 = (int) substr($kode2, 6, 3);
                        $urutan2++;
                        ?>
                        <label for="">Kode Mata Kuliah</label>
                        <input type="text" name="kode_matkul" value="ELT - <?= sprintf("%03s", $urutan2) ?>" class="date-picker form-control" readonly required>
                    </div>
                    <div class="form-group">
                        <label for="mata_kuliah">Mata Kuliah</label>
                        <input type="text" id="mata_kuliah" name="mata_kuliah" class="form-control" placeholder="Masukkan Mata Kuliah" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahMatkul" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>