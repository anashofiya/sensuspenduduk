<?php 
include 'koneksisensus.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysql_query("select * from admin where username='$username' and password='$password'");
$cek = mysql_num_rows($query);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = 'login';
	header("location:halamandepan.php");
}else{
	header("location:halamandepan.php");
}
?>