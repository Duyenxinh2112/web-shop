
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #ffe6e6;
}

* {
  box-sizing: border-box;
}
.modal{
    height: 120vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffe6e6 ; 
}
label {
    text-align: left;
    padding: 3px 7px;
    font-size: 17px;
	margin: 5px 0;
}
/* Add padding to containers */
.container {
  	display: flex;
    flex-direction: column;
    background-color: rgba(255, 255, 255, 0.8);
    width: 45vw;
    text-align: center;
	font-family: 'Montserrat', sans-serif;
}

/* Full-width input fields */
input[type=email], input[type=password],
input[type=text],input[type=date] {
 	height: 65px;
    outline: none;
    border: none;
    border-bottom: 2px solid rgba(0, 0, 0, 0.596);
    padding-left: 10px;
    background-color: rgba(255, 255, 255, 1);
}

input[type=email]:focus, input[type=password]:focus, 
	input[type=text]:focus, input[type=date]:focus{
  background-color: #E0E0E0;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #000;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
font-size: 20px;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.modal-detail {
	 padding-left: 100px;	
}
.modal-detail div {
    font-size: 16px;
    color: #707070;
    align-items: center;
    display: inline-block;
    margin-right: 56px;
	 margin-left: -40px;
}
.modal-footer p{
        text-align: center;
        margin-top: 18px;
        margin-bottom: 18px;
}

.modal-footer a{
    color: #000;
}
	.back{
		text-decoration: none ; 
		color: #000 ; 
	}
</style>
</head>
<body>
	<div>
		<i class="ti-arrow-left"><a href="./dangnhap.php" style="text-decoration: none" class="back">QUAY LẠI</a></i>
		
	</div>

<div class="modal js-register-modal">
<div class="modal-container js-modal-register-container">
<form method="post">

  <div class="container">
    <h1>Đăng Ký Thành Viên</h1>
    <p style="font-size: 18px">Hãy trở thành thành viên để không bỏ lỡ các ưu đãi và voucher dành cho bạn</p>
    <hr>
	<label for="hoten"><b>Họ và tên</b></label>
    <input type="text" placeholder="Nhập Họ và Tên " name="hoten" id="hoten" required>
	 
    <label for="email"><b> Nhập Email</b></label>
    <input type="email" placeholder="Nhập Email" name="email" id="email" required
		   pattern="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})">

    <label for="psw"><b> Nhập Password</b></label>
    <input type="password" placeholder="Nhập Password" name="password" id="psw" required
		   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8}">
	 <div class="modal-detail">
                    <div>
                        <div>8 ký tự</div>
                        <div>1 chữ cái viết thường</div>
                        <div>1 chữ cái viết hoa</div>
                        <div> 1 số</div>
                    </div>
                </div>
	<label for="ngaysinh"><b>Ngày tháng năm sinh</b></label>
	<input type="date" name="ngaysinh" placeholder="Ngày sinh" id="ngaysinh" required>
	 <div style="font-size: 17px , margin-top: 5px" >
          FLOWER muốn dành cho bạn một món quà đặc biệt vào ngày sinh nhật của bạn
      </div>
    <hr>

    <button type="submit" name="submit" class="registerbtn">ĐĂNG KÝ THÀNH VIÊN</button>
	
	 <footer class="modal-footer">
                    <p class="modal-help"><a href="thanhVien.php">Thông tin chương trình thành viên</a></p>
                </footer>
  </div>
   </div>
    </div>  
</form>
	

</body>
<?php

include 'connect.php';
 if(isset($_POST['submit'])){
	 $hoten = $_POST['hoten'];
 	$email = $_POST['email'];
    $password = $_POST['password'];
	 $ngaysinh = $_POST['ngaysinh'];
    $insert = "INSERT INTO user (`hoten`, `email`, `password` ,`ngaysinh`) 
	VALUES ('$hoten' , '$email', '$password', '$ngaysinh')";
    $query= mysqli_query($conn,$insert);
    if($query){
    	?>
    	<script>
    	swal({
         title: "Thành công",
         text: "Bạn đã đăng ký thành công",
         icon: "success",
         });
    	</script>
    	<?php
    }else{
    	?>
    	<script>
    	swal({
         title: "Thất Bạt",
         text: "Bạn đã đăng ký thất bại",
         icon: "error",
         });
    	</script>

    	<?php


    }


 }

?>
</html>







