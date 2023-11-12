<?php
 if(isset($COOKIE['nama']) and isset($_COOKIE['nama2']))
 {
    echo "Nama Anda Adalah : ".$_COOKIE['nama']."<br>";
    echo "Nama Teman Anda Adalah : ". $_COOKIE['nama2']."<br>";
 }else{
    echo "cookie Kosong";
 }
 ?>