<?php
require 'connect.php';
$id_product = $_GET['id_product'];
$sql = "DELETE FROM `product` WHERE `id_product` = '$id_product'";
if (!mysqli_query($conn, $sql)){
	die('Lỗi sql: '.mysqli_error($conn));
}
echo "Xóa thành công";

header("location: sanPham.php");

?>