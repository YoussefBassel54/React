<?php

session_start();
if (isset($_POST['name']) && isset($_POST['address']) && isset($_POST['credit']) && isset($_SESSION['items']) && isset($_SESSION['total_price'])){
		$n = 10;
		$characters = '0123456789'; 
   		$id = ''; 
  
 		for ($i = 0; $i < $n; $i++) { 
        	$index = rand(0, strlen($characters) - 1); 
        	$id .= $characters[$index]; 
    	}

    	$name = $_POST['name'];
    	$credit = $_POST['credit'];
    	$address = $_POST['address'];
    	$items = $_SESSION['items'];
    	$total_price = $_SESSION['total_price'];

    	require "config.php";

    	$sql = "INSERT INTO orders (id , name , items , address , total_price) VALUES ('$id' , '$name' , '$items' , '$address' , '$total_price')";

    	if (mysqli_query($mysqli , $sql)){
    		echo '<script>alert("Your order has been placed");</script>';
    	}
    	else{
    		echo '<script>alert("Your order has not been placed");</script>';
    	}

}

?>