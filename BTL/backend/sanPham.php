<?php
require 'connect.php';
$sql = "SELECT * FROM `product`";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
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
		<style>
			#content-change td {
    padding: 10px 55px;
    text-align: center;
}
		</style>
    </head>
    <body>
        <div id="main-fix">
            <div id="header-admin">
                <div class="nav">
                    <div class="logo">
                    <img src="./asset/img/logo/logo1.png" alt="">
                </div>
                <div class= "search-btn">
                    <i class="search-icon ti-search"></i>
                    <form action="index.php?page=search" method = "POST">
            			<input type="text" placeholder="Tìm kiếm" name = "search">
						<input class = "btn-search" type="submit" name="timkiem" value="Tìm">
					</form>
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
                    </div>
                    <a href="./banHang.php">
                    <div class="product-admin">
                        <i class="ti-clipboard"></i>
                        Sản phẩm
                    </div>
                </a>
                    <a href="./loginAdmin.php">
                    <div class="logout">
                        <i class="ti-shift-left"></i>
                            Đăng xuất
                    </div>
                </a>
                </div>
                <div class="right-fix">
            <table border="1">
                <tr>
                   <th>ID</th>
                   <th>Tên sản phẩm</th>
                   <th>Giá</th>
				
				<th>Size</th>
                 <th>Chọn</th>
					<th>Chọn</th>
					
                </tr>
		<?php
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
?>
				<tr>
                   <td><?php echo $row['id_product']?></td>
                   <td><?php echo $row['name']?></td>
                   <td><?php echo $row['price']?>.000đ</td>
					<
					<td><?php echo $row['size']?></td>
                   <td><a href="index.php?page=xoa&id_product=<?php echo $row['id_product'];?>" onclick = "return confirm ('Bạn có thực sự muốn xóa? ')">Xóa</a></td>
					<td><a href="index.php?page=sua&id_product=<?php echo $row['id_product'];?>" onclick = "return confirm ('Bạn có thực sự muốn sửa? ')"><i class="ti-pencil-alt">Sửa</i></a></td>
                </tr>
				
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