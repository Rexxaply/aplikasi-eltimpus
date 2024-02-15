<?php
include '../config/config.php';

if ($_GET['status'] == 'true') {
    $id = $_GET['id'];
    $true = $conn->query("UPDATE semester SET status='true' WHERE id_semester='$id'");
    if ($true) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('Status', 'Berhasil diganti menjadi aktif', {
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
                } ,2000);
        </script>";
    }
} else {
    $id = $_GET['id'];
    $false = $conn->query("UPDATE semester SET status='false' WHERE id_semester='$id'");
    if ($false) {
        echo "
        <script type='text/javascript'>
            setTimeout(function () {

                swal('Status', 'Berhasil diganti menjadi non-aktif', {
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
                } ,2000);
        </script>";
    }
}
