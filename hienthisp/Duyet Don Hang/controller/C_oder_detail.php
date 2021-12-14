<?php
// kiểm tra có phải là supper admin ko
if(isset($_SESSION['ss_admin_nhanvien'])){
	// nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user=$db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	// kiểm tra người dùng có phải admin ko?
	if($user[0]['lv']==1){
		// nếu là admin thì lấy id trên url
		$id=$_GET['id'];
		// lấy dữ liệu chi tiết order tương ứng
		$data_oder=$db->get('oder',array('id'=>$id));
		//lấy dữ liệu chi tiết trong oder_detail tương ứng
		$data_oder_detail=$db->get('oder_detail',array('oder_id'=>$id));
		
		
	}else{
		// nếu ko phải admin thì cho người dùng về trang oder
		header('location:?controller=login');
	}

}
else{
	// nếu chưa đăng nhập thì cho người dùng về login
	header('location:?controller=login');
}
require_once('./view/V_oder_detail.php');


?>