<?php
include '../config/config.php';

// Tempat Hapus Data
if (($_GET['aksi'] == 'delete')) {
    $id = $_GET['id'];
    $q = $conn->query("DELETE FROM jadwal_matkul WHERE id_jadwal = '$id'");
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
                    window.location.replace('?page=mataKuliah');
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
                    window.location.replace('?page=mataKuliah');
                } ,3000);   
        </script>";
    }
}
