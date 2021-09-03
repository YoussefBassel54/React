<?php
session_start();
if (isset($_GET['title']) && isset($_GET['quantity']) & isset($_GET['total']) && isset($_SESSION['username'])){

	$title = $_GET['title'];
	$titlearr = explode("," , $title);

	$quantity = $_GET['quantity'];
	$quantityarr = explode("," , $quantity);


	$total_price = $_GET['total'];

	$items = "";

	for ($i=0; $i < count($titlearr); $i++){

		$items .= $titlearr[$i] . "(" . $quantityarr[$i] . ")" ."\n";

	}
	$_SESSION['items'] = $items;
	$_SESSION['total_price'] = $total_price;

	echo '<script>window.location = "checkout.html"</script>';
	

}
else{
	echo '<script>window.location = "login.html";</script>';

}
?>