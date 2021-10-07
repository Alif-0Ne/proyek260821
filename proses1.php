<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('telepon tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='akses1.php';</script>";
    } else {
        include "koneksi_toko_online.php";
        $insert=mysqli_query($conn,"insert into pelanggan (nama, alamat, telp, username, password) value ('".$nama."','".$alamat."','".$telp."','".$username."','".md5($password)."')");
            if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href='akses1.php';</script>";
            } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href='akses1.php';</script>";
            }
    }

}

?>