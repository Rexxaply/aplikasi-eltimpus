<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Penanggung Jawab Jurusan</h4>
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
                        <a href="#">Data Penanggung Jawab Jurusan</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="" class="btn btn-sm btn-primary text-light" data-toggle="modal" data-target="#tambahPj"><i class="fas fa-plus"></i> Tambah jurusan</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-md">
                                    <table id="dataTable" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="40">No</th>
                                                <th>Jurusan</th>
                                                <th>Nama Instruktur</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $q = $conn->query("SELECT * FROM wali w INNER JOIN jurusan j ON w.jurusan_id = j.id_jurusan ORDER BY id_wali DESC");
                                            foreach ($q as $wali) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $wali['jurusan'] ?></td>
                                                    <td><?= $wali['nama_instruktur'] ?></td>
                                                    <td>
                                                        <!-- Button Trigger Modal Edit -->
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editPj<?= $wali['id_wali'] ?>"><i class="fas fa-edit text-white"></i></button>
                                                    </td>
                                                    <td>
                                                        <!-- Modal Edit -->
                                                        <div class="modal fade" id="editPj<?= $wali['id_wali'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Penanggung Jawab</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="?page=penanggungJawab&aksi=edit" method="post">
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="id_wali" value="<?= $wali['id_wali'] ?>">
                                                                            <div class="mb-3 form-group">
                                                                                <label for="jurusan">Jurusan</label>
                                                                                <select name="jurusan" id="jurusan" class="form-control" required>
                                                                                    <option value="" selected disabled>-- Pilih --</option>
                                                                                    <?php
                                                                                    $jurusan = $conn->query("SELECT * FROM jurusan");
                                                                                    foreach ($jurusan as $jrs) {
                                                                                    ?>
                                                                                        <option value="<?= $jrs['id_jurusan'] ?>"><?= $jrs['jurusan'] ?></option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="nama">Nama Instruktur</label>
                                                                                <input type="text" class="form-control" name="nama" id="nama" value="<?= $wali['nama_instruktur'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                                                            <button type="submit" name="editPj" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Button Trigger Modal Hapus -->
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deletePj<?= $wali['id_wali'] ?>"><i class="fas fa-trash"></i></button>

                                                        <!-- Modal Hapus -->
                                                        <div class="modal fade" id="deletePj<?= $wali['id_wali'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Penanggung Jawab</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Ingin Menghapus Instruktur <strong class="text-danger"><?= $wali['nama_instruktur'] ?></strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=penanggungJawab&aksi=delete&id=<?= $wali['id_wali'] ?>" class="btn btn-primary">Hapus</a>
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
<div class="modal fade" id="tambahPj" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entry Data Penanggung Jawab</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=penanggungJawab&aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="mb-3 form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control" required>
                            <option value="" selected disabled>-- Pilih --</option>
                            <?php
                            $jurusan = $conn->query("SELECT * FROM jurusan");
                            foreach ($jurusan as $jrs) {
                            ?>
                                <option value="<?= $jrs['id_jurusan'] ?>"><?= $jrs['jurusan'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Instruktur</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Instruktur" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahPj" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>