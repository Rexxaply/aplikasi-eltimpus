<?php
include '../config/config.php';

// Tempat Jurusan
if (isset($_POST['editJurusan'])) {
    $id_jurusan = $_POST ['id_jurusan'];
    $jurusan = $_POST['jurusan'];

    $q = $conn->query("UPDATE jurusan SET jurusan='$jurusan' WHERE id_jurusan = '$id_jurusan'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () { 

                swal('$jurusan', 'Berhasil mengubah data', {
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

                swal('Terjadi Kesalahan', 'Gagal mengubah data', {
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