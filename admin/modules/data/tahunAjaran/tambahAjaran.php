<?php
include '../config/config.php';

// Tempat Tahun Ajaran
if (isset($_POST['tambahThnAjaran'])) {
    $thn_masuk = $_POST['thn_masuk'];
    $thn_keluar = $_POST['thn_keluar'];
    $status = 'true';

    $q = $conn->query("INSERT INTO tahun_ajaran (tahun_pelajaran, status) VALUES ('$thn_masuk/$thn_keluar', '$status')");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$tahun_pelajaran', 'Berhasil ditambah', {
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
                    window.location.replace('?page=tahunAjaran');
                } ,3000);   
        </script>";
    }
}