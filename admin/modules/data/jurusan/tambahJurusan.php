<?php
include '../config/config.php';

// Tempat Jurusan
if (isset($_POST['tambahJurusan'])) {
    $kode = $_POST['kode'];
    $jurusan = $_POST['jurusan'];

    $q = $conn->query("INSERT INTO jurusan (kode_jurusan, jurusan) VALUES ('$kode', '$jurusan')");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () { 

                swal('$jurusan', 'Berhasil ditambah', {
                    icon : 'success',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });    
            },10);  
                window.setTimeout(function(){ 
                    window.location.replace('?page=jurusan');
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
                    window.location.replace('?page=jurusan');
                } ,3000);   
        </script>";
    }
} elseif (isset($_POST[''])) {
    // Tempat Query Update

} elseif (isset($_GET[''])) {
    // Tempat Query Hapus
}