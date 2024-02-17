<?php
include '../config/config.php';

if (isset($_POST['tambahMahasiswa'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jabatan = $_POST['jabatan'];
    $jk = $_POST['jk'];
    $ta = $_POST['ta'];
    $awaltempo  = date('d-m-Y');
    $tahunanggaran = substr($ta, 0, 4);
    $nexttahunanggaran = $tahunanggaran + 1;


    // sebelum mengisi lihat database mahasiswa terlebih dahulu agar tidak ada salah dalam penamaan
    $q = $conn->query(
        "INSERT INTO mahasiswa (nim, nama_mahasiswa, jurusan_id, jabatan, jk, tahun_ajaran) 
        VALUES ('$nim', '$nama', '$jurusan', '$jabatan', '$jk', '$ta')");

    $s = $conn->query("SELECT * FROM mahasiswa mhs INNER JOIN tahun_ajaran ta WHERE mhs.tahun_ajaran = ta.tahun_pelajaran ORDER BY mhs.id_mahasiswa DESC LIMIT 1");
    $mhs = mysqli_fetch_assoc($s);
    $mhs_id = $mhs['id_mahasiswa'];
    $biaya = 1500000;


    $getjurusan = $conn->query("SELECT jurusan FROM jurusan WHERE id_jurusan=$jurusan");
    $hasil = mysqli_fetch_array($getjurusan);

    for ($i = 7; $i <= 12; $i++) {
        // tanggal jatuh tempo setiap tanggal ?
        $jatuhtempo = date("d-m-Y", strtotime("+$i month", strtotime($awaltempo)));

        $bulan = "$bulanIndo[$i] $tahunanggaran";
        // simpan data

        $ket    = 'BELUM DIBAYAR';
        
        $add = mysqli_query($conn, "INSERT INTO pembayaran (mahasiswa_id , jatuh_tempo, bulan, jumlah, ket, tahun, jurusan) VALUES ('$mhs_id','$tahunanggaran','$bulan','$biaya', '$ket','$tahunanggaran','$hasil[0]')");
    };

    for ($i = 1; $i <= 6; $i++) {
        // tanggal jatuh tempo setiap tanggal ?
        $jatuhtempo = date("d-m-Y", strtotime("+$i month", strtotime($awaltempo)));

        $bulan = "$bulanIndo[$i] $nexttahunanggaran";
        // simpan data

        $ket    = 'BELUM DIBAYAR';

        $add = mysqli_query($conn, "INSERT INTO pembayaran (mahasiswa_id , jatuh_tempo, bulan, jumlah, ket, tahun, jurusan) VALUES ('$mhs_id','$tahunanggaran','$bulan','$biaya', '$ket','$tahunanggaran','$hasil[0]')");
    };


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
                            window.location.replace('?page=dataMahasiswa');
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
                            window.location.replace('?page=dataMahasiswa');
                        } ,3000);   
                </script>";
    }
}
