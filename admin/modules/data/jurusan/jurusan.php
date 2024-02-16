<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Jurusan</h4>
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
                        <a href="#">Data Jurusan</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="" class="btn btn-sm btn-primary text-light" data-toggle="modal" data-target="#tambahJurusan"><i class="fas fa-plus"></i> Tambah jurusan</a>
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
                                                <th>Kode Jurusan</th>
                                                <th>Jurusan</th>
                                                <th width="80">Edit</th>
                                                <th width="80">Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $qry = $conn->query("SELECT * FROM jurusan ORDER BY kode_jurusan ASC");
                                            foreach ($qry as $jrs) :
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?></td>
                                                    <td><?= $jrs['kode_jurusan'] ?></td>
                                                    <td><?= $jrs['jurusan'] ?></td>
                                                    <td>
                                                        <!--Button Edit-->
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalEdit<?= $jrs['id_jurusan'] ?>"><i class="fas fa-edit text-white"></i></a>
                                                    </td>
                                                    <td>

                                                        <!-- Modal Edit -->
                                                        <div class="modal fade" id="modalEdit<?= $jrs['id_jurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Jurusan</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="?page=jurusan&aksi=edit" method="post">
                                                                        <div class="modal-body">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="id_jurusan" value="<?= $jrs['id_jurusan'] ?>">
                                                                                <label>Kode Jurusan</label>
                                                                                <input type="text" class="form-control" name="kode" value="<?= $jrs['kode_jurusan'] ?>" readonly>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="jurusan">Jurusan</label>
                                                                                <input type="text" class="form-control" name="jurusan" id="jurusan" value="<?= $jrs['jurusan'] ?>" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn" data-dismiss="modal">Batal</button>
                                                                            <button type="submit" name="editJurusan" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!-- Button Hapus -->
                                                        <button data-toggle="modal" data-target="#modalHapus<?= $jrs['id_jurusan'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>

                                                        <!-- Modal Hapus -->
                                                        <div class="modal fade" id="modalHapus<?= $jrs['id_jurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Jurusan</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Menghapus <strong class="text-danger"><?= $jrs['jurusan'] ?></strong> ini?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=jurusan&aksi=delete&id=<?= $jrs['id_jurusan'] ?>" class="btn btn-primary">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach ?>
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
<div class="modal fade" id="tambahJurusan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="?page=jurusan&aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <?php
                        $q = $conn->query("SELECT MAX(kode_jurusan) AS urutan FROM jurusan");
                        // Membuat kode jurusan otomatis
                        $data1 = mysqli_fetch_array($q);
                        $kode = $data1['urutan'];
                        $urutan = (int) substr($kode, 6, 3);
                        $urutan++;
                        ?>
                        <label>Kode Jurusan</label>
                        <input type="text" class="form-control" name="kode" value="ELT - <?= sprintf("%03s", $urutan) ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Masukkan Nama Jurusan" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">Batal</button>
                    <button type="submit" name="tambahJurusan" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>