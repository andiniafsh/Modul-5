<table width="513" border="0" align="center">
    <tr bgcolor="#FFFFCC">
        <td width="100">Nama</td>
        <td width="100">Email</td>
        <td width="100">Web</td>
        <td width="135">Alamat</td>
        <td colspan="2"></td>
    </tr>
    <?php
    include_once('koneksi.php');
    $query = "SELECT kode, nama, email, web, alamat FROM table_mahasiswa";
    $result = $mysqli->query($query);
    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['web']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td width="43">
                    <div align="center">
                        <a href="form.php?kode=<?php echo $data['kode']; ?>">Edit</a>
                    </div>
                </td>
                <td width="35">
                    <div align="center">
                        <a href="aksi.php?kode=<?php echo $data['kode']; ?>&proses=hapus">Hapus</a>
                    </div>
                </td>
            </tr>
    <?php
        }
    }
    ?>
</table>
