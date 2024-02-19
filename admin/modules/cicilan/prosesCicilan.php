<?php
include '../config/config.php';
if (isset($_GET['act'])) {
    if ($_GET['act'] == 'bayar') {
        $id        = $_GET['id'];
        $nim        = $_GET['nim'];
        //tanggal bayar
        $tglbayar    = date('Y-m-d');
        $nobayar    = date('dmYHisis');

        echo $id . "<br>" . $nim;


        $byr = $conn->query("UPDATE pembayaran SET 
			no_bayar = '$nobayar',
			tgl_bayar = '$tglbayar' ,
			ket = 'LUNAS'
			WHERE id_pembayaran = '$id'");

        if ($byr) {
            echo "
                <script type='text/javascript'>
                    setTimeout(function () {

                        swal('Data', 'Berhasil dibayar', {
                            icon : 'success',
                            buttons: {
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });
                    },10);
                        window.setTimeout(function(){
                            window.history.back();
                        } ,2000);
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
                            window.history.back();
                            location.reload();
                        } ,3000);   
                </script>";
        }
    } else if ($_GET['act'] == 'batal') {
        $id        = $_GET['id'];
        $nim        = $_GET['nim'];


        $batal = $conn->query("UPDATE pembayaran SET 
			no_bayar = null,
			tgl_bayar = null,
			ket = 'BELUM DIBAYAR'
			WHERE id_pembayaran = '$id'");

        if ($batal) {
            echo "
                <script type='text/javascript'>
                    setTimeout(function () {

                        swal('Data', 'Berhasil dibatalkan', {
                            icon : 'success',
                            buttons: {
                                confirm: {
                                    className : 'btn btn-success'
                                }
                            },
                        });
                    },10);
                        window.setTimeout(function(){
                            window.history.back();
                            location.reload();
                        } ,2000);
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
                            window.history.back();
                            location.reload();
                        } ,3000);   
                </script>";
        }
    }
}
