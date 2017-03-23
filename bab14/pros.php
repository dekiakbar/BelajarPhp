<?php 
$un = array("A","B","C","D","E");
$ps = array("password1","password2","password3","password4","password5");

$user = $_POST['user'];
$pass = $_POST['pass'];
 
setcookie("user",$user,time()+3600);
setcookie("pass",$pass,time()+3600);

for ($i=0; $i < 5; $i++){ 
	if ($_COOKIE['user']==$un[$i] && $_COOKIE['pass']==$ps[$i]) {
		include 'bner.php';
	}else if ($_COOKIE['user']!=$un[$i] && $_COOKIE['pass']==$ps[$i]) {
		echo "<p>Maaf username tidak terdaftar</p>";
	}else if ($_COOKIE['user']==$un[$i] && $_COOKIE['pass']!=$ps[$i]) {
		echo "<p>Maaf password yang anda masukan salah</p>";
	}
}
	
 ?>