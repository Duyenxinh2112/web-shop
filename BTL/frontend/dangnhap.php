<?php

if(isset($_POST['email'])){


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btl";

$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){
    die("connect to this database failed due to" . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT * FROM `user` WHERE email = '$email' && password = '$password' ";

$result = mysqli_query($con, $select);
	function function_alert($result) {   
    // Display the alert box 
    echo "<script>alert('$result');</script>";
} 
if(mysqli_num_rows($result) > 0){
	function_alert("Đăng nhập thành công");
	header("location: banHang.php");
    
} else {
   function_alert("Đăng nhập thất bại"); 
}


// Function call



$con->close();

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
input {
	  width: 100% ;
      padding: 10px;
      outline: 0;
      border: 2px solid #B0BEC5;
  }
.modal{
    height: 110vh;
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
form{
    display: flex;
    flex-direction: column;
    background-color: rgba(255, 255, 255, 0.9);
    width: 45vw;
    text-align: center;
	font-family: 'Montserrat', sans-serif;
}
.checkbox{
    display: flex;
    flex-direction: column;
    background-color: rgba(255, 255, 255, 0.9);
    width: 45vw;
}

h1{
    margin-bottom: 15px;
    margin-top: 10px;
}
input{
    height: 65px;
    outline: none;
    border: none;
    border-bottom: 2px solid rgba(0, 0, 0, 0.596);
    padding-left: 10px;
    background-color: rgba(255, 255, 255, 0.586);
}
input#checkbox {
    height: 15px;
	 margin-top: 7px;
    margin-left: -300px;
	display: flex;
	
}
.modal-forget a{
    color: #000;
    float: right;
}

button{
    height: 60px;    
	background-color: #000;
    color: #fff;
	font-size: 20px;
	margin-top: 10px;
	
}
.modal-detail div {
    font-size: 16px;
    color: #707070;
    align-items: center;
    display: inline-block;
    margin-right: 58px;
	 margin-left: -10px;
}
.modal-footer p{
        text-align: center;
        margin-top: 18px;
        margin-bottom: 18px;
}

.modal-footer a{
    color: #000;
}

	</style>
</head>
<body>
    <div class="modal js-register-modal">
        <div class="modal-container js-modal-register-container">
            <form action="" method="post" name="myForm">
                <h1>Đăng Nhập</h1>
				
				<p style="font-size: 18px">Hãy trở thành thành viên để không bỏ lỡ các ưu đãi và voucher dành cho bạn</p>
				
			
				<label for="email"> Nhập Email</label>
                <input type="email" required name="email" placeholder="Email" id="email" 
					   pattern="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})">
				<script>
					var input = document.getElementById('email');
					input.oninvalid = function(event) {
					event.target.setCustomValidity('Email phải bao gồm @. e.g. john');
					}
					var input = document.getElementById('password');
					input.oninvalid = function(event) {
			event.target.setCustomValidity('Password phải bao gồm 8 kí tự. e.g. Honganh1');
				</script>
				<label for="password">Mật Khẩu</label>
                <input type="password" required name="password" placeholder="Mật Khẩu" id="password"
					   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8}" >
			
			<div class="checkbox">
				<input type="checkbox" name = "" value ="remember" id="checkbox">
				Ghi nhớ cho lần đăng nhập sau  
                <p class="modal-forget"><a href="">Quên mật khẩu?</a></p>
			</div>
			
                <button id="button">Đăng Nhập</button>
				<button id="button" class = "form-login js-register" style="color: #fff">
                    <a href="dangky.php" style="text-decoration: none ; color: #fff">Đăng ký thành viên</a>
                </button>
				<footer class="modal-footer">
                    <p class="modal-help"><a href="thanhVien.php">Thông tin chương trình thành viên</a></p>
                </footer>
					
            </form>
        </div>
    </div>
</body>
	    <script>
        const btn =document.getElementById("button");

        btn.addEventListener('click', Checked);
        function Checked(){
			if(document.myForm.email.value == ""){
                alert("Chưa điền trường Email");
                document.myForm.email.focus();
                return false;
            } else if(document.myForm.password.value == "") {
                alert("Chưa điền trường Mật khẩu");
                document.myForm.password.focus();
                return false; 
            }else{
                document.myForm.submit();
                return true;
            }
			}

    </script>
</html>