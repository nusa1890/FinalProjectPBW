<?php
  include('php/koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
?>

<!DOCTYPE html>
<html>
  <head>
    <title>signup</title>
    <link rel="stylesheet" href="../css/tem.css">
  </head>
  <body>
      <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="php/signup_proses.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama</label>
          <input type="text" name="nama" required="" />
        </div>
        <div>
          <label>Username</label>
          <input type="text" name="username" required="" />
        </div>
        <div>
          <label>Email</label>
         <input type="text" name="email" required=""/>
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>Password</label>
         <input type="password" name="password" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
  </body>
</html>