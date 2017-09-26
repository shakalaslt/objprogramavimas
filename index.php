<?php
include "database.php";
$db = new database();
$products = $db->select_array("SELECT*FROM products");



foreach ($products as $product) {

	echo $product ["name"] . "<br>";
	# code...
}
?>