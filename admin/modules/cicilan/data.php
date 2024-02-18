<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text-primary">Data Pembayaran Cicilan
            <input type="hidden" name="id_mahasiswa" value="<?= $id_mahasiswa ?>">
            <a href="modules/cicilan/cetak.php?id=<?= $id_mahasiswa ?>&tahun=<?= $tahunanggaran; ?>" class="btn btn-info" target="_blank"><i class="fa fa-print text-white"></i>&nbsp; <span class="text-white">Cetak Rekap Cicilan</span></a>
        </h5>
    </div>
    <div class="card-body">
        <div class="table-pmbponsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>No</td>
                        <th>Bulan</th>
                        <th>Jatuh Tempo</th>
                        <th>No Bayar</th>
                        <th>Tanggal Bayar</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $q = $conn->query("SELECT * FROM pembayaran WHERE mahasiswa_id = '$id_mahasiswa' ORDER BY id_pembayaran ASC");
                    while ($pmb = mysqli_fetch_assoc($q)) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $pmb['bulan'] ?></td>
                            <td>15 <?= $pmb['bulan'] ?></td>
                            <td><?= $pmb['no_bayar'] ?></td>
                            <td><?= $pmb['tgl_bayar'] ?></td>
                            <td>Rp. <?= number_format($pmb['jumlah']) ?></td>
                            <td><?= $pmb['ket'] ?></td>
                            <td>
                                <?php
                                if ($pmb['no_bayar'] == '') {
                                    echo "<a href='?page=cicilan&aksi=prosesCicilan&nim=$nimhs&id=$pmb[id_pembayaran]'></a> ";
                                    echo "<a class='btn btn-primary btn-sm' href='?page=cicilan&aksi=prosesCicilan&nim=$nimhs&id=$pmb[id_pembayaran]&act=bayar'>Bayar</a> ";
                                } else {
                                    echo "</a>";
                                    echo "<a class='btn btn-danger btn-sm' href='?page=cicilan&aksi=deleteCicilan&nim=$nimhs&id=$pmb[id_pembayaran]&act=batal'>Batal</a> ";
                                    echo "<a class='btn btn-success btn-sm' href='modules/cicilan/cetakCicilan.php?nim=$nimhs&id=$pmb[id_pembayaran]&act=bayar' target='_blank'>Cetak</a> ";
                                }
                                ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>