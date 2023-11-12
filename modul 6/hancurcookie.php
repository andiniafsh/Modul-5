<?php
//Menghapus cookie
echo("Nama Anda Adalah : ". $_COOKIE['nama']."<br>");
echo ("Nama Teman Anda Adalah : ".$_COOKIE['nama2']."<br>");
echo ("<br>");
setcookie ("nama");
echo ("Nama Ada Sekarang Ada/Tidak?:". $_COOKIE['nama']."<br>");
echo ("Nama Teman Anda Sekarang Ada/Tidak?: ". $_COOKIE['nama2']."<br>");
echo ("<br>");
?>