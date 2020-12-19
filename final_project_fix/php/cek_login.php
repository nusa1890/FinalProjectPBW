<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['nama'];
$password = $_POST['pw'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from users where nama_user='$username' and password_user='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role_user']=="admin"){
 
		// buat session login dan username
		$_SESSION['nama_user'] = $username;
		$_SESSION['role_user'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../index_admin.html");
 
	// cek jika user login sebagai user
	}else if($data['role_user']=="user"){
		// buat session login dan username
		$_SESSION['nama_user'] = $username;
		$_SESSION['role_user'] = "user";
		// alihkan ke halaman dashboard user
		header("location:../index_user.html");
 
	}else{
		// alihkan ke halaman login kembali
		header("location:../login.php?pesan=gagal");
	}	
}else{
	header("location:../login.php?pesan=gagal");
}
?>