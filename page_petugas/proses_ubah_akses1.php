<?php

if($_POST){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama_pelanggan=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama_pelanggan)){
        echo "<script>alert('nama pelanggan tidak boleh kosong');location.href='ubah_akses1.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='akses1.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='akses1.php';</script>";
    }else {
        include "../koneksi_toko_online.php";

        $update=mysqli_query($conn,"UPDATE `pelanggan` SET `nama`='".$nama_pelanggan."',`alamat`='".$alamat."',`telp`='".$telp."',`username`='".$username."',`password`='".md5($password)."' WHERE `id_pelanggan`='".$id_pelanggan."'") or die(mysqli_error($conn));
        if($update){
            echo "<script>alert('Sukses update pelanggan');location.href='tampil_akses1.php';</script>";
        } else {
            echo "<script>alert('Gagal update pelanggan');location.href='ubah_akses1.php?id_pelanggan=".$id_pelanggan."';</script>";
        }
    }

}
?>