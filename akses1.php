<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <h3>Tambah Pelanggan</h3>
    <div class="container">
    <form action="proses1.php" method="post">
        nama pelanggan :
        <input type="text" name="nama" value="" class="form-control">

        alamat pelanggan :
        <input type="text" name="alamat" value="" class="form-control">

        telp :
        <input type="text" name="telp" value="" class="form-control">

        username :
        <input type="text" name="username" value="" class="form-control">

        password :
        <input type="text" name="password" value="" class="form-control">

    </div>
    <center>
    <br>
        <input type="submit" name="simpan" value="tambah pelanggan" class="btn btn-primary">
    </center>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>