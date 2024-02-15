<?php

include '../config/config.php';

if (($_GET['aksi']) === 'xls') {
    $fileName = $_FILES["userfile"]["name"];
    $fileExtension = explode('.', $fileName);
    $fileExtension = strtolower(end($fileExtension));
    $newFileName = date("Y.m.d") . " - " . date("h.i.sa") . "." . $fileExtension;

    $targetDirectory = "../assets/excel/" . $newFileName;
    move_uploaded_file($_FILES['userfile']['tmp_name'], $targetDirectory);

    error_reporting(0);
    ini_set('display_errors', 0);

    require '../config/excel/excel_reader2.php';
    require '../config/excel/SpreadsheetReader.php';

    $reader = new SpreadsheetReader($targetDirectory);
    foreach ($reader as $key => $row) {
        $nim = $row[0];
        $nama_mahasiswa = $row[1];
        $jurusan = $row[2];
        $jk = $row[3];
        $jabatan = $row[4];

        // echo $nim ."<br>" . $nama_mahasiswa . "<br>" . $jurusan . "<br>" . $jk . "<br>" . $jabatan . "<br>";

        $q = $conn->query("INSERT INTO mahasiswa (nim, nama_mahasiswa, jurusan, jk, jabatan) 
        VALUES ('$nim', '$nama_mahasiswa', '$jurusan', '$jk', '$jabatan')");
    }

    if ($q) {
        echo
			"
			<script>
			alert('Berhasil di Import');
			document.location.href = '?page=dataMahasiswa';
			</script>
			";
    } else {
        echo
			"
			<script>
			alert('Gagal di Import');
			document.location.href = '?page=dataMahasiswa';
			</script>
			";
    }
}
