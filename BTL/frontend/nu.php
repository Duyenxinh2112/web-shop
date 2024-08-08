<?php
 require 'connect.php';
$sql = "SELECT * FROM `product` where `id_product` like 'nu%'";
$result = mysqli_query($conn, $sql);
if(isset($_FILES['img'])){
	$target_dir = "uploadss/";
	$target_file   = $target_dir . basename($_FILES["img"]["name"]);	
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	"img : ".$target_file."<br>" ;
}
?>

<!DOCTYPE html>
<html>
    <head> 
        <meta charset = "utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Áo Nữ | Shop</title>
        <link rel="stylesheet" href="./asset/css/style.css" >
       <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
   
    <body>
        <script src="./js/script.js"> </script>
       <div id="main">
<!---------------------------------------------------------Header-->
<div id = "header" style="z-index: 1;">
            <?php include 'header.php';?>
</div>
<!------------------------------------------------- Content----------->
<div id="content">
    
            <!-- About section-->
        <div class="content-section">
                <h2 class="section-heading title"> THE WOMAN</h2>
                <p class="section-sub-heading">Shop our woman's collections of lightweight outerwear, performance clothing and accessories.</p>
                <hr class="dongke" width="100%" align="center" />
        </div>
        
        <div class="container">
            <div class="category-top row">
                <p> Trang Chủ</p> <span opacity ="0.5"> &#10140; </span>
                <p> Sản Phẩm Nữ </p> <span> &#10140; </span>
                <p>Áo Nữ</p><span> </span>
            </div>
        </div>
        <hr class="dongke" width="100%" align="center" /> 
        <div class="container">
            <div class="row">
                <div class="category-left">
                    <ul>
                        <li class="category-left-li">
                        <a href="./nu.html">SẢN PHẨM NỮ 

                            <button class="nav-ti-plus">
                            <i class="ti-plus"></i></button>
                        </a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Áo Nữ</a></li>
                                <li><a href="">Đầm Nữ</a></li>
                                <li><a href="">Quần Nữ</a></li>
                                <li><a href="">Phụ Kiện </a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="./nam.php">SẢN PHẨM NAM <i class="nav-ti-plus ti-plus"></i></a>
                            <ul class="subnav1">
                                <li><a href="">Xem tất cả</a></li>
                                <li><a href="">Áo Nam</a></li>
                                <li><a href="">Quần Nam</a></li>
                                <li><a href="">Giày và Dép</a></li>
                                <li><a href="">Phụ Kiện</a></li>
                            </ul>
                        </li>
                        <li class="category-left-li"><a href="./tre.php">SẢN PHẨM TRẺ EM <i class="nav-ti-plus ti-plus"></i></a>
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
                        <p> QUẦN ÁO NỮ : ÁO NỮ</p>
                    </div>
<?php 
						include 'filter.php';
?>
                    
        <script>
        const itemsliderbar = document.querySelectorAll(".category-left-li")
        const menu = document.querySelector(".category-left")
        itemsliderbar.forEach(function(menu,indexnu){
        menu.addEventListener("click",function(){
        menu.classList.toggle("block")
        })
        })                   
         </script>
                    
                    <!-- End Bộ Lọc   --------------------------------> 
                    
                    </div>
                    <div class="sub-main-pro row">
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
                                <a href="index.php?page=datHang1&id_product=<?php echo $row['id_product'];?>"><button class="btn js-buy-shopping cket" > MUA NGAY</button></a>
                            </div>
												<?php
					$i++;
				}
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