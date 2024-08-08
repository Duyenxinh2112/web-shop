<?php
 require 'connect.php';
$id_product = $_GET['id_product'];
$sql = "SELECT * FROM `product` WHERE `id_product` = '$id_product'";
$result = mysqli_query($conn, $sql);

if(isset($_POST["add"])){
    if(isset($_SESSION["shopping_cart"])){
        $item_array_id = array_column($_SESSION["shopping_cart"],"product_id");
        if(!in_array($_GET["id_product"],$item_array_id)){
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'product_id' => $_GET["id_product"],
                 'product_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'product_quantity' => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
            echo '<script>window.location="detail.php"</script>';
        }else{
            echo '<script>alert("Product is already in  the cart")</script>';
        }
    }else{
        $item_array = array(
            'product_id' => $_GET["id_product"],
            'product_name' => $_POST["hidden_name"],
			'product_image' => $_POST["hidden_image"],
             'product_price' => $_POST["hidden_price"],
            'product_quantity' => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
    if(isset($_GET["redirect"]) && $_GET["redirect"] == "cart") {
        header("Location: cart.php");
        exit();
    }
}

if(isset($_GET["action"])){
	if(isset($_GET["action"]) == "add")
    $producId = $_GET["id_product"];
	$producName = $_POST["hidden_name"];
	$producImg = $_POST["hidden_image"];
	$producPrice = $_POST["hidden_price"];
	$producQuantity = $_POST["quantity"];
    $addQuery = "INSERT INTO `product_second` ( `id_product`, `name`,`img`,`price`,`quantity`) VALUES ('$producId', '$producName','$producImg' ,'$producPrice ','$producQuantity');";
    mysqli_query($conn, $addQuery);
} 
?>
<!DOCTYPE html>
<html>
    <head> 
        <meta charset = "utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Áo Nữ Chi Tiết| Shop</title>
        <link rel="stylesheet" href="./asset/css/style.css" >
       <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
		<style>
		.product-content-right-product-button	input[type="submit"] {
				
				border: 2px solid black;
				cursor: pointer;
				background-color: #FFFFFF;
				border: 1px solid #E7E8E9;
				border-radius: 20px 0px;
				width: 150px;
				height: 48px;
				font-size: 15px;
				color: #000;
				text-align: center;
				line-height: 30px;
				margin-right: 12px;
				list-style: none;
			}
		</style>
    </head>
   
    <body>
       <div id="main" style="width: 100%;">
<!---------------------------------------------------------Header-->
		<div id = "header" style="z-index: 1;">
             <?php include 'header.php';?>
		</div>
<!------------------------------------------------- Product----------->
<div id="content">
        <!-- About section-->
    <div class="content-section">
            <h2 class="section-heading title"> THE PRODUCT</h2>
            <p class="section-sub-heading">Shop our woman's collections of lightweight outerwear, performance clothing and accessories.</p>
            <hr class="dongke" width="100%" align="center" />
    </div>
    
    <div class="container">
        <div class="category-top row">
            <p> Trang Chủ</p> <span opacity ="0.5"> &#10140; </span>
            <p> Sản Phẩm  </p> <span> &#10140; </span>
			                     <?php
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
?>
            <p> <?php echo $row['name']?></p><span> </span>
        </div>
    </div>
    <hr class="dongke" width="100%" align="center" /> 
    <section class="product">
    <div class="container">
		<form action="detail.php?action=add&id_product=<?php echo $row["id_product"];?> 
					  " method="post">
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="uploadss/<?php echo $row['img']?>" > 
                </div>
                <div class="product-content-left-small-img">
					<img src="uploadss/<?php echo $row['img']?>" > 
					<img src="uploadss/<?php echo $row['img1']?>" > 
					<img src="uploadss/<?php echo $row['img2']?>" > 
					<img src="uploadss/<?php echo $row['img3']?>" > 
                </div>
            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h2> <?php echo $row['name']?></h2>
                    <p> <?php echo $row['id_product']?></p>
                </div>
                <div class="product-content-right-product-price">
					<p> <?php echo $row['price']?>.000đ</p>      
                </div>
                <hr class="dongke" width="100%" align="center" />
                <div class="product-content-right-product-color">
                    <p><span style="font-weight: bold;">Màu Sắc</span;>:Màu Be</p>
                    <ul class="list-color">
                        <li class ="item row">
                            <a href="" class="color" style="background-color: #AFBFDF;"></a>
                            <a href="" class="color" style="background-color: #FFEFD5;"></a>
                            <a href="" class="color" style="background-color: #C5B9AB;"></a>
                            <a href="" class="color" style="background-color: #ECE7E1;"></a>
                        </li>
                    </ul>
                </div>
                <div class="product-content-right-product-size">
                    <p style="font-weight: bold">Size:</p>
                    <div class="sizes">
                        <span class="size">S</span>
                        <span class="size">M</span>
                        <span class="size">L</span>
                        <span class="size">XL</span>
                        <span class="size">XXL</span>
                    </div>
                </div>
                <div class ="test-size" style="color:#373737">
                    <i class="ti-ruler-alt"></i>Kiểm tra size của bạn</div></form>	
            <hr class="dongke" width="100%" align="center" />
                <div class="product-content-right-product-quality">
                    <p style="font-weight: bold">Số lượng:</p>
                    <input type="text" id="quantity" required name="quantity"> 
					<input type="hidden" name="hidden_image" value="<?php echo $row["img"];?>">
                    <input type="hidden" name="hidden_name" id="hidden_name"value="<?php echo $row["name"];?>">
                     <input type="hidden" name="hidden_price" value="<?php echo $row["price"];?>">                   
                </div>
                
                <div class="product-content-right-product-button row">
               		 <input type="submit" name="add" value="THÊM GIỎ HÀNG">
 					 <a href="index.php?page=datHang&id_product=<?php echo $row['id_product'];?>"><button class="btn js-buy-shopping cket" > MUA NGAY</button></a>
                    
                </div>
                <div class="product-content-right-product-icon row">
                    <div class="product-content-right-product-icon-item">
                        <i class="ti-truck"></i> <p style="font-weight: bold">Giao Hàng : Giao Hàng Toàn Quốc</p>
                    </div>
                </div> 
                <hr class="dongke" width="100%" align="center" />
                <div class="product-content-right-bottom ">
                    <div class="product-content-right-bottom">  
                        <h4>MÔ TẢ</h4> 
                        <ul>
                            <li>Miêu tả: <?php echo $row['name']?></li>
                        </ul>
                        <h4>CHẤT LIỆU</h4> 
                        <ul>
                            <li>96% polyester 4% spandex</li>
                        </ul>                  
                    </div>
                </div>             
            </div>

        </div>
        <hr class="dongke" width="100%" align="center" />
        <div class="product-content row">
            
             <div class="product-content-left-detail">
                    <h3>GIỚI THIỆU:</h3>   
                    <p>  <?php echo $row['name']?>
                    </p>
                    <p class="detail">
                        Lưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện
                         ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.
                    </p>
                    <p style="font-weight: bold">Thông tin mẫu:
                        <p style="font-weight: bold">Chiều cao:167 cm</p>
                        <p style="font-weight: bold">Cân nặng: 50 kg</p>
                        <p style="font-weight: bold">Số đo 3 vòng: 83-65-93 cm</p>
                    </p> 
                    <h3>BẢO QUẢN:</h3>   
                    <p>
                        * Các sản phẩm cần được giặt ngay không ngâm tránh
                         bị loang màu, phân biệt màu và loại vải để tránh 
                         trường hợp vải phai. Không nên giặt sản phẩm với xà 
                         phòng có chất tẩy mạnh, nên giặt cùng xà phòng pha loãng.
                         Các sản phẩm có thể giặt bằng máy thì chỉ nên để chế độ giặt nhẹ, vắt mức
                         trung bình và nên phân các loại sản phẩm cùng màu và cùng loại vải khi giặt.
                    </p>     
                    
                    <p>
                        * Nên phơi sản phẩm tại chỗ thoáng mát, tránh ánh nắng trực tiếp sẽ dễ bị phai 
                        bạc màu, nên làm khô quần áo bằng cách phơi ở những điểm gió sẽ giữ màu vải tốt hơn.
                    </p>  
                    <p>
                        * Khi ủi sản phẩm bằng bàn là và sử dụng chế độ hơi nước sẽ làm cho sản phẩm dễ ủi phẳng, 
                        mát và không bị cháy, giữ màu sản phẩm được đẹp và bền lâu hơn. Nhiệt độ của bàn là tùy theo từng loại vải. 
                    </p>       
            </div>
        </div>
<?php include 'favorite.php';?>
</section>
</div>
		   												<?php
				}
	}
				?>

<!--------------------------------------------------------------------Footer-->
<div id="footer">
             <?php include 'footer.php';?>
</div>
</div>

</body>
</html>