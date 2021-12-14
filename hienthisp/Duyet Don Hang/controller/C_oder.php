<?php
// kiểm tra người dùng đã đăng nhập chưa
if(isset($_SESSION['ss_admin_nhanvien'])){
	// nếu đã đăng nhập thì lấy thông tin theo người dùng
	$user=$db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	// lấy dữ liệu oder chưa duyệt
	$data_oder_not_done=$db->get('oder',array('status'=>0));
	// lấy dữ liệu oder đã dc duyệt
	$data_oder_done=$db->get('oder',array('status'=>1));
}else{
	// nếu chưa đăng nhạp quay lại trang login
	header('location:?controller=login');
}
require_once('./view/V_oder.php');

?>