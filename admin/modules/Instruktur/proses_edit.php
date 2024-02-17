<?php
include '../config/config.php';

// Tempat Jurusan
if (isset($_POST['editinstruktur'])) {
    $id_instruktur = $_POST['id_instruktur'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $q = $conn->query("UPDATE instruktur SET kode_instruktur='$kode', nama_instruktur='$nama', email='$email' WHERE id_instruktur = '$id_instruktur'");
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
                    window.location.replace('?page=dataInstruktur');
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
                    window.location.replace('?page=dataInstruktur');
                } ,3000);   
        </script>";
    }
} 