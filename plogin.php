<?php 
session_start();

include 'koneksi.php';
 
$email = $_POST['email'];
$password = $_POST['password'];
 
$result = mysqli_query($connect, "SELECT * FROM user where email='$email' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:index.html");
} else {
	echo "<script>alert('Data tidak ditemukan!');history.go(-1);</script>";
}
?>