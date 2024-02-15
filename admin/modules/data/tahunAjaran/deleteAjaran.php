<?php
include '../config/config.php';

// Tempat Hapus Data
if ($_GET['aksi'] === 'delete')  {
    $id = $_GET['id'];
    $q = $conn->query("DELETE FROM tahun_ajaran WHERE id_tahun_ajaran = '$id'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('Tahun Ajaran', 'Berhasil dihapus', {
                    icon : 'success',
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            },10);
                window.setTimeout(function(){
                    window.location.replace('?page=tahunAjaran');
                } ,3000);
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
                    window.location.replace('?page=tahunAjaran');
                } ,3000);   
        </script>";
    }
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
                window.location.replace('?page=semester');
            } ,3000);   
    </script>";
}