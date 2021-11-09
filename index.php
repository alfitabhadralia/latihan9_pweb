<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran Lomba Tari</title>
</head>

<body>
<?php
    include ("koneksi.php");

    $query = "select * from pendaftaran";
    $hasil = mysqli_query($koneksi, $query);
?>
    <h1> Tambah Pendaftar </h1>
    <form action="proses_insert.php" method="POST">
        Nama : <input type="text" name="nama" value=""><br/>
        NIM : <input type="text" name="nim" value=""><br/>
        Angkatan : <input type="text" name="angkatan" value=""><br/>
        Jenis Kelamin : <input type="text" name="jenis_kelamin" value=""><br/>
        Alamat : <textarea name="alamat"></textarea><br/>
        <input type="submit" value="simpan">
    </form> 

    <h1> Tabel Pendaftar </h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Angkatan</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['nim']."</td>";
            echo "<td>".$row['angkatan']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td><a href='edit.php?id=".$row['id']."'>edit</a></td>";
            echo "<td><a href='delete.php?id=".$row['id']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>   
    </table>
</body>
</html>