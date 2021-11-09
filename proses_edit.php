<?php

    include("koneksi.php");

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $angkatan = $_POST['angkatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];


    $query = "update pendaftaran set nama = '$nama', nim= '$nim', angkatan= '$angkatan', jenis_kelamin= '$jenis_kelamin',  where id = $id";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: index.php");
    }else{
        header("Location: edit.php?id=$id");
    }

?>