<body>

    <?php
        include ("koneksi.php");
        $id = $_GET['id'];

        $query = "select * from pendaftaran where id= $id";
        $hasil = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_array($hasil);
    ?>
    <h1>Edit Data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Nama : <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br/>
        NIM : <textarea name="nim"><?php echo $row['nim']; ?></textarea><br/>
        Angkatan : <textarea name="angkatan"><?php echo $row['angkatan']; ?></textarea><br/>
        Jenis Kelamin : <textarea name="jenis_kelamin"><?php echo $row['jenis_kelamin']; ?></textarea><br/>
        Alamat : <textarea name="alamat"><?php echo $row['alamat']; ?></textarea><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>