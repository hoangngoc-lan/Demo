
<?php
if(isset($_SESSION['ss_admin_nhanvien'])){
	header('location:?controller=trangchu');
}
if(isset($_POST['btn_login'])){
	$username = $_POST['username'];
	$password =$_POST['password'];

	$error = array();

	if($username==''){
		$error['username'] = "Username không được để trống";
	}
	if($password==''){
		$error['password']="password không đc để trống";
	}
	if(!$error){
		$user = $db->get('admin_nhanvien', array('username'=>$username));
		
		if(empty($user)){
			$error['username']="Tai khoan không tồn tại";
		}
		else{
			if($password!=$user[0]['password']){
				$error['password']="sai mật khẩu";
			}
		}
	}

	if(!$error){
		$_SESSION['ss_admin_nhanvien']=$user[0]['id'];
		header('location:?controller=trang_chu');
		
		
	}
	
	
}
require_once('./view/V_login.php');




	


	




        





?>

