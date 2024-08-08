<?php
require 'connect.php';
$sql = "SELECT * FROM `customer`";
$result = mysqli_query($conn, $sql);

if(!$result){
	die.('Lỗi'. mysqli_error($conn));
}else{
	echo("Đã xóa/sửa thành công"); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style1.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
    <body>
        <div id="main-fix">
            <div id="header-admin">
                <div class="nav">
                    <a href = "./homeAdmin.php" class="logo">
                    <img src="./asset/img/logo/logo1.png" alt="">
                </a>
                <div class= "search-btn">
                    <i class="search-icon ti-search"></i>
                    <input type="text" placeholder="Tìm kiếm">
                </div>
                <div class="login-btn" >
                    <button class = "btn js-login"><i class="ti-user"></i></button>
                </div>
                </div>
            </div>
            <div id="content-change">
                <div class="menu-left">
                    <a href="./homeAdmin.php">
                    <div class="dashboard">
                        <i class="ti-home">
                        </i>
                        Trang chủ
                    </div>
                </a>
                    <a href="./khachHang.php">
					<div class="category">
                        <i class="ti-layout-grid2">
                        </i>
                        Đơn hàng
                    </div></a>
                    <a href="./sanPham.php">
                    <div class="product-admin">
                        <i class="ti-clipboard"></i>
                        Sản phẩm
                    </div>
                </a>
                    <a href="./login_admin.php">
                    <div class="logout">
                        <i class="ti-shift-left"></i>
                            Đăng xuất
                    </div>
                </a>
                </div>
                <div class="right-fix">
            <table border="1">
                <tr>
                   <th>ID sản phẩm</th>
					<th>ID khách hàng</th>
                   <th>Tên khách hàng</th>
                   <th>Email</th>
                   <th>Số điện thoại</th>
                   <th>Địa chỉ</th>
					<th>Tình trạng</th>
                </tr>
<?php
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
?>
                <tr>
                   <td><?php echo $row['id_product']?></td>
					<td><?php echo $row['id_customer']?></td>
                   <td><?php echo $row['name']?></td>
                   <td><?php echo $row['email']?></td>
					<td><?php echo $row['numberPhone']?></td>
					<td><?php echo $row['address']?></td>
					<th>Chưa hoàn thành</th>
                </tr>
			<?php
				}
	}
				?>
             </table>
            </div>
            </div>
            </div>
    </body>
</html>