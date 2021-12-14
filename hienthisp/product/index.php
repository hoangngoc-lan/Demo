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
	$controller='login';
}
switch ($controller) {
	case 'trang_chu':
		require_once('./controller/C_trang_chu.php');
		break;
		case 'login':
		require_once('./controller/C_login.php');
		break;
		case 'logout':
		require_once('./controller/C_logout.php');
		break;
		case 'addnhanvien':
		require_once('./controller/C_addnhanvien.php');
		break;
		case 'xuli_nhanvien':
		require_once('./controller/C_xuli_nhanvien.php');
		break;
	    
	
	default:
		require_once('./view/V_login.php');
		break;
}


?>