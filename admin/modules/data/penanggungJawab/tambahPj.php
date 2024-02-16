<?php
include '../config/config.php';

// Tempat Jurusan
if (isset($_POST['tambahPj'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];

    $q = $conn->query("INSERT INTO wali (jurusan_id, nama_instruktur) VALUES ('$jurusan', '$nama')");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () { 

                swal('$nama', 'Berhasil ditambah', {
                    icon : 'success',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });    
            },10);  
                window.setTimeout(function(){ 
                    window.location.replace('?page=penanggungJawab');
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
                    window.location.replace('?page=penanggungJawab');
                } ,3000);   
        </script>";
    }
}