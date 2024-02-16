<?php
include '../config/config.php';

// Tempat Tahun Ajaran
if (isset($_POST['editMatkul'])) {
    $id_matkul = $_POST ['id_matkul'];
    $kode = $_POST['kode_matkul'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $q = $conn->query("UPDATE mata_kuliah SET mata_kuliah ='$mata_kuliah' WHERE id_matkul='$id_matkul'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$mata_kuliah', 'Berhasil mengubah data', {
                    icon : 'success',
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            },10);
                window.setTimeout(function(){
                    window.location.replace('?page=matkul');
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
                    window.location.replace('?page=matkul');
                } ,3000);   
        </script>";
    }
}