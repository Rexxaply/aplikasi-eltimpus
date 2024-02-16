<?php
include '../config/config.php';

// Tempat Semester
if (isset($_POST['editSemester'])) {
    $id_semester = $_POST ['id_semester'];
    $semester = $_POST['semester'];

    $q = $conn->query("UPDATE semester SET semester='$semester' WHERE id_semester ='$id_semester'");
    if ($q) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('$semester', 'Berhasil mengubah data', {
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
                    window.location.replace('?page=semester');
                } ,3000);   
        </script>";
    }
}