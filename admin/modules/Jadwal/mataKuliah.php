<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Jadwal Mata Kuliah</h4>
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
                        <a href="#">Daftar Jadwal Mata Kuliah</a>
                    </li>
                </ul>
            </div>
            <div class="page-category">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <a href="dashboard.php?page=tambahMatkul" class="btn btn-sm btn-primary text-light"><i class="fas fa-user-plus"></i> Tambah Jadwal Mata Kuliah</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-md">
                                    <table id="dataTable" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="40">No</th>
                                                <th>Nama Instruktur</th>
                                                <th>Jurusan</th>
                                                <th>Hari</th>
                                                <th>Ruangan</th>
                                                <th>Mata Kuliah</th>
                                                <th>Jam</th>
                                                <th width="100">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 1;
                                            $q = $conn->query(
                                                "SELECT * FROM jadwal_matkul jm INNER JOIN mata_kuliah mk ON jm.mata_kuliah_id = mk.id_matkul 
                                                    INNER JOIN jurusan jrs ON jm.jurusan_id = jrs.id_jurusan
                                                    INNER JOIN instruktur ins ON jm.nama_instruktur_id = ins.id_instruktur
                                                    INNER JOIN tahun_ajaran tp ON jm.tahun_pelajaran_id = tp.id_tahun_ajaran
                                                    INNER JOIN semester sms ON jm.semester_id = sms.id_semester
                                                    ORDER BY jm.id_jadwal DESC"
                                            );

                                            foreach ($q as $jml) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++ ?>.</td>
                                                    <td><?= $jml['nama_instruktur'] ?></td>
                                                    <td><?= $jml['jurusan'] ?></td>
                                                    <td class="text-capitalize"><?= $jml['hari'] ?></td>
                                                    <td><?= $jml['ruangan'] ?></td>
                                                    <td><?= $jml['mata_kuliah'] ?></td>
                                                    <td><?= $jml['jam'] ?></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteJadwal<?= $jml['id_jadwal'] ?>"><i class="fas fa-trash"></i></button>

                                                        <div class="modal fade" id="deleteJadwal<?= $jml['id_jadwal'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalHapuseTitle" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Jadwal Mata Kuliah</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        Yakin Ingin Menghapus Jadwal Mata Kuliah <strong class="text-danger"><?= $jml['mata_kuliah'] ?></strong>?
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a href="?page=mataKuliah&aksi=delete&id=<?= $jml['id_jadwal'] ?>" class="btn btn-primary">Hapus</a>
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