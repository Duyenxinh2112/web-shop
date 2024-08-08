<?php
require 'connect.php';
if(isset($_GET["action"]) && $_GET["action"] == "delete"){
    $productName = $_GET["name"];
    $deleteQuery = "DELETE FROM `product_second` WHERE name = '$productName'";
    mysqli_query($conn, $deleteQuery);}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
    <body>
        <div id="main">
            <div id = "header">
             <?php include 'header.php';?>
    </div>

    <div class="cart-container">
        <div class="cart-body-container">
        <form action="/cart" class = "cart-body-content-items">
            <div class="cart-title">
                GIỎ HÀNG CỦA BẠN
        </div>
<?php
            $query = "SELECT * FROM `product_second` ORDER BY id_product ASC";
            $result = mysqli_query($conn, $query);
            $total = 0;
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
?>

        <div class="cart-items-list">
            <div class="cart-item"> 
            <div class="cart-item img">
                <img src="uploadss/<?php echo $row['img']?>" >
            </div>
            <div class="cart-item-info">
                <div class="cart-item-info-title">
                    <a href="" title="Váy công sở"><?php echo $row['name']?></a>
                    <div class = "code"><?php echo $row['id_product']?></div>
                </div>


                <div class="cart-item-info-var">
                    <div class="cart-list-color">
                        <ul class="list-color">
                            <li class ="item row">
                                     <a href="" class="color" style="background-color: #AFBFDF;"></a>
                                    <a href="" class="color" style="background-color: #FFEFD5;"></a>
                                  <a href="" class="color" style="background-color: #C5B9AB;"></a>
                                 <a href="" class="color" style="background-color: #ECE7E1;"></a>
                           </li>
                           </ul>
                    </div>
                </div>
                <div class="cart-item-price"><?php echo $row['price']?>.000đ</div>

                
            </div>
            <div class="cart-item-info-quantity">
                <a class = "item-fix" href="cart.php?action=delete&name=<?php echo $row["name"];?>"><span>Xóa</span></a>

                <div class="cart-item-quantity-number">
                    <input type="text" min = "1" value = "<?php echo $row["quantity"];?>">
                </div>
            </div>
        </div>

    </div>
	<?php
							$total = $total + ($row["quantity"]*$row["price"]);
				}
	}
				?>
    </div>
        </form>

        <div class="cart-body-checkout">
            <div class="cart-body-checkout-title">
                <h3>TÓM TẮT ĐƠN HÀNG</h3>
            </div>
            <div class="boxSelect">
                <div class="cart-promotion">
                    Chọn ưu đãi <i class="ti-angle-down"></i>
                </div>
            </div>

            <div class="boxRightCart">
                <div class="title-info-cart">
                    TÓM TẮT ĐƠN HÀNG
                </div>

                <div class="cart-price price">
                    <div class="price-item">
                        Giá trị sản phẩm:
                    </div>
    
                    <div class="price-items var">
                        <?php echo number_format($total, 3);?>
                    </div>
                </div>

                <div class="delivery price">
                    <div class="delivery-price-title">
                        Phí vận chuyển:
                    </div>
                    <div class="delivery-price var">
                        Miễn phí
                    </div>
                </div>
                <div class="sum-cart price">
                    <div class = "sum-price-title">Tổng giá trị:</div>
                    <div class="sum-price var"><?php echo number_format($total, 3);?></div>
                </div>
 <?php
            $query = "SELECT * FROM `product_second` ORDER BY id_product ASC";
            $result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
            if(mysqli_num_rows($result)>0){              
?>
                <a href="index.php?page=datHang&id_product=<?php echo $row['id_product'];?>"><button class ="btn cart-order">
                    ĐẶT HÀNG
                </button></a>
	<?php
							
				}
				?>
                <a href="./banHang.php"><button class = "btn cart-add">MUA THÊM SẢN PHẨM 
                </button></a>

                <p>* Chi tiêu tích lũy được ghi nhận vào tài khoản của bạn khi đơn hàng thành công. Vui lòng đăng nhập để được tích lũy.</p>
            </div>
        </div>

    </div>
    </div>
    </body>
</html>