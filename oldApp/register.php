<?php
	if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		require "config.php";
		$sql = "SELECT * FROM customers WHERE username = '$username'";
		$resultUserName = mysqli_query($mysqli , $sql);
		if (mysqli_num_rows($resultUserName) > 0){
			echo '<script>alert("Username is already taken")</script>';
		}
		else{
			$sql = "SELECT * FROM customers WHERE email = '$email'";
			$resultEmail = mysqli_query($mysqli , $sql);
			if (mysqli_num_rows($resultEmail) > 0){
				echo '<script>alert("Email is already taken")</script>';
			}
			else{
				$hashedpassword = md5($password);
				$sql = "INSERT INTO customers (username , email , password) VALUES ('$username' , '$email' , '$hashedpassword')";
			if (mysqli_query($mysqli , $sql)){
				echo '<script>alert("You have registered successfully");</script>';
				echo '<script>window.location = "login.html"</script>';
			}
			else{
				echo '<script>alert("failed");</script>';
			}
			}

		}
		
		
	}
?>