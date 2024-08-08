<?php
require 'connect.php';
$id_product = $_GET['id_product'];
$sql = "SELECT * FROM `product` WHERE `id_product` = '$id_product'";
$result = mysqli_query($conn, $sql);
if (!mysqli_query($conn, $sql)){
	
}

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
$customer = mysqli_query($con, "SELECT * FROM customer") ; 
if(isset($_POST["name"])){	
$id_product = $_GET['id_product'];
$id_customer = $_POST['id_customer'];
$name = $_POST['name'];
$email = $_POST['email'];
$numberPhone = $_POST['numberPhone'];
$address = $_POST['address'];


$sql = "INSERT INTO customer (`id_product`, `id_customer`, `name` ,`email`,`numberPhone`,`address`) 
	VALUES ('$id_product', '$id_customer', '$name', '$email','$numberPhone','$address' )";
}
$query = mysqli_query($con , $sql); 

if($query){
 	header('location:') ;

}else {

}

$con->close();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>

    <body>
        <div id="main-info">
            
            <div class="body-delivery"> 
            <div class="delivery-info"> 
                <a href="./banHang.php">
                <img src="./asset/img/logo/logo1.png" alt="" class="logo">
                </a>
            <div class="info-cart">
                <a href="./cart.php" class="">Giỏ hàng</a>
                <i class="ti-angle-right">Thông tin đơn hàng</i>
            </div>
            <h2 class="body-info">
                THÔNG TIN GIAO HÀNG
            </h2>
       <form action="" method="post" name="myForm" enctype="multipart/form-data">
            <div class="name label">
              <input type="text" placeholder=" Họ và tên" id = "name" name="name">
            </div>
            <div class="contact">
                <ul class="text">
                    <li>
                        <div class="email label">
                            <input type="email" placeholder=" Email" id = "email" required name="email">
                          </div>
                    </li>
                    <li>
                        <div class="tel label">
                            <input type="text" placeholder=" Số điện thoại" id = "numberPhone"
								  required name="numberPhone">
                          </div>
                    </li>
                </ul>
                
            </div>
            <div class="address label">
                <input type="text" placeholder=" Địa chỉ" id = "address" required name="address">
            </div>
            <div class="section label">
            <select name="tinh" id="tinh">
                <option value="">Chọn tỉnh/thành</option>
                <option value="hn">Hà Nội</option>
                <option value="hcm">Hồ Chí Minh</option>
                <option value="dn">Đà Nẵng</option>
                <option value="qb">Quảng Bình</option>
                <option value="tb">Thái Bình</option>
                <option value="bn">Bắc Ninh</option>
                <option value="th">Thanh Hóa</option>
            </select>

            <select name="quanhuyen" id="quan">
                <option value="">Chọn quận/huyện</option>
            </select>

            <select name="phuongxa" id="phuong">
                <option value="">Chọn phường/xã</option>
            </select>
            </div>

            <div class="shipping">
                <h3>Phương thức vận chuyển</h3>
                <div class="method-pay">
                <div class="box">
                    <i class="ti-package"></i>
                    <p>Vui lòng chọn tỉnh/thành để có danh sách vận chuyển.</p>
                </div>
            </div>
        </div>

            <div class="pay">
                <h3>Phương thức thanh toán</h3>
                <div class="method-pay">
                    <div class="atm">
                         <img src="./asset/img/atm.png" alt="">
                         <p>Thanh toán online qua (ATM/Visa) </p>
                    </div>
                    
                    <div class="banking">
                        <img src="./asset/img/banking.png" alt=""> 
                        <p>
                            Thanh toán qua Internet Banking
                        </p>
                    </div>
                    <div class="nhanhang">
                         <img src="./asset/img/giaohang.png" alt="">
                         <p>Thanh toán khi giao hàng (OCD)</p>
                    </div>
                </div>
            </div>
            <div>
                <button id = "submit" name ="submit" type="submit"><p>Hoàn tất đơn hàng</p></button>
            </div>
        </div>
		</form>
        <hr class="dongke" height="100%" align="center" style="color: #fafafa;"/>
		
        <div class="sliderbar">
            <div class="sliderbar-content">
				<?php
		 $query = "SELECT * FROM `product_second` ORDER BY id_product ASC";
		 $total = 0;
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array($result)){
?>
                <table class="product-table">
                <tbody>
                    <tr class="product">
                        <td class="product-img">
                            <img src="uploadss/<?php echo $row['img']?>" > ;
                        </td>
						
                        <td class="product-des">
                            <span class="product-des-name"><?php echo $row['name']?></span>                  <span class="product-des-name">Số lượng:<?php echo $row['quantity']?></span>  
                        </td>
                        <td class="product-price">
                            <span class="order-summary"><?php echo $row['price']?>.000đ</span> 
							
                        </td>
                    </tr>                   
                </tbody>               
            </table>
						<?php
					$total = $total + ($row["quantity"]*$row["price"]);
				}
	}
				?>
            <hr class="dongke" width="90%" align="right" />
            <div class="total-body">
            <table class="total-table">
            
			<tbody>
				<tr class="total-line-table">
				<td class="total-line-name">Tạm tính</td>
				<td class="total-line-price">
				<span class="order-summary">
                    <?php echo number_format($total, 3);?>
				</span>
				</td>
				</tr>
													
													
	            <tr class="total-line-table">
			    <td class="total-line-name">Phí vận chuyển</td>
			    <td class="total-line-price">
			    <span class="order-summary">—</span>																
			    </td>
                </tr>
			</tbody>
            </table>
            </div>
            <hr class="dongke" width="90%" align="right" />
            <div class="total-body">
                <table class="total-table">
                
                <tbody>
                    <tr class="total-line-table">
                    <td class="total-line-name">Tổng cộng</td>
                    <td class="total-line-price">
                    <span class="order-summary-too">
                       <?php echo number_format($total, 3);?>
                    </span>
                    </td>
                    </tr>
                </tbody>
                </table>
            </div>            
        </div>
        </div>

        </div>

			<script>
        const btn =document.getElementById("button");

        btn.addEventListener('click', Checked);
        function Checked(){
			if (document.myForm.name.value == ""){
				alert(`Chưa điền trường họ tên`);
                document.myForm.name.focus();
                return false;			
			}else if(document.myForm.email.value == ""){
                alert("Chưa điền trường Họ tên");
                document.myForm.email.focus();
                return false;
            } else if(document.myForm.numberPhone.value == "") {
                alert("Chưa điền trường số điện thoại");
                document.myForm.numberPhone.focus();
                return false; 
			} else if(document.myForm.address.value == "") {
                alert("Chưa điền trường địa chỉ");
                document.myForm.address.focus();
                return false;
            }else{
                document.myForm.submit();
                return true;
            }
				}

    </script>


    </body>
</html>