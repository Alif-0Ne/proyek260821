<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3><a href="home_akses2.php">Tampil produk</a></h3>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama produk </th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Foto produk</th>
            </tr>
        </thead>

        <tbody>
            <?php 
            include "../koneksi_toko_online.php";
            $qry_produk=mysqli_query($conn,"SELECT * FROM produk");
            $no=0;

            while($data_produk=mysqli_fetch_array($qry_produk)){
                $no++;?>
                    <tr> 
                        <td><?=$no?></td>
                        <td><?=$data_produk['nama_produk']?></td> 
                        <td><?=$data_produk['deskripsi']?></td> 
                        <td><?=$data_produk['harga']?></td>
                        <td><?=$data_produk['foto_produk']?></td>
                        <td><a href="ubah_akses.php?id_produk=<?=$data_produk['id_produk']?>" class="btn btn-success">Ubah</a> | <a href="hapus_akses.php?nama_produk=<?=$data_produk['nama_produk']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="../akses.php?" class="btn btn-warning">tambah produk</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>

