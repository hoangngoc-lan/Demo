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
	case 'oder':
		require_once('./controller/C_oder.php');
		break;
		case 'login':
		require_once('./controller/C_login.php');
		break;
		case 'logout':
		require_once('./controller/C_logout.php');
		break;
		
		case 'xuli_oder':
		require_once('./controller/C_xuli_oder.php');
		break;
		case 'oder_detail':
		require_once('./controller/C_oder_detail.php');
		break;
	    
	    case 'xem':
		require_once('./controller/C_xem.php');
		break;
	    
	
	default:
		require_once('./view/V_login.php');
		break;
}


?>