<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Instruktur</h4>
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
                        <a href="#">Data Instruktur</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="dashboard.php?page=tambahInstruktur" class="btn btn-sm btn-primary text-light"><i class="fas fa-user-plus"></i> Tambah Instruktur</a>
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
                                                <th>Kode Instruktur</th>
                                                <th>Nama Instruktur</th>
                                                <th>Email</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $q = $conn->query("SELECT * FROM instruktur ORDER BY kode_instruktur ASC");
                                            foreach ($q as $ins) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $ins['kode_instruktur'] ?></td>
                                                    <td><?= $ins['nama_instruktur'] ?></td>
                                                    <td><?= $ins['email'] ?></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editInstruktur<?= $ins['id_instruktur'] ?>"><i class="fas fa-edit text-white"></i></button>

                                                        <div class="modal fade" id="editInstruktur<?= $ins['id_instruktur'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Penanggung Jawab</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="?page=tambahInstruktur&aksi=edit" method="post">
                                                                        <div class="modal-body">
                                                                            <div class="mb-3 form-group">
                                                                                <input type="hidden" name="id_instruktur" value="<?= $ins['id_instruktur'] ?>">
                                                                                <label for="kode">Kode Instruktur</label>
                                                                                <input type="text" name="kode" id="kode" class="form-control" readonly value="<?= $ins['kode_instruktur'] ?> ">
                                                                            </div>
                                                                            <div class="mb-3 form-group">
                                                                                <label for="nama">Nama Instruktur</label>
                                                                                <input type="text" name="nama" id="nama" class="form-control text-capitalize" value="<?= $ins['nama_instruktur'] ?>" required autocomplet="off" placeholder="Masukkan Nama Instruktur">
                                                                            </div>
                                                                            <div class="mb-3 form-group">
                                                                                <label for="email">Email</label>
                                                                                <input type="email" name="email" id="email" class="form-control" required autocomplete="off" value="<?= $ins['email'] ?>" placeholder="Masukkan Email Instruktur">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            <button name="editinstruktur" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteInstruktur<?= $ins['id_instruktur'] ?>"><i class="fas fa-trash"></i></button>
                                                        <div class="modal fade" id="deleteInstruktur<?= $ins['id_instruktur'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Penanggung Jawab</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Ingin Menghapus Instruktur <strong class="text-danger"><?= $ins['nama_instruktur'] ?></strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=dataInstruktur&aksi=delete&id=<?= $ins['id_instruktur'] ?>" class="btn btn-primary">Hapus</a>
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