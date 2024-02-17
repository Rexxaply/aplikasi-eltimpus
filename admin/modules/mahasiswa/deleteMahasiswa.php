<?php
include '../config/config.php';

// Tempat Hapus Data
if (($_GET['aksi'] == 'delete')) {
    $id = $_GET['id'];
    $idMb = $_GET['idMb'];
    $q = $conn->query("DELETE FROM mahasiswa WHERE id_mahasiswa = '$id'");
    $e = $conn->query("DELETE FROM pembayaran WHERE mahasiswa_id = '$id'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('Data', 'Berhasil dihapus', {
                    icon : 'success',
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            },10);
                window.setTimeout(function(){
                    window.location.replace('?page=dataMahasiswa');
                } ,2000);
        </script>";
    } else {
        echo "
        <script type='text/javascript'>
            setTimeout(function () { 

                swal('Terjadi Kesalahan', 'Gagal menghapus data', {
                    icon : 'error',
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });    
            },10);  
                window.setTimeout(function(){ 
                    window.location.replace('?page=dataMahasiswa');
                } ,3000);   
        </script>";
    }
}
