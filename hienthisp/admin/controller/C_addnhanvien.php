<?php


if(isset($_POST['btn_add'])){
	$full_name = $_POST['full_name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$lv=$_POST['lv'];


	$admin_nhanvien=$db->get('admin_nhanvien',array());
$db->insert('admin_nhanvien',array(
			
			'username'=>$username,
			'full_name'=>$full_name,
			'password'=>$password,
			'lv'=>$lv
			
		));
		// code...
	
}

header('location:?controller=trang_chu');

?>