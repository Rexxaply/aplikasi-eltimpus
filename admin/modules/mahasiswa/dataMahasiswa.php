<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Data Mahasiswa</h4>
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
                        <a href="#">Data Mahasiswa</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="dashboard.php?page=tambahMahasiswa" class="btn btn-sm btn-primary text-light"><i class="fas fa-user-plus"></i> Tambah Mahasiswa</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-md">
                                    <table id="dataTable" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="40">No</th>
                                                <th>NIM</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Jurusan</th>
                                                <th>Angkatan</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Jabatan</th>
                                                <th width="80">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $q = $conn->query(
                                                "SELECT * FROM mahasiswa mhs 
                                                    INNER JOIN jurusan jrs ON mhs.jurusan_id = jrs.id_jurusan
                                                    INNER JOIN tahun_ajaran ta ON mhs.tahun_ajaran = ta.tahun_pelajaran
                                                    ORDER BY nim ASC"
                                            );

                                            foreach ($q as $mhs) {
                                            ?>
                                                <tr class="<?= $mhs['jabatan'] == 'ketua' ? 'ketua' : '' ?>">
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $mhs['nim'] ?></td>
                                                    <td><?= $mhs['nama_mahasiswa'] ?></td>
                                                    <td><?= $mhs['jurusan'] ?></td>
                                                    <td><?= $mhs['tahun_pelajaran'] ?></td>
                                                    <td><?= $mhs['jk'] == 'L' ? 'Laki - laki' : 'Perempuan' ?></td>
                                                    <td class="text-capitalize"><?= $mhs['jabatan'] ?></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMahasiswa<?= $mhs['id_mahasiswa'] ?>"><i class="fas fa-trash"></i></button>

                                                        <div class="modal fade" id="deleteMahasiswa<?= $mhs['id_mahasiswa'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data Mahasiswa</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Ingin Menghapus <strong class="text-danger"><?= $mhs['nama_mahasiswa'] ?></strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <?php 
                                                                            $mhss = $mhs['id_mahasiswa'];
                                                                            $query = $conn->query("SELECT * FROM pembayaran WHERE mahasiswa_id = '$mhss'");
                                                                            $mb = mysqli_fetch_assoc($query);
                                                                        ?>
                                                                        <a href="?page=dataMahasiswa&aksi=delete&id=<?= $mhs['id_mahasiswa'] ?>&idMb=<?= $mb['mahasiswa_id'] ?>" class="btn btn-primary">Hapus</a>
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
            <div class="copyright">
                &copy; <?= (int)date('Y') ?> ELTIMPUS, Inc
            </div>
        </div>
    </footer>
</div>