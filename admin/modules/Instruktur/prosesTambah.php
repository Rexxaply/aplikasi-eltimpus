<?php
include '../config/config.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$sumber = @$_FILES['foto']['tmp_name'];
$target = '../assets/img/user/';
$nama_gambar = @$_FILES['foto']['name'];
$pindah = move_uploaded_file($sumber, $target . $nama_gambar);

echo $kode . "<br>" . $nama . "<br>" . $email . "<br>" . $nama_gambar;
// $q = $conn->query("INSERT INTO (kode_instruktur, nama_instruktur, email, foto) VALUES ('$kode', '$nama', '$email', '$nama_gambar')");

// if ($q) {
//     echo "
//                 <script type='text/javascript'>
//                     setTimeout(function () { 
        
//                         swal('$nama', 'Berhasil ditambah', {
//                             icon : 'success',
//                             buttons: {        			
//                                 confirm: {
//                                     className : 'btn btn-success'
//                                 }
//                             },
//                         });    
//                     },10);  
//                         window.setTimeout(function(){ 
//                             window.location.replace('?page=tambahInstruktur');
//                         } ,3000);   
//                 </script>";
// } else {
//     echo "
//                 <script type='text/javascript'>
//                     setTimeout(function () { 
        
//                         swal('Terjadi Kesalahan', 'Gagal menambah data', {
//                             icon : 'error',
//                             buttons: {        			
//                                 confirm: {
//                                     className : 'btn btn-danger'
//                                 }
//                             },
//                         });    
//                     },10);  
//                         window.setTimeout(function(){ 
//                             window.location.replace('?page=tambahInstruktur');
//                         } ,3000);   
//                 </script>";
// }
