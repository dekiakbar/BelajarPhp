<?php 
$un = array("A","B","C","D","E");
$ps = array("password1","password2","password3","password4","password5");

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];
 
$_SESSION['user']=$user;
$_SESSION['pass']=$pass;

for ($i=0; $i < 5; $i++) { 
	if ($user==$un[$i] && $pass==$ps[$i]) {
		include 'bner.php';
	}else if ($user!=$un[$i] && $pass==$ps[$i]) {
		echo "<p>Maaf username tidak terdaftar</p>";
	}else if ($user['user']==$un[$i] && $pass!=$ps[$i]) {
		echo "<p>Maaf password yang anda masukan salah</p>";
	}
}
	
 ?>