<!DOCTYPE html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>

    <h3>Tambah Petugas</h3>
    <div class="container">
    <form action="proses2.php" method="post">
        nama petugas :
        <input type="text" name="nama_petugas" value="" class="form-control">

        username :
        <input type="text" name="username" value="" class="form-control">

        password :
        <input type="password" name="password" value="" class="form-control">

        level :
        <!-- <input type="text" > -->
        <select name="level" class="form-control">
            <option value="1">Petugas</option>
            <option value="2">Admin</option>
            <option value="3">Manager</option>
        </select>
    </div>
    <center>
    <br>
        <input type="submit" name="simpan" value="tambah petugas" class="btn btn-primary">
    </center>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>