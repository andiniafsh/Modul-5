<form method="POST" action="aksi.php">
    <label> Nama : </label>
    <input type="text" name="nama" size="40" value="<?php echo isset($nama) ? $nama : ''; ?>"><br><br>
    <label> Email : </label>
    <input type="text" name="email" size="40" value="<?php echo isset($email) ? $email : ''; ?>"><br><br>
    <label> Web : </label>
    <input type="text" name="web" size="40" value="<?php echo isset($web) ? $web : ''; ?>"><br><br>
    <label> Alamat : </label>
    <textarea name="alamat" rows="4" cols="40"><?php echo isset($alamat) ? $alamat : ''; ?></textarea><br><br>
    <input type="hidden" name="kode" value="<?php echo isset($kode) ? $kode : ''; ?>">
    <input type="submit" name="proses" value="Simpan">
    <input type="reset" name="proses" value="Reset">

    <?php
    if (isset($_GET['kode'])) {
        echo '<input type="submit" name="proses" value="Simpan">';
    } else {
        echo '<input type="submit" name="proses" value="Update">';
    }
    ?>
</form>

<?php
    include_once('koneksi.php');

    if(isset($_GET['kode'])){
        $kode=$_GET['kode'];
        $query="SELECT * FROM table_mahasiswa where kode='$kode'";
        $result=$mysqli->query($query);
        if($data = $result -> fetch_assoc()){
            $kode=$data['kode'];
            $nama=$data['nama'];
            $email=$data['email'];
            $web=$data['web'];
            $alamat=$data['alamat'];
        }
    }
?>


