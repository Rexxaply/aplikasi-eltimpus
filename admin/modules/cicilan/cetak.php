<?php


include '../../../config/config.php';

$id = $_GET["id"];
$tahun = $_GET["tahun"];

?>
<!DOCTYPE html>
<html>

<head>

    <title>Laporan Pembayaran</title>

    <link href="../../../assets/img/logo.png" rel="shortcut icon">

    <style>
        body {
            font-family: arial;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body onload="window.print();">
    <h3>ELTIMPUS<b><br />LAPORAN PEMBAYARAN CICILAN TAHUN <?= $tahun ?>/<?= $tahun + 1 ?></b></h3>
    <br />

    <br />
    <hr />
    <?php

    $mahasiswa = $conn->query(
        "SELECT * FROM mahasiswa mhs INNER JOIN jurusan jrs ON mhs.jurusan_id = jrs.id_jurusan 
        INNER JOIN tahun_ajaran ta ON mhs.tahun_ajaran = ta.tahun_pelajaran
        WHERE mhs.id_mahasiswa = '$id'"
    );
    $mh = mysqli_fetch_assoc($mahasiswa);

    ?>
    <table>
        <tr>
            <td>Nama Mahasiswa</td>
            <td>: </td>
            <td> <?= $mh['nama_mahasiswa'] ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>: </td>
            <td> <?= $mh['nim'] ?></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>: </td>
            <td> <?= $mh['jurusan'] ?></td>
        </tr>
        <tr>
            <td>Angkatan</td>
            <td>: </td>
            <td> <?= $mh['tahun_pelajaran'] ?></td>
        </tr>
    </table>
    <hr>
    <table border="1" cellspacing="" cellpadding="6" width="100%">
        <tr>
            <th>No.</th>
            <th>No. Bayar</th>
            <th>Pembayaran Bulan</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $ccl    = $conn->query("SELECT * FROM mahasiswa mhs INNER JOIN pembayaran pmb ON mhs.id_mahasiswa = pmb.mahasiswa_id
        WHERE mhs.id_mahasiswa = '$id' ORDER BY id_pembayaran");
        $i         = 1;
        $total    = 0;
        $jumlah = $conn->query("SELECT SUM(jumlah) FROM pembayaran WHERE ket='LUNAS'and mahasiswa_id = $id");
        $jumlahtot = mysqli_fetch_array($jumlah);
        while ($dta = mysqli_fetch_assoc($ccl)) :

        ?>
            <tr>
                <td align="center"> <?= $i ?></td>
                <td align=""> <?= $dta['no_bayar'] ?></td>
                <td align=""> <?= $dta['bulan'] ?></td>
                <td align="right">Rp. <?= number_format($dta['jumlah']) ?></td>
                <td align="center"> <?= $dta['ket'] ?></td>
            </tr>
            <?php $i++; ?>
            <?php $total += $dta['jumlah'] ?>

        <?php endwhile;

        $kurangbayar = $total - $jumlahtot[0];
        ?>
        <tr>
            <td colspan="3" align="center"><b>TOTAL HARUS DIBAYAR</b></td>
            <td align="right"><b>Rp. <?= number_format($total) ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b>TOTAL SUDAH DIBAYAR</b></td>
            <td align="right"><b>Rp. <?= number_format($jumlahtot[0]) ?></b></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center"><b>KURANG</b></td>
            <td align="right"><b>Rp. <?= number_format($kurangbayar) ?></b></td>
            <td></td>
        </tr>
    </table>
    <table width="100%">
        <tr>

            <td width="200px">
                <br />
                <p>Mengetahui, <br />
                    Kepala Sekolah,
                    <br />
                    <br />
                    <br />
                    <br />
                <p>Mau Tau Aja</p>
            </td>

            <td></td>


            <td width="200px">
				<br />
				<p>Palangka Raya, <?= date('d-m-Y') ?> <br />
					Mahasiswa,
					<br />
					<br />
					<br />
					<br />
				<p><?= $mh['nama_mahasiswa'] ?></p>
			</td>
        </tr>
    </table>

</body>

</html>