<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	if(isset($_GET['page'])){
		switch($_GET['page']){
				case'detail':
				require_once 'detail.php';
					break;
				case'datHang':
				require_once 'customer.php';
					break;
				case'datHang1':
				require_once 'customer1.php';
					break;
				case'cart':
				require_once 'cart.php';
					break;
				case'search':
				require_once 'search.php';
					break;
			default:
				case'banHang':
				require_once 'banHang.php';
					break;
		}
	}else{
				require_once 'banHang.php';
		}
	?>
</body>
</html>