<?php 
$un = array("A","B","C","D","E");
$ps = array("password1","password2","password3","password4","password5");

for ($i=0; $i < 5; $i++) { 
	if ($_COOKIE['user']==$un[$i] && $_COOKIE['pass']==$ps[$i]) {
		include 'header.php';
		echo "
			<style>
				div{width: 100%;height:300px;border:solid 1px}
				a {margin: 15px 70px 15px 70px;padding: 10px;text-decoration: none;color:cyan;text-align:center;font-size:20px;}

			</style>
			<div class='ganteng'>
				<h2>Selamat anda berhasil login</h2>
				<a href='link1.php'>link 1</a>
				<a href='link2.php'>link 2</a>
				<a href='link3.php'>link 3</a>
				<a href='logout.php'>Logout</a>
				<h3>Ini adalah link 2</h3>
				</div>
				";
		include 'footer.php';
	}else if ($_COOKIE['user']!=$un[$i] && $_COOKIE['pass']==$ps[$i]) {
		echo "<p>Maaf username tidak terdaftar</p>";
	}else if ($_COOKIE['user']==$un[$i] && $_COOKIE['pass']!=$ps[$i]) {
		echo "<p>Maaf password yang anda masukan salah</p>";
	}
}
 

 ?>