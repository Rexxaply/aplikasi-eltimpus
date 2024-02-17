<?php

// Set TimeZone (WIB)
date_default_timezone_set("ASIA/JAKARTA");
// Koneksi Database
include 'connect.php';

// Instruktur
$instruktur = $conn->query("SELECT COUNT(id_instruktur) as ins FROM instruktur");
$data_instruktur = mysqli_fetch_assoc($instruktur);
$get_instruktur = $data_instruktur['ins'];

// Mata Kuliah
$matkul = $conn->query("SELECT COUNT(id_matkul) as mt FROM mata_kuliah");
$data_matkul = mysqli_fetch_assoc($matkul);
$get_matkul = $data_matkul['mt'];

// Mahasiswa
$mahasiswa = $conn->query("SELECT COUNT(id_mahasiswa) as mhs FROM mahasiswa");
$data_mahasiswa = mysqli_fetch_assoc($mahasiswa);
$get_mahasiswa = $data_mahasiswa['mhs'];

// Jurusan
$jurusan = $conn->query("SELECT COUNT(id_jurusan) as jrs FROM jurusan");
$data_jurusan = mysqli_fetch_assoc($jurusan);
$get_jurusan = $data_jurusan['jrs'];

$bulanIndo = [
    '1' => 'Januari',
    '2' => 'Februari',
    '3' => 'Maret',
    '4' => 'April',
    '5' => 'Mei',
    '6' => 'Juni',
    '7' => 'Juli',
    '8' => 'Agustus',
    '9' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
];