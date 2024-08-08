<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>

    <body>
        <div id="main">
            <div id="header">
             <?php include 'header.php';?>
            </div>

            <div id="content-member">
                <h2>Làm thế nào để trở thành thành viên</h2>
                <div class="member-section">
                    <div class="step">
                        <h4>Đăng kí</h4>
                        <p>Chỉ cần điền thông tin của bạn và nhấn đăng kí</p>
                        <a href="./dangky.php" style="text-decoration: none">
							<button id = "register" class = "js-register">
                            Đăng kí ngay
                        </button>
						</a>
                    </div>
                    <div class="step">
                        <h4>Tích điểm</h4>
                        <p>Tích điểm mỗi khi bạn mua hàng. 10.000đ = 1 điểm</p>
                        <img src="./asset/img/logo/step2.png" alt="" class="step2">
                    </div>
                    <div class="step">
                        <h4>Đổi điểm</h4>
                        <p>Đổi phần thưởng 100.000đ cho 200 điểm.
                             Ngoài ra còn nhiều voucher hấp dẫn</p>
                             <img src="./asset/img/logo/step3_1.png" alt="" class="step3">
                    </div>

                    <div class="step">
                        <h4>Cơ hội trở thành thành viên kim cương</h4>
                        <p>Đạt 500 điểm bạn có nhiều đặc quyền tốt hơn, mua hàng được chiết khấu cao hơn</p>
                        <img src="./asset/img/logo/step4.png" alt="" class="step4">
                    </div>
                </div>
            </div>
            <div id="footer">
             <?php include 'footer.php';?>
            </div>
        </div>
        <div class="modal-login js-register-modal">
            <div class="modal-login-container js-modal-register-container">
                <div class="modal-close js-modal-register-close" style="color: black;">
                    <i class="ti-close"></i>
                </div>
                <header class="modal-login-header">
                    <h3>Đăng ký thành viên</h3>
        
                </header>    
    </body>
</html>
