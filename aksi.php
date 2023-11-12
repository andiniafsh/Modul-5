<?php
include_once('koneksi.php');

function simpan_data(){
    include ('koneksi.php');
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $web = $_POST['web'];
    $alamat = $_POST['alamat'];

    $query = "INSERT INTO table_mahasiswa(nama, email, web, alamat) VALUES
    ('$nama','$email','$web', '$alamat')";
    $eksekusi = mysqli_query($mysqli, $query);
    if ($eksekusi)  {
        echo ("proses Input berhasil");
    }else {
        echo "Proses Input gagal";
    }
}

function hapus_data(){
    include('koneksi.php');
    $kode=$_GET['kode'];
    $sql="DELETE FROM table_mahasiswa WHERE kode='$kode'";
    $eksekusi=$mysqli->query($sql);
    if($eksekusi){
        echo "Proses hapus Berhasil";
    }else{
        echo "proses hapus gagal";
    } 
}

function update_data(){
    include('koneksi.php');
    $kode=$_GET['kode'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    // $alamat=$_POST['alamat'];

    $sql="UPDATE table_mahasiswa SET nama='$nama', email='$email', web='$web' WHERE kode='$kode'";
    $eksekusi=$mysqli->query($sql);
    if ($eksekusi){
        echo "Proses Update Berhasil";
    }else {
        echo "proses Update Gagal";
    }
}

if(isset($_GET['proses']) and $_GET['proses'] =='Reset'){
    hapus_data();
}
if(isset($_POST['proses']) and $_POST['proses'] =='Simpan'){
    simpan_data();
}
if(isset($_POST['proses']) and $_POST['proses'] =='Update'){
    update_data();
}
?>