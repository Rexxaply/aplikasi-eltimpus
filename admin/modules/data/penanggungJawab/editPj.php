<?php
include '../config/config.php';

// Tempat Jurusan
if (isset($_POST['editPj'])) {
    $wali = $_POST['id_wali'];
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];

    $q = $conn->query("UPDATE wali SET jurusan='$jurusan', nama='$nama' WHERE id_wali='$wali'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () { 

                swal('$nama', 'Berhasil mengubah data', {
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
                    window.location.replace('?page=penanggungJawab');
                } ,3000);   
        </script>";
    }
}