<?php
require 'connect.php';
$id_product = $_GET['id_product'];
if(isset($_POST["save"])){
	$id_product = $_GET['id_product'];
	$name = $_POST['name'];
	$price = $_POST['price'];	
	$description = $_POST['description'];
	
	$sql = "UPDATE `product` SET `name` = '$name',`price` = '$price', `description` = '$description' 
		WHERE id_product = '$id_product' ";
if (!mysqli_query($conn, $sql)){
	die('Lỗi sql: '.mysqli_error($conn));
}
echo "Sửa thành công";

header("location: sanPham.php");
}
?>