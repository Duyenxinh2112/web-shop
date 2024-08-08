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
				case'them':
				require_once 'addProduct.php';
					break;
				case'sua':
				require_once 'updateProduct.php';
					break;
				case'xoa':
				require_once 'dlt.php';
					break;
				case'search':
				require_once 'searchAdmin.php';
					break;
				case'save':
				require_once 'xulySua.php';
					break;
			default:
				case'them':
				require_once 'addProduct.php';
					break;
		}
	}else{
				require_once 'sanPham.php';
		}
	?>
</body>
</html>