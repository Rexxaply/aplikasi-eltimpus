<?php
include '../config/config.php';

// Tempat Tahun Ajaran
if (isset($_POST['editThnAjaran'])) {
    $id_tahun_ajaran = $_POST ['id_tahun_ajaran'];
    $thn_masuk = $_POST['thn_masuk'];
    $thn_keluar = $_POST['thn_keluar'];

    $q = $conn->query("UPDATE tahun_ajaran SET tahun_pelajaran='$thn_masuk/$thn_keluar' WHERE id_tahun_ajaran ='$id_tahun_ajaran'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$tahun_pelajaran', 'Berhasil mengubah data', {
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
                    window.location.replace('?page=tahunAjaran');
                } ,3000);   
        </script>";
    }
}