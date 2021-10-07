<?php 
    include "header_akses1.php";
    include "../koneksi_toko_online.php";

    $qry_detail_produk=mysqli_query($conn,"select * from produk where id_produk = '".$_GET['id_produk']."'");
    $dt_produk=mysqli_fetch_array($qry_detail_produk);
?>

<h2>Beli produk</h2>

<div class="row">

    <div class="col-md-4">
        <img src="../images/<?=$dt_produk['foto_produk']?>" class="card-img-top">
    </div>

    <div class="col-md-8">
        <form action="add_cart.php?id_produk=<?=$dt_produk['id_produk']?>" method="post">
            <table class="table table-hover table-striped">
            <?php
            $harga = $dt_produk['harga'];
            $price = number_format($harga,2);
            ?>
                <thead>
                    <tr>
                        <td>Nama Buku</td><td><?=$dt_produk['nama_produk']?></td>
                    </tr>

                    <tr>
                        <td>Deskripsi</td><td><?=$dt_produk['deskripsi']?></td>
                    </tr>

                    <tr>
                        <td>Harga</td><td><?php echo("Rp. {$price} "); ?></td>
                    </tr>

                    <tr>
                        <td>Jumlah Beli</td><td><input type="number" name="jumlah_beli" value="1"></td>
                    </tr>

                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                    </tr>
                </thead>

            </table>
        </form>
    </div>

</div>

<?php 
    include "../footer.php";
?>