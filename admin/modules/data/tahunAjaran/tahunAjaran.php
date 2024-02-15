<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Tahun Ajaran</h4>
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
                        <a href="#">Data Tahun Ajaran</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="" class="btn btn-sm btn-primary text-light" data-toggle="modal" data-target="#tambahThnAjaran"><i class="fas fa-plus"></i> Tambah tahun ajaran</a>
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
                                                <th>Tahun Pelajaran</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $qry = $conn->query("SELECT * FROM tahun_ajaran ORDER BY tahun_pelajaran ASC");
                                            foreach ($qry as $thn) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $thn['tahun_pelajaran'] ?></td>
                                                    <!-- Status -->
                                                    <td>
                                                        <?php
                                                        if ($thn['status'] == 'true') { ?>
                                                            <span class="badge badge-pill badge-success">Aktif</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-pill badge-danger">Non-Aktif</span>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- Trigger Status -->
                                                    <td>
                                                        <?php
                                                        if ($thn['status'] != 'true') { ?>
                                                            <button class="btn btn-sm rounded btn-success" data-toggle="modal" data-target="#modalStatusTrue<?= $thn['id_tahun_ajaran'] ?>"><i class="far fa-times-circle"></i> Aktifkan</button>
                                                            <!-- Modal Alert Status Aktif -->
                                                            <div class="modal fade" id="modalStatusTrue<?= $thn['id_tahun_ajaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalStatusTrueTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Mengaktifkan Status Tahun Ajaran</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin Mengaktifkan <strong class="text-danger"><?= $thn['tahun_pelajaran'] ?></strong> ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Tutup</button>
                                                                            <a href="?page=tahunAjaran&aksi=set_sts&id=<?= $thn['id_tahun_ajaran'] ?>&status=true" class="btn btn-primary">Ganti</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <a href="" class="btn btn-sm rounded btn-danger" data-toggle="modal" data-target="#modalStatusFalse<?= $thn['id_tahun_ajaran'] ?>"><i class="far fa-times-circle"></i> Non-Aktifkan</a>

                                                            <!-- Modal Alert Status Non-Aktif -->
                                                            <div class="modal fade" id="modalStatusFalse<?= $thn['id_tahun_ajaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalStatusFalseTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Menon-aktifkan Status Tahun Ajaran</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin Menon-aktifkan <strong class="text-danger"><?= $thn['tahun_pelajaran'] ?></strong> ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Tutup</button>
                                                                            <a href="?page=tahunAjaran&aksi=set_sts&id=<?= $thn['id_tahun_ajaran'] ?>&status=false" class="btn btn-primary">Ganti</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                    </td>
                                                    <!-- Opsi Delete & Hapus -->
                                                    <td>
                                                        <!-- Button Update -->
                                                        <a href="" class="btn btn-sm btn-primary"><i class="fas fa-edit text-white"></i></a>
                                                    </td>
                                                    <td>
                                                        <!-- Button Hapus -->
                                                        <button data-toggle="modal" data-target="#modalHapus<?= $thn['id_tahun_ajaran'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

                                                        <!-- Modal Hapus -->
                                                        <div class="modal fade" id="modalHapus<?= $thn['id_tahun_ajaran'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Tahun Ajaran</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Menghapus <strong class="text-danger"><?= $thn['tahun_pelajaran'] ?></strong> ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=tahunAjaran&aksi=delete&id=<?= $thn['id_tahun_ajaran'] ?>" class="btn btn-primary">Hapus</a>
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
<div class="modal fade" id="tambahThnAjaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entry Tahun Ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=tahunAjaran&aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="thn">Tahun Ajaran</label>
                        <div class="input-group">
                            <input type="text" name="thn_masuk" placeholder="Pilih tahun masuk" class="date-picker form-control" autocomplete="off" required>

                            <div class="input-group-prepend">
                                <span class="input-group-text">/</span>
                            </div>

                            <input type="text" name="thn_keluar" placeholder="Pilih tahun keluar" autocomplete="off" class="date-picker form-control" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahThnAjaran" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>