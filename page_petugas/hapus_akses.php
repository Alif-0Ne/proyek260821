<?php 
    if($_GET['nama_produk']){
        include "../koneksi_toko_online.php";
        $qry_hapus=mysqli_query($conn,"delete from produk where nama_produk='".$_GET['nama_produk']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus produk');location.href='tampil_akses.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus produk');location.href='tampil_akses.php';</script>";
        }
    }
?>