<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./asset/css/style1.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    </head>
    <body>
        <div id="main-home">
            <div id="header-admin">
                <div class="nav">
                    <div class="logo">
                    <img src="./asset/img/logo/logo1.png" alt="">
                </div>
                <div class= "search-btn">
                    <i class="search-icon ti-search"></i>
                    <input type="text" placeholder="Tìm kiếm">
                </div>
                <div class="login-btn" >
                    <button class = "btn js-login"><i class="ti-user"></i></button>
                </div>
                </div>
            </div>
            <div id="content-admin">
                <div class="menu-left">
                    <a href="./homeAdmin.php"><div class="dashboard">
                        <i class="ti-home">
                        </i>
                        Trang chủ
                    </div></a>
                    <a href="./khachHang.php"><div class="category">
                        <i class="ti-layout-grid2">
                        </i>
                        Đơn hàng
                    </div></a>
                    <a href="./sanPham.php"><div class="product-admin">
                        <i class="ti-clipboard"></i>
                        Sản phẩm
                    </div></a>
                    <a href="./loginAdmin.php">
                    <div class="logout">
                        <i class="ti-shift-left"></i>
                            Đăng xuất
                    </div>
                </a>
                </div>
                <div class="content-admin-right">
                    <a href="./addProduct.php">
                    <button class = "add-product btn">
                        Thêm sản phẩm
                        <i class="ti-upload"></i>
                    </button>
                </a>
                <a href="./sanPham.php">
                    <button class="fix-product btn">
                        Sửa, Xóa sản phẩm
                        <i class="ti-pencil-alt">
                        </i>
                    </button>
                </a>
				<a href="./messengeAdmin.php">
                    <button class="fix-product btn">
                        Tin nhắn
                        <i class="ti-pencil-alt">
                        </i>
                    </button>
                </a>
                    <div class="category">
                        <img src="./asset/img/category.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>