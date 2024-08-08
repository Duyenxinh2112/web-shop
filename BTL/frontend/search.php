<?php
require 'connect.php';
if(isset($_POST['timkiem'])){
	$search = $_POST['search'];
}
$sql = "select * from `product` where `name` like '%$search%'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset = "utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Áo Nam | Shop</title>
        <link rel="stylesheet" href="./asset/css/style.css" >
       <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
   
    <body>
       <div id="main">
<!---------------------------------------------------------Header-->
        <div id="header" style="z-index: 1;">
            <!--Begin Search-->
<?php include 'header.php';?>
            <!-- End : Search-->

        </div>
<!------------------------------------------------- Content----------->
<div id="content">
            <!-- About section-->
        <div class="content-section" style="padding-top: 70px;">
                <h2 class="section-heading"> KẾT QUẢ TÌM KIẾM <?php $_POST['search']?></h2>
                <p class="section-sub-heading">Shop our men's collections of lightweight outerwear, performance clothing and accessories.</p>
                <hr class="dongke" width="100%" align="center" />
        </div>
        
        <div class="container">
            <div class="category-top row">
                <p> Trang Chủ</p> <span opacity ="0.5"> &#10140; </span>
                <p> Sản Phẩm Nam </p> <span> &#10140; </span>
                <p>Áo Nam</p><span> </span>
            </div>
        </div>
        <hr class="dongke" width="100%" align="center" /> 
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                        <li class="category-left-li "><a href="./nu.html">SẢN PHẨM NỮ <i class="nav-ti-plus ti-plus"></i></a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Áo Nữ</a></li>
                                <li><a href="">Đầm Nữ</a></li>
                                <li><a href="">Quần Nữ</a></li>
                                <li><a href="">Phụ Kiện </a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="./nam.html">SẢN PHẨM NAM <i class="nav-ti-plus ti-plus"></i></a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Áo Nam</a></li>
                                <li><a href="">Quần Nam</a></li>
                                <li><a href="">Giày và Dép</a></li>
                                <li><a href="">Phụ Kiện</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="./tre.html">SẢN PHẨM TRẺ EM <i class="nav-ti-plus ti-plus"></i></a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Áo Trẻ Em</a></li>
                                <li><a href="">Quần Trẻ Em</a></li>
                                <li><a href="">Giày và Dép</a></li>
                                <li><a href="">Phụ Kiện</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="">SẢN PHẨM THEO MÙA <i class="nav-ti-plus ti-plus"></i></a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Trang phục Casual</a></li>
                                <li><a href="">Trang phục Công sở</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="category-right">
                    <div class="top-main-pro row">
                    <div class="category-right-top-item">
                        <p>  SẢN PHẨM : QUẦN ÁO</p>
                    </div>
                    <!--
                    <div class="category-right-top-item">
                        <button class="button"> <span> Bộ lọc</span><i class="ti-angle-down"></i></button>                       
                    </div>
                    -->
<?php 
						include 'filter.php';
?>
                    
                    </div>

                    <div class="sub-main-pro row">

                        <div class="category-right-content row">
<?php
		$i = 0;
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
				if ($i == 4) {
				echo "<br/>";
				$i = 0;
							}
?>
							
                            <div class="category-right-content-item">
                                <a href="index.php?page=detail&id_product=<?php echo $row['id_product'];?>"><img src="uploadss/<?php echo $row['img']?>" > </a>
                                <a href="index.php?page=detail&id_product=<?php echo $row['id_product'];?>"><h3> <?php echo $row['name']?></h3></a>
                                <p><?php echo $row['price']?>.000đ</p>
                                <ul class="list-color">
                                    <li class ="item row">
                                        <a href="" class="color" style="background-color: #AFBFDF;"></a>
                                        <a href="" class="color" style="background-color: #FFEFD5;"></a>
                                        <a href="" class="color" style="background-color: #C5B9AB;"></a>
                                        <a href="" class="color" style="background-color: #ECE7E1;"></a>
                                    </li>
                                </ul>
                                <a href="index.php?page=datHang&id_product=<?php echo $row['id_product'];?>"><button class="btn js-buy-shopping cket" > MUA NGAY</button></a>
                            </div>
												<?php
					$i++;
				}
	}else{
			 ?>
						<h3 style="padding: 100px 332px;">Không tìm thấy sản phẩm</h3>
			<?php
		}
				?>

 
   

                    </div> 

                    

                    <div class="category-right-bottom row">
                        <ul class="list-inline-pagination row">
                            <li id="products_active_ts"><a href="">&#171</a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>

                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li id="products_active_ts"><a href="">&#187</a></li>
                            <li><a href="">Trang cuối </a></li>
                        </ul>
                    </div>
                </div>
                
                                 
                </div>




                

            </div>                                    
        </div>
                
 </div> 

<!--------------------------------------------------------------------Footer-->
<div id="footer">
            <?php include 'footer.php';?>
</div>
   </div>
</div>


        
       
    </body>
</html>