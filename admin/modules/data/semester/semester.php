<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Semester</h4>
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
                        <a href="#">Data Semester</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="" class="btn btn-sm btn-primary text-light" data-toggle="modal" data-target="#tambahSemester"><i class="fas fa-plus"></i> Tambah semester</a>
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
                                                <th>Kode Semester</th>
                                                <th>Semester</th>
                                                <th>Status</th>
                                                <th width="80">Aksi</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $qry = $conn->query("SELECT * FROM semester ORDER BY semester ASC");
                                            foreach ($qry as $sms) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $sms['kode_semester'] ?></td>
                                                    <td><?= $sms['semester'] ?></td>
                                                    <!-- Status -->
                                                    <td>
                                                        <?php
                                                        if ($sms['status'] == 'true') { ?>
                                                            <span class="badge badge-pill badge-success">Aktif</span>
                                                        <?php } else { ?>
                                                            <span class="badge badge-pill badge-danger">Non-Aktif</span>
                                                        <?php } ?>
                                                    </td>
                                                    <!-- Trigger Status -->
                                                    <td>
                                                        <?php
                                                        if ($sms['status'] != 'true') { ?>
                                                            <button class="btn btn-sm rounded btn-success" data-toggle="modal" data-target="#modalStatusTrue<?= $sms['id_semester'] ?>"><i class="far fa-times-circle"></i> Aktifkan</button>
                                                            <!-- Modal Alert Status Aktif -->
                                                            <div class="modal fade" id="modalStatusTrue<?= $sms['id_semester'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalStatusTrueTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Mengaktifkan Status Semester</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin Mengaktifkan <strong class="text-danger"><?= $sms['semester'] ?></strong> ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Tutup</button>
                                                                            <a href="?page=semester&aksi=set_sts&id=<?= $sms['id_semester'] ?>&status=true" class="btn btn-primary">Ganti</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <a href="" class="btn btn-sm rounded btn-danger" data-toggle="modal" data-target="#modalStatusFalse<?= $sms['id_semester'] ?>"><i class="far fa-times-circle"></i> Non-Aktifkan</a>

                                                            <!-- Modal Alert Status Non-Aktif -->
                                                            <div class="modal fade" id="modalStatusFalse<?= $sms['id_semester'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalStatusFalseTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Menon-aktifkan Status Semester</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Yakin Menon-aktifkan <strong class="text-danger"><?= $sms['semester'] ?></strong> ini?
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Tutup</button>
                                                                            <a href="?page=semester&aksi=set_sts&id=<?= $sms['id_semester'] ?>&status=false" class="btn btn-primary">Ganti</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                    </td>
                                                    <!-- Opsi Delete & Hapus -->
                                                    <td>
                                                        <!--Button Edit-->
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEdit<?= $sms['id_semester'] ?>"><i class="fas fa-edit text-white"></i></button>

                                                            <!-- Modal edit -->
                                                            <div class="modal fade" id="modalEdit<?= $sms['id_semester'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Semester</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="?page=semester&aksi=edit" method="post">
                                                                            <div class="modal-body">
                                                                                <input type="hidden" name="id_semester" value="<?= $sms['id_semester'] ?>">
                                                                                <div class="form-group">
                                                                                    <label for="semester">Semester</label>
                                                                                    <input type="text" class="form-control" name="semester" id="semester" value="<?= $sms['semester'] ?>" autocomplete="off" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                                                                <button type="submit" name="editSemester" class="btn btn-primary">Submit</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </td>
                                                    <td>
                                                        <!-- Button Hapus -->
                                                        <button data-toggle="modal" data-target="#modalHapus<?= $sms['id_semester'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

                                                        <!-- Modal Hapus -->
                                                        <div class="modal fade" id="modalHapus<?= $sms['id_semester'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Semester</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Menghapus <strong class="text-danger"><?= $sms['semester'] ?></strong> ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=semester&aksi=delete&id=<?= $sms['id_semester'] ?>" class="btn btn-primary">Hapus</a>
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
<div class="modal fade" id="tambahSemester" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=semester&aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" name="semester" id="semester" placeholder="Masukkan Semester" autocomplete="off" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahSemester" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>