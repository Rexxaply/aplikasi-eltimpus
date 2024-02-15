<?php
$host = "localhost"; //host database
$username = "root"; //user database
$password = ""; //password database
$database_name = "db_eltimpus"; //nama database
$conn = mysqli_connect($host, $username, $password, $database_name);
$conn->set_charset("utf8");

// check connection
if ($conn->connect_errno) {
    echo "Gagal tersambung ke database :" . $conn->connect_error;
    exit();
}