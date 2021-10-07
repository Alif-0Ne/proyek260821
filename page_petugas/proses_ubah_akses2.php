<?php

if($_POST){
    $id_petugas=$_POST['id_petugas'];
    $nama_petugas=$_POST['nama_petugas'];
    $level = $_POST['level'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama_petugas)){
        echo "<script>alert('nama petugas tidak boleh kosong');location.href='akses2.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='akses2.php';</script>";
    } elseif(empty($level)){
        echo "<script>alert('level tidak boleh kosong');location.href='akses2.php';</script>";
    } else {
        include "../koneksi_toko_online.php";
        if(empty($password)){
            $update=mysqli_query($conn,"UPDATE `petugas` SET `nama_petugas` = '".$nama_petugas."', `username` = '".$username."', `level` = '".$level."' WHERE `id_petugas` = '".$id_petugas."'") or die(mysqli_error($conn));
            
            if($update){
                echo "<script>alert('Sukses update petugas');location.href='tampil_akses2.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_akses2.php?id_petugas=".$id_petugas."';</script>";
            }
        } else{
            $update1=mysqli_query($conn,"UPDATE `petugas` SET `nama_petugas` = '".$nama_petugas."', `username` = ''".$username."'', `password`='".md5($password)."', `level` = '".$level."' WHERE `id_petugas` = '".$id_petugas."'") or die(mysqli_error($conn));
            
            if($update1){
                echo "<script>alert('Sukses update petugas');location.href='tampil_akses2.php';</script>";
            } else {
                echo "<script>alert('Gagal update petugas');location.href='ubah_akses2.php?id_petugas=".$id_petugas."';</script>";
            }
        }
    }

}
?>