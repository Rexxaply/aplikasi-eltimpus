<?php
    include '../config/config.php';

if (isset($_POST['tambahInstruktur'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $gambar = @$_FILES['foto']['name'];

    if($gambar != "") {
        $ektensi_diperbolehkan = array('png','jpg');
        $x = explode('.', $gambar);
        $ektensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak = rand(1, 999);
        $nama_gambar_baru = $angka_acak.'-'.$gambar;

        if(in_array($ektensi, $ektensi_diperbolehkan) == true) {
            move_uploaded_file($file_tmp, '../assets/img'. $nama_gambar_baru);

            $q = $conn->query("INSERT INTO instruktur (kode_instruktur, nama_instruktur, email, foto) VALUES ('$kode', '$nama', '$email', '$nama_gambar_baru')");

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
                            window.location.replace('?page=penanggungJawab');
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
                            window.location.replace('?page=penanggungJawab');
                        } ,3000);   
                </script>";
            }

        } else {
            echo "
            <script>
                alert('Ektensi gambar hanya bisa png dan jpg saja!);
                window.location='?page=tambahInstruktur';
            </script>";
        }
    }
    
}