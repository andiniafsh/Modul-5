<?php
class CobaPertama {
    public $salam;
    public $cetak;
    public $alamat = "UPN Veteran Jawa Timur";
    
    public function __construct() {
        $this->salam = "Hallo Sobat, Mari Belajar OOP Yuk";
        echo $this->salam;
    }
    
    public function cetak_nama ($nim, $nama, $kelas) {
        $this->cetak = "<br>Nim : " . $nim . " <br>Nama : " . $nama . " <br>Kelas : " . $kelas;
        echo $this->cetak;
    }
    
    public function __destruct() {
        $this->salam = "Sudah selesai belajarnya, Selamat Tinggal";
        echo $this->salam;
    }
}
?>
