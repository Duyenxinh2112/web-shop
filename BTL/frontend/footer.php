<?php
require 'connect.php';

if(isset($_POST["submit"])) {
//Kết nối
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl";
$con = mysqli_connect($servername, $username, $password, $dbname);

	
//Thêm sản phẩm
$messenge = mysqli_query($con, "SELECT * FROM messenge") ; 
if(isset($_POST["name"])){
$name = $_POST['name'];
$email = $_POST['email'];
$messenge = $_POST['messenge'];

$sql = "INSERT INTO messenge (`name` ,`email`,`messenge`) 
	VALUES ( '$name', '$email', '$messenge' )";
}
$query = mysqli_query($conn , $sql); 


$con->close();
}
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
<title>Untitled Document</title>
</head>

<body>
	           <div class="footer">
            <h1>CONTACT US</h1>
            <div class="col col-half contact-info">
                <p><i class="ti-location-pin"> 141 Chiến Thắng, Hà Đông, Hà Nội</i></p>
                <p><i class="ti-mobile"> 0987654321</i></p>
                <p><i class="ti-email"> Email: mail@mail.com</i></p>
            </div>
            <div class="col col-half contact-form">
                  <form action="" method="post" name="myForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col col-half">
                            <input type="text" name="name" placeholder="Name" id="name" class="form-control">
                        </div>
                        <div class="col col-half">
                            <input type="email" name="email" placeholder="Email" id="email" class="form-control">
                        </div>   
                    </div>
                    <div class="row mt-8">
                        <div class="col col-full">
                            <input type="text" name="messenge" placeholder="Messenge" id="messenge" class="form-control">
                        </div> 
                    </div>
					<button id = "submit" name ="submit" type="submit" class = "btn">GỬI</button>
                </form>
            </div>
            <div class="social">
                <a href=""><i class = "ti-facebook"></i></a>
                <a href=""><i class = "ti-instagram"></i></a>
                <a href=""><i class = "ti-pinterest"></i></a>
                <a href=""><i class = "ti-twitter"></i></a>
                <a href=""><i class = "ti-linkedin"></i></a>
                <a href=""><i class = "ti-youtube"></i></a>
            </div>
            <p class="copyright">Powered by <a href="">DuyenAnh</a></p>
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
            } else if(document.myForm.messenge.value == "") {
                alert("Chưa điền trường tin nhắn");
                document.myForm.messenge.focus();
                return false; 
			}else{
                document.myForm.submit();
                return true;
            }
				}

    </script>

</body>
</html>