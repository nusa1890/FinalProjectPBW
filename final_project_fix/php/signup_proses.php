<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
    $nama   = $_POST['nama'];
    $username   = $_POST['username'];
    $email    = $_POST['email'];
    $alamat    = $_POST['alamat'];
    $password = $_POST['password'];
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query = "INSERT INTO data_user (nama_user, alamat, email) VALUES ('$nama', '$alamat', '$email')";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
        " - ".mysqli_error($koneksi));
    } 
    else {
        $query1 = "INSERT INTO users (nama_user, password_user) VALUES ('$username', '$password')";
        $result = mysqli_query($koneksi, $query1);
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
            " - ".mysqli_error($koneksi));
        }else {
            echo "<script>alert('Data berhasil ditambah.');window.location='../produk-admin.php';</script>";
        }
    }