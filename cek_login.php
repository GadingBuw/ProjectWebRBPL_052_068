<?php
session_start();
$query=new mysqli('localhost', 'root', '', 'durian_go');
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($query,"select * from login where username='$username' and password='$password'")or die
(mysqli_error($query));

$cek = mysqli_num_rows($login);
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="admin"){
 
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:homesessionadmin.php");

	}else if($data['level']=="user"){

		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:homesession.php");
 	
}else if($data['level']=="superadmin"){

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:homesessionsuperadmin.php");
 
}else{
	header("location:login.php?pesan=gagal");
}

}else{
	header("location:login.php?pesan=gagal");
}

?>
