<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $angkatan = $_POST['angkatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "insert into pendaftaran values ('', '$nama', '$nim', '$angkatan', '$jenis_kelamain', '$alamat', )";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id=$id");
    }

?>