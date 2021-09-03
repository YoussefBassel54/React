<?php
if (isset($_POST['username']) && isset($_POST['password'])){


	require "config.php";
	$username = $_POST['username'];
	$password = $_POST['password'];
	$hashedpassword = md5($password);
	$sql = "SELECT * FROM customers WHERE username = '$username' AND password = '$hashedpassword'";
	$result = mysqli_query($mysqli , $sql);
	$check = mysqli_fetch_array($result);
	if (isset($check)){
			session_start();
			$_SESSION['username'] = $username;
			echo '<script>alert("login success");</script>';
			echo '<script>window.location = "home.html"</script>';
		}
		else{
			echo '<script>alert("login failed");</script>';
		}

}

?>