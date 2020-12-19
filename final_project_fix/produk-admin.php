<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>productInfo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css"href="css/style.css">
    <link href="css/styleproduct.css" rel="stylesheet" type="text/css"> 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"> 
  </head>

  <body>
  <?php 
		session_start();
		// cek apakah yang mengakses halaman ini sudah login
		if($_SESSION['role_user']==""){
			header("location:login.php?pesan=belum_login");
    }
    elseif($_SESSION['role_user']=="user"){
			header("location:produk.php");
    }
	?>
    <div id="wrapper">
      <header style="background-color:rgb(105,105,105);" class="main-header container_p">
        <div class="logo">
            <img src="img/logo.png" alt="Halycon">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="produk-admin.php">PRODUCT</a></li>
                <li><a href="#">CONTACT</a></li>
                <?php if ($_SESSION['role_user']=='admin'): ?>
                  <li><a href="php/logout.php">LOGOUT</a></li>
                <?php endif ?>
            </ul>
        </nav>
      </header>
      <!--conten-->
      <div id="content">
        <section class="sidebar">
          <input type="text"  id="search" value="search">
            <div id="menubar">
              <nav class="menu">
                <hr>
                <ul>
                  <li><a href="#" title="Link">T-Shirt</a></li>
                  <li><a href="#" title="Link">Long Sleeve</span></a></li>
                  <li><a href="#" title="Link">Hoodie</a></li>
                  <li><center><a href="php/tambah_produk.php">+ &nbsp; Tambah Produk</a><center></li>
                </ul>
              </nav>
            </div>
        </section>

        <!--main conten-->
        <section class="mainContent">
          <div class="productRow">
            <div class="container">
              <div class="row">
                <?php
                    // jalankan query untuk menampilkan semua data 
                    $query = "SELECT * FROM produk ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);
                    //mengecek apakah ada error ketika menjalankan query
                    if(!$result){
                      die ("Query Error: ".mysqli_errno($koneksi).
                        " - ".mysqli_error($koneksi));}
                      //buat perulangan untuk element tabel dari data mahasiswa
                      $no = 1; //variabel untuk membuat nomor urut
                      // hasil query akan disimpan dalam variabel $data dalam bentuk array
                      // kemudian dicetak dengan perulangan while
                      while($row = mysqli_fetch_assoc($result)){
                ?>
                  <div class="col-sm-4">
                    <ul>
                      <li><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></li>
                      <li><?php echo $row['nama_produk']; ?></li>
                      <li>harga IDR <?php echo $row['harga_jual']; ?></li>
                      <a href="php/edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
                      <a href="php/proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                    </ul>
                  </div>
                <?php
                    $no++; } //untuk nomor urut terus bertambah 1
                ?>
              </div>
            </div>
          </div>
        </section>
        <!--main conten-->
      </div>
      <!--end conten-->
     <!-- footer -->
     <footer>
      <div class="container">
        <div class="box">
          <h1>socialmedia</h1>
        </div>
        <div class="row">
          <div class="col-sm 3">
            <div class="logo-custom">
              <a href="https://www.facebook.com/halcyoncompany"target="_blank"><img src="img/facebook.png"> Halcyon Company</a>					
            </div>
          </div>
          <div class="col-sm 3">
            <div class="logo-custom">
              <a href="https://www.instagram.com/halcyon_company/"target="_blank"><img src="img/instagram.png"">halcyon_company</a>	
            </div>				
          </div>
          <div class="col-sm 3">
            <div class="logo-custom">
             <a href="https://api.whatsapp.com/send?phone=6282145258750"target="_blank"><img src="img/whatsapp.png">+6282145258570</a>
            </div>					
          </div>
        </div>
      </div>
    </footer>
    <!--end footer-->
  </body>
</html>