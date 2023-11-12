<?php
require "cobaclass.php";
$as = new CobaPertama();
$isi = $as->cetak_nama('Masukkan NPM anda', 'Masukkan Nama anda', 'A');
$isi = $as->alamat;
echo($isi."<br>");
?>