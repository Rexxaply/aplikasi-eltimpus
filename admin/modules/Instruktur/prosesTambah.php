<?php
include '../config/config.php';

if (isset($_POST['tambahInstruktur'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $q = $conn->query("INSERT INTO instruktur (kode_instruktur, nama_instruktur, email) VALUES ('$kode', '$nama', '$email')");

    if ($q) {
        echo "
                <script type='text/javascript'>
                    setTimeout(function () { 
        
                        swal('$nama', 'Berhasil ditambah', {
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
                            window.location.replace('?page=dataInstruktur');
                        } ,3000);   
                </script>";
    }
}
