<?php
require 'connect.php';
$id_product = $_GET['id_product'];
if(isset($_POST["save"])){
	$id_product = $_GET['id_product'];
	$name = $_POST['name'];
	$price = $_POST['price'];	
	$description = $_POST['description'];
	if(isset($_POST['save'])){
	$size = $_POST['size'] ;
	}
	$sql = "UPDATE `product` SET `name` = '$name',`price` = '$price', `description` = '$description', `size`='$size' WHERE id_product = '$id_product' ";
if (!mysqli_query($conn, $sql)){
	die('Lỗi sql: '.mysqli_error($conn));
}
echo "Sửa thành công";

header("location: sanPham.php");
}
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin | Sửa Sản Phẩm</title>
    <link rel="stylesheet" href="./asset/css/style1.css">
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
</head>

<body>
   
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
                            <a href=""> <i class="nav-ti-plus ti-menu-alt"></i>
                                DANH MỤC
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
                    <h1><i class="ti-arrow-circle-right"></i>Sửa Sản Phẩm</h1>
					<?php
		$sql = "SELECT * FROM `product` where `id_product` = '$id_product'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
						?>
		<form action="" method="post" name="myForm" enctype="multipart/form-data">
					
                    <div class="category-right-product-add">
					
                        <div class="category-product-left">
                            <h3>Mô tả</h3>
                            <div class="modal"><br>
		
								
								<label for="">Nhập mã sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" required name ="id_product" id="id_product" 
									   value ="<?php echo $row['id_product']?>">
                                <label for="">Nhập tên sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" name = "name" id = "name" 
									   value ="<?php echo $row['name']?>">                  
                                <label for="">Mô tả sản phẩm<span style="color: red;">*</span></label>
                                <input name="description" id="description" cols="30" rows="10"
										  value ="<?php echo $row['description']?>"></textarea>					
                            </div>
                           
                        </div>

                        <div class="category-product-right">                          
                            <div class="category-product-right-p1">
                                <h3>Giá cả</h3>
                            <div class="modal">
                                <br>
                                <label for="">Giá sản phẩm<span style="color: red;">*</span></label>
                                <input type="text" name="price" id="price" value = "<?php echo $row['price']?>">
                                
                            </div>
                            <h3>Hình ảnh</h3>
                            <div class="modal">
                                <br>
                                <p>
                                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span></label>
                                    <input type="file" name="img" id="img">
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
				
			
							<button  type="submit" name="save" value="">Lưu sản phẩm</button>
                            <button type="submit">Hủy Sản Phẩm</button>
                        </div>
							
                    </div>
					</form>
					
		<?php
		  }
		}
?>
                </div>
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