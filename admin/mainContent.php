<?php
error_reporting();
$aksi = @$_GET['aksi'];
$page = $_GET['page'];

switch ($page) {
    case 'tambahMahasiswa':
        switch ($aksi) {
            case '':
                include 'modules/mahasiswa/tambahMahasiswa.php';
                break;

            case 'xls':
                include 'modules/mahasiswa/importXls.php';
                break;

            case 'tambah':
                include 'modules/mahasiswa/prosesMahasiswa.php';
                break;
        }
        break;

    case 'dataMahasiswa':
        switch ($aksi) {
            case '':
                include 'modules/mahasiswa/dataMahasiswa.php';
                break;
                
            case 'delete':
                include 'modules/mahasiswa/deleteMahasiswa.php';
                break;

        }
        break;

    case 'dataInstruktur':
        switch ($aksi) {
            case '':
                include 'modules/instruktur/dataInstruktur.php';
                break;

            case 'delete':
                include 'modules/Instruktur/deleteInstruktur.php';
                break;
        }
        break;

    case 'tambahInstruktur':
        switch ($aksi) {
            case '':
                include 'modules/instruktur/tambahInstruktur.php';
                break;

            case 'tambah':
                include 'modules/instruktur/prosesTambah.php';
                break;

            case 'edit':
                include 'modules/Instruktur/proses_edit.php';
                break;
        }
        break;

    case 'jurusan':
        switch ($aksi) {
            case '':
                include 'modules/data/jurusan/jurusan.php';
                break;

            case 'tambah':
                include 'modules/data/jurusan/tambahJurusan.php';
                break;

            case 'edit':
                include 'modules/data/jurusan/editJurusan.php';
                break;

            case 'delete':
                include 'modules/data/jurusan/deleteJurusan.php';
                break;
        }
        break;

    case 'semester':
        switch ($aksi) {
            case '':
                include 'modules/data/semester/semester.php';
                break;

            case 'tambah':
                include 'modules/data/semester/tambahSemester.php';
                break;

            case 'set_sts':
                include 'modules/data/semester/stsSemester.php';
                break;

            case 'edit':
                include 'modules/data/semester/editSemester.php';
                break;

            case 'delete':
                include 'modules/data/semester/deleteSemester.php';
                break;
        }
        break;

    case 'matkul':

        switch ($aksi) {
            case '':
                include 'modules/data/matkul/matkul.php';
                break;

            case 'tambah':
                include 'modules/data/matkul/tambahMatkul.php';
                break;

            case 'edit':
                include 'modules/data/matkul/editMatkul.php';
                break;


            case 'delete':
                include 'modules/data/matkul/deleteMatkul.php';
                break;
        }
        break;


    case 'penanggungJawab':
        switch ($aksi) {
            case '':
                include 'modules/data/penanggungJawab/penanggungJawab.php';
                break;

            case 'tambah':
                include 'modules/data/penanggungJawab/tambahPj.php';
                break;

            case 'edit':
                include 'modules/data/penanggungJawab/editPj.php';
                break;

            case 'delete':
                include 'modules/data/penanggungJawab/deletePj.php';
                break;
        }
        break;

    case 'tahunAjaran':
        switch ($aksi) {
            case '':
                include 'modules/data/tahunAjaran/tahunAjaran.php';
                break;

            case 'tambah':
                include 'modules/data/tahunAjaran/tambahAjaran.php';
                break;

            case 'set_sts':
                include 'modules/data/tahunAjaran/stsAjaran.php';
                break;

            case 'edit':
                include 'modules/data/tahunAjaran/editAjaran.php';
                break;

            case 'delete':
                include 'modules/data/tahunAjaran/deleteAjaran.php';
                break;
        }
        break;

    case 'mataKuliah':
        switch ($aksi) {
            case '':
                include 'modules/jadwal/mataKuliah.php';
                break;

            case 'delete':
                include 'modules/jadwal/deleteMatkul.php';
                break;
        }
        break;

    case 'tambahMatkul':
        switch ($aksi) {
            case '':
                include 'modules/jadwal/tambahMatkul.php';
                break;

            case 'tambah':
                include 'modules/jadwal/prosesMatkul.php';
                break;
        }
        break;

    case 'backup':
        include 'database.php';
        break;

    case 'cicilan':
        include 'modules/cicilan/cicilan.php';
        break;

    case 'laporan':
        include 'modules/laporan/laporan.php';
        break;

    case 'pembayaran':
        include 'modules/pembayaran/pembayaran.php';
        break;

    case '':
        include 'beranda.php';
        break;

    default:
        include '404.php';
}
