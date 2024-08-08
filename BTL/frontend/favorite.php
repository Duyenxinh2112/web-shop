<?php
require 'connect.php';
$sql = "SELECT * FROM `product` WHERE `id_product` like 'yt%'";
$result = mysqli_query($conn, $sql);
if(isset($_FILES['img'])){
	$target_dir = "uploadss/";
	$target_file   = $target_dir . basename($_FILES["img"]["name"]);	
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	"img : ".$target_file."<br>" ;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	        <h2 class="section-heading">CÓ THỂ BẠN SẼ THÍCH</h2>
        <div class="product-content row">
            <div class="category-right-content row">
 <?php
		if(mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
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
				}
	}
				?>
			</div>
    </div>
</body>
</html>