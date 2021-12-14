<?php
session_start();
// gọi file database vào
require('./model/database.php');
// khởi tạo đối tượng
$db = new database();
// kiểm tra trên url có biên controller ko?
if(isset($_GET['controller'])){
	// lấy giá trị của controller
	$controller=$_GET['controller'];
}
// nếu ko có về trang chủ
else{
	$controller='trangchu';
}
switch ($controller) {
	case 'trangchu':
		require_once('./controller/C_trangchu.php');
		break;
		case 'chitiet':
		require_once('./controller/C_chitiet.php');
		break;
		case 'giohang':
		require_once('./controller/C_giohang.php');
		break;
		case 'add_giohang':
		require_once('./controller/C_add_giohang.php');
		break;
		case 'xuli_cart':
		require_once('./controller/C_xuli_cart.php');
		break;
		case 'thanh_toan':
		require_once('./controller/C_thanh_toan.php');
		break;
		case 'thanhtoan':
		require_once('./controller/C_thanhtoan.php');
		break;
	
	default:
		echo"lỗi";
		break;
}
?>