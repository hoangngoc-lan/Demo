<?php
// kiểm tra có phải là supper admin ko
if(isset($_SESSION['ss_admin_nhanvien'])){
	// nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user=$db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	// kiểm tra người dùng có phải admin ko?
	if($user[0]['lv']==1){
		// nếu là admin thì lấy id trên url
		$id=$_GET['id'];
		// lấy dữ liệu chi tiết order_detail tương ứng
		$data_oder_detail=$db->get('oder_detail',array('oder_id'=>$id));
		//trừ sản phẩm tương ứng ở trong bảng product đi
		foreach ($data_oder_detail as $key => $value) {
			// bước 1 lấy dữ liệu sản phẩm
			$product=$db->get('product',array('amount'=>$product[0]['amount']-$value['qty']),array(
				'id'=>$value['product_id']
			));
		}
		// chuyển sang trang thái oder là đã duyệt
		$db->update('oder',array('status'=>1),array('id'=>$id));
		// chuyển về trang oder
		header('location:?controller=oder');
	}else{
		//nếu ko phải admin thì cho người dùng về trang oder
		header('location:?controller=oder');
	}
	require_once('./view/V_oder_detail.php');
}


?>