<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <?php 
    include "../koneksi_toko_online.php";

    $qry_get_pelanggan=mysqli_query($conn,"select * from pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
    $dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
    ?>

    <h3>Ubah pelanggan</h3>

    <form action="proses_ubah_akses1.php" method="post">
        <input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>">

        nama pelanggan :
        <input type="text" name="nama" value="<?=$dt_pelanggan['nama']?>" class="form-control">

        Alamat :
        <textarea name="alamat" class="form-control" rows="4"><?=$dt_pelanggan['alamat']?></textarea>

        No.Telp :
        <input type="text" name="telp" value="<?=$dt_pelanggan['telp']?>" class="form-control">
        
        username :
        <input type="text" name="username" value="<?=$dt_pelanggan['username']?>" class="form-control">

        password :
        <input type="text" name="password" value="<?=$dt_pelanggan['password']?>" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Ubah pelanggan" class="btn btn-primary">

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>