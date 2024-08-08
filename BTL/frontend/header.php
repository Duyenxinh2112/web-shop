<?php
require 'connect.php';
if (isset($_REQUEST['ok'])) 
{
	$search = addslashes($_POST['search']);
	$query = "select * from `product` where `name` like '%$search%'";
	$sql = mysql_query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
    <body>
            <div id = "header">
            <ul id="nav">
                <li><a href=""><i class ="ti-angle-double-down"></i>
                <ul class="subnav">
                    <li><a href="#selling">Bán chạy</a></li>
                    <li><a href="#favourite">Yêu thích</a></li>
                    <li><a href="./thanhVien.php">Thông tin thành viên</a></li>
                </ul>
                </a>
            </li>
                <li><a href="./banHang.php">Trang chủ</a></li>
                <li><a href="./nam.php">Nam</a></li>
                <li><a href="./nu.php">Nữ</a></li>
                <li><a href="./tre.php">Trẻ em</a></li>
            </ul>
        

            <a href="./banHang.php" class = "logo">
                <img src="./asset/img/logo/logoHeader.png" alt="">
            </a>

        <div class= "search-btn">
            <i class="search-icon ti-search"></i>
			<form action="index.php?page=search" method = "POST">
            <input type="text" placeholder="Tìm kiếm" name = "search">
			<input class = "btn-search" type="submit" name="timkiem" value="Tìm">
			</form>
        </div>

        <div class="cart-btn">
            <button class="btn js-cart">
            <a href="./cart.php" class="cart"><i class="ti-shopping-cart"></i></a>
        </button>
        </div>
        <div class="login-btn" >
            <a href="./dangnhap.php"><button class = "btn js-login"><i class="ti-user"></i></button></a>
        </div>
    </div>

    
    </body>

</html>

