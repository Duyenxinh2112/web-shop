<?php
require 'connect.php';
if(isset($_POST["submit"])) {
//Kết nối
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl";
$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("connect to this database failed due to" . mysqli_connect_error());
}
	
//Thêm sản phẩm
$product = mysqli_query($con, "SELECT * FROM product") ; 
if(isset($_POST["name"])){
$id_product = $_POST['id_product'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
 


if(isset($_FILES['img'])){
	$file = $_FILES['img'] ; 
	$file_name = $file['name'];
	move_uploaded_file($file["tmp_name"],"uploadss/".$file_name) ;
}
if(isset($_FILES['img1'])){
	$file = $_FILES['img1'] ; 
	$file_name1 = $file['name'];
	move_uploaded_file($file["tmp_name"],"uploadss/".$file_name1) ;
}
if(isset($_FILES['img2'])){
	$file = $_FILES['img2'] ; 
	$file_name2 = $file['name'];
	move_uploaded_file($file["tmp_name"],"uploadss/".$file_name2) ;
}
if(isset($_FILES['img3'])){
	$file = $_FILES['img3'] ; 
	$file_name3 = $file['name'];
	move_uploaded_file($file["tmp_name"],"uploadss/".$file_name3) ;
}
if(isset($_POST['submit'])){
	$size = $_POST['size'] ;
}
$sql = "INSERT INTO product (`id_product`, `name`, `price` ,`img`,`img1`,`img2`,`img3`,`description`,`size`) 
	VALUES ('$id_product' , '$name', '$price', '$file_name', '$file_name1', '$file_name2', '$file_name3','$description','$size' )";
}
$query = mysqli_query($conn , $sql); 

if($query){
 	header('location:') ;
}else {
	echo "Lỗi"; 
}

$con->close();
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | Thêm Sản Phẩm</title>
    <link rel="stylesheet" href="./asset/css/style1.css">
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
</head>

<body>
    <script src="../js/script.js"> </script>
    <!---------------------------------------------------------Header-->

    <!------------------------------------------------- Content----------->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <img src="asset/img/logo/logo1.png" alt="">
                    <p>Chào : Ánh Nguyễn</p>
                    <ul>
                        <li class="category-left-li">
                            <a href="./homeAdmin.php">
                                <button class="nav-ti-plus">
                                    <i class="ti-layout"></i></button>
                                TRANG CHỦ
                            </a>
                            <ul class="subnav1">
                                <li><a href="./addProduct.php">Thêm Sản Phẩm</a></li>
                                <li><a href="./sanPham.php">Xóa Sản Phẩm</a></li>
                                <li><a href="./sanPham.php">Sửa Sản Phẩm</a></li>
                            </ul>
                        </li>
                        
                        <li class="category-left-li">
                            <a href="./khachHang.php"> <i class="nav-ti-plus ti-menu-alt"></i>
                                ĐƠN HÀNG
                            </a>
                            
                        </li>
                        <li class="category-left-li">
                            <a href="./loginAdmin.php"> <i class="nav-ti-plus ti-power-off"></i>
                                ĐĂNG XUẤT
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="category-right">
                    <h1><i class="ti-arrow-circle-right"></i>Thêm Sản Phẩm</h1>
					<form action="" method="post" name="myForm" enctype="multipart/form-data">
                    <div class="category-right-product-add">
					
                        <div class="category-product-left">
                            <h3>Mô tả</h3>
                            <div class="modal"><br>
								<label for="">Nhập mã sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" required name ="id_product" id="id_product">
                                <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" name = "name" id = "name">                  
                                <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                           
                        </div>

                        <div class="category-product-right">                          
                            <div class="category-product-right-p1">
                                <h3>Giá cả</h3>
                            <div class="modal">
                                <br>
                                <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" name="price" id="price">
                                
                            </div>
                            <h3>Hình ảnh</h3>
                            <div class="modal">
                                <br>
                                <p>
                                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                                    <input type="file" name="img" id="img">
                                    
                                </p>
								<p>
                                    <label for="">Ảnh sản phẩm chi tiết 1<span style="color: red;">*</span></label>
                                    <input type="file" name="img1" id="img1">
                                    
                                </p>
								<p>
                                    <label for="">Ảnh sản phẩm chi tiết 2<span style="color: red;">*</span></label>
                                    <input type="file" name="img2" id="img2">
                                    
                                </p>
								<p>
                                    <label for="">Ảnh sản phẩm chi tiết 3<span style="color: red;">*</span></label>
                                    <input type="file" name="img3" id="img3">
                                    
                                </p>
                            </div>
                            </div>
							<h3>Size</h3>
                            <div class="modal">
                            <div class="product-size"><br>
                                <p style="font-weight: bold">Size:</p>
                                <div class="sizes">
                                    <input type="checkbox" class="size" name="size" value="S">S</span>
                                    <input type="checkbox" class="size"  name="size" value="M">M</span>
                                    <input type="checkbox" class="size"  name="size" value="L">L</span>
                                    <input type="checkbox" class="size"  name="size" value="XL">XL</span>
                                    <input type="checkbox" class="size"  name="size" value="XXL">XXL</span>
                                </div>
                            </div>
                            </div>

                            <button type="submit" name ="submit" id="button">Thêm Sản Phẩm</button>
                            <button type="submit">Hủy Sản Phẩm</button>

                        </div>
							
                    </div>
					
					</form>
                </div>
            </div>
        </div>
    </div>
<script>
        const btn =document.getElementById("button");

        btn.addEventListener('click', Checked);
        function Checked(){
			if (document.myForm.id_product.value == ""){
				alert(`Chưa điền trường mã sản phẩm`);
                document.myForm.id_product.focus();
                return false;			
			}else if(document.myForm.name.value == ""){
                alert("Chưa điền trường Họ tên");
                document.myForm.name.focus();
                return false;
            } else if(document.myForm.price.value == "") {
                alert("Chưa điền trường giá cả");
                document.myForm.price.focus();
                return false; 
			} else if(document.myForm.img.value == "") {
                alert("Chưa điền trường Hình ảnh");
                document.myForm.img.focus();
                return false;
            }else{
                document.myForm.submit();
                return true;
            }
				}

    </script>


    <!--------------------------------------------------------------------Footer-->

</body>

</html>