<?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['role_user']==""){
        header("location:../login.php?pesan=belum_login");
    }
    else {
        header("location: https://api.whatsapp.com/send?phone=6282145258570&text=Halo,%20saya%20ingin%20melakukan%20pemesanan");
    }
?>