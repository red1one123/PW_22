<?php
require 'functions.php';

//cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  var_dump($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Tambah Data Mahasiswa</h3>
  <form action="" method="POST"></form>
  <ul>
    <li>
      <label>
        Nama :
        <input type="text" name="nama" autofocus>
      </label>
    </li>
    <li>
      <label>
        Nrp :
        <input type="text" name="nrp">
      </label>
    </li>
    <li>
      <label>
        Email :
        <input type="text" name="email">
      </label>
    </li>
    <li>
      <label>
        Jurusan :
        <input type="text" name="jurusan">
      </label>
    </li>
    <li>
      <label>
        Gambar :
        <input type="text" name="gambar">
      </label>
    </li>
    <li>
      <button type="submit" name="tambah">Tambah Data</button>
    </li>
  </ul>
  </form>
</body>

</html>