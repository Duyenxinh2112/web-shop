<?php  
	// Khởi tạo mảng tài khoản
	$acount = array(
		'1'	=>	array(
			'email'	=> 'admin',
			'pass'	=> '123456',
		)

	);

	if (isset($_POST['login'])) {
		$user = trim($_POST['username']);
		$passw = trim($_POST['passw']);

		foreach ($acount as $key => $value) {
			if ($value['email'] == $user && $value['pass'] == $passw) {
				header("Location: homeAdmin.php");
			}else{
				
				$errors = "Tài khoản hoặc mật khẩu không đúng!";
			}
		}
	}

?>
<!DOCTYPE html>
<html lang="" style="background-color: #cee7e7;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./asset/css/style1.css">
        <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
	</head>
	<body>
 <div id = "content-login-admin">
		<div class="form-login">
			<div class="title">
			<h3>Đăng nhập</h3></div>
                
				
					<form action="" method="POST" role="form">
						
					
						<div class="user-admin">
							<label for="user">Tài Khoản<i class="ti-user"></i></label>
							<input required="" type="text" name="username" class="form-control" id="user" value="<?php if(isset($user)){ echo $user; } ?>" placeholder="Tên đăng nhập">
						</div>

						<div class="password-admin">
							<label for="passw">Mật khẩu <i class="ti-key"></i></label>
							<input required="" type="password" name="passw" class="form-control" id="passw" placeholder="Mật Khẩu">
						</div>
						<div class="btn-login">
						<button type="submit" name="login" class="login btn">Đăng nhập</button>
						</div>
						<div class="forget">
						<a href="" class="">Quên mật khẩu?</a>
						</div>
						<?php  
							if (isset($errors)) {
						?>
							<div class="alert alert-danger" style="margin-top: 30px;">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thông báo:</strong> <?php echo $errors; ?>
							</div>
						<?php
							}
						?>
						
					</form>
				</div>
			</div>
		</div>
	</body>
</html>