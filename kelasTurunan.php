<?php
class induk {
    function fungsiInduk(){
        echo "Panggil fungdi induk";
    }
}
class Anak extends induk{
    function fungsiAnak(){
        echo "<br> Panggil fungsi Anak";
    }
}
$child = new Anak();
$child->fungsiInduk(); // Panggil fungsi Induk
$child->fungsiAnak(); // Panggil fungsi Anak
?>