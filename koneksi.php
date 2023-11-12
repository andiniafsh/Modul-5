<?php
$host = "localhost";
$username = "root";
$password = "";
$namaDB = "21081010217_andini";
$mysqli = new mysqli($host, $username, $password, $namaDB);
// Check Connections
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
}else {
    echo "berhasil connect";
}
?>