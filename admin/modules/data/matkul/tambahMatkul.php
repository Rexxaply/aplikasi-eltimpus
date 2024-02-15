<?php
include '../config/config.php';

// Tempat Tahun Ajaran
if (isset($_POST['tambahMatkul'])) {
    $kode = $_POST['kode_matkul'];
    $mata_kuliah = $_POST['mata_kuliah'];

    $q = $conn->query("INSERT INTO mata_kuliah (kode_matkul, mata_kuliah) VALUES ('$kode', '$mata_kuliah')");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$mata_kuliah', 'Berhasil ditambah', {
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
                    window.location.replace('?page=matkul');
                } ,3000);   
        </script>";
    }
}