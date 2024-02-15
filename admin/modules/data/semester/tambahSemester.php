<?php
include '../config/config.php';

// Tempat Semester
if (isset($_POST['tambahSemester'])) {
    $kode = 'ELT' . date('YHis');
    $semester = $_POST['semester'];
    $status = 'true';

    $q = $conn->query("INSERT INTO semester (kode_semester, semester, status) VALUES ('$kode', '$semester', '$status')");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$semester', 'Berhasil ditambah', {
                    icon : 'success',
                    buttons: {
                        confirm: {
                            className : 'btn btn-success'
                        }
                    },
                });
            },10);
                window.setTimeout(function(){
                    window.location.replace('?page=semester');
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
                    window.location.replace('?page=semester');
                } ,3000);   
        </script>";
    }
}