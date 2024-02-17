<?php
include '../config/config.php';

if (isset($_POST['tambahMatkul'])) {
    $kode = $_POST['kode'];
    // ta = tahun_ajaran
    $ta = $_POST['ta'];
    $semester = $_POST['semester'];
    $instruktur = $_POST['instruktur'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $ruangan = $_POST['ruangan'];
    $jurusan = $_POST['jurusan'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    // sebelum mengisi lihat database jadwal_matkul terbih dahulu agar tidak salah dalam penamaan
    $q = $conn->query(
        "INSERT INTO jadwal_matkul (kode_matkul, mata_kuliah_id, hari, jam, ruangan, jurusan_id, nama_instruktur_id, tahun_pelajaran_id, semester_id) 
        VALUES ('$kode', '$mata_kuliah', '$hari', '$jam', '$ruangan', '$jurusan', '$instruktur', '$ta', '$semester')");

    if ($q) {
        echo "
                <script type='text/javascript'>
                    setTimeout(function () { 
        
                        swal('Jadwal Mata Kuliah', 'Berhasil ditambah', {
                            icon : 'success',
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });    
                    },10);  
                        window.setTimeout(function(){ 
                            window.location.replace('?page=mataKuliah');
                        } ,3000);   
                </script>";
    } else {
        echo "
                <script type='text/javascript'>
                    setTimeout(function () { 
        
                        swal('Terjadi Kesalahan', 'Gagal menambah data', {
                            icon : 'error',
                            buttons: {        			
                                confirm: {
                                    className : 'btn btn-danger'
                                }
                            },
                        });    
                    },10);  
                        window.setTimeout(function(){ 
                            window.location.replace('?page=mataKuliah');
                        } ,3000);   
                </script>";
    }
}
