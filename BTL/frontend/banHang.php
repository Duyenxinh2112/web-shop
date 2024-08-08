<?php
 require 'connect.php';
$sql = "SELECT * FROM `product` where `id_product` like 'nu1%'";
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
    <div id = "slider">
            <img class="mySlides2 animate-fading" src="./asset/img/slider1.jpg">
            <img class="mySlides2 animate-fading" src="./asset/img/trangchu.jpg">
            <img class="mySlides2 animate-fading" src="./asset/img/slider3.jpg">
    </div>
    <div id="content">
      <h2 id ="selling" class="section-heading">SẢN PHẨM BÁN CHẠY</h2>
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
                                <a href="index.php?page=datHang1&id_product=<?php echo $row['id_product'];?>"><button class="btn js-buy-shopping cket" > MUA NGAY</button></a>
                            </div>
												<?php
					$i++;
				}
	}
				?>

 
   

                    </div> 

   <?php
		include 'favorite.php';
		?>
                    
    </div>
           <div id="footer">
            <?php include 'footer.php';?>
        </div>
           
    </div>
    <div class="modal-login js-login-modal">
        <div class="modal-login-container js-modal-login-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>
            <header class="modal-login-header">
                <h3>Đăng nhập</h3>
    
            </header>
    <form action="" method="post" name="myForm">
            <div class="modal-login-body">
                <p>Hãy trở thành thành viên để không bỏ lỡ các ưu đãi và voucher dành cho bạn</p>
                <label for="email" class = "modal-login-label">Email</label>
                <input  id ="email" required name = "email" type="text" class ="modal-login-input">
    
                <label for="password" class = "modal-login-password">Password</label>
                <input  id = "password" required name ="password" type="password" class = "modal-login-input">
    
                <input type="checkbox" name = "" value ="remember"> Ghi nhớ cho lần đăng nhập sau
    
                <p class="modal-forget"><a href="">Quên mật khẩu?</a></p>
                <button id="login">
                    Đăng nhập
                </button>
    
                <button id="register" class = "form-login js-register">
                    <a href="dangky.php">Đăng ký thành viên</a>
                </button>
    
                
    
                <footer class="modal-login-footer">
                    <p class="modal-help"><a href="./thanhVien.php">Thông tin chương trình thành viên</a></p>
                </footer>
            </div>
			</form>
        </div>
    </div>
  
		<script>
        const buyBtns = document.querySelectorAll('.js-buy-ticket')
        const login = document.querySelector('.js-login')
        const modalLogin = document.querySelector('.js-login-modal')
        const modalClose = document.querySelector('.js-modal-close')
        const modalLoginContainer = document.querySelector('.js-modal-login-container')
 
        function showLogin(){
            modalLogin.classList.add('open')
        }
 
        function hideLogin(){
            modalLogin.classList.remove('open')
        }

        login.addEventListener('click', showLogin)
        modalClose.addEventListener('click', hideLogin)
        modalLogin.addEventListener('click',hideLogin)
        modalLoginContainer.addEventListener('click', function(event) {
                event.stopImmediatePropagation()
            })


            var myIndex = 0;
            carousel2();

            function carousel2() {
            var i;
            var x = document.getElementsByClassName("mySlides2");
            for (i = 0; i < x.length; i++) {
                 x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel2, 7000);    
}
		</script>
    </body>

</html>

