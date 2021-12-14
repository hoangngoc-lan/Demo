<?php
// kiểm tra có phải là supper admin ko
if(isset($_SESSION['ss_admin_nhanvien'])){
	// nếu đã đăng nhập thì lấy thông tin người dùng theo ss
	$user=$db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
	// kiểm tra người dùng có phải admin ko?
	if($user[0]['lv']==1){
		switch ($_GET['method']) {
			case 'edit':
				// code...
			// nếu là admin thì lấy id trên url
		$id=$_GET['id'];
		// lâý dữ liệu 
		$data_sanpham=$db->get('product',array('id'=>$id));
		//kiểm tra người dùng click vào nút xác nhận
		if(isset($_POST['btn_edit'])){
			$catolog_id=$_POST['catolog_id'];
			$name=$_POST['name'];
			$price_sale=$_POST['price_sale'];
			$price=$_POST['price'];
			$amount=$_POST['amount'];
			$content=$_POST['content'];
	        $hinhanhpath = basename($_FILES['upload_file']['name']);
            $target_dir = "/uploads/";
            $img_link = $target_dir.$hinhanhpath ;
            $target_file = '..'.$img_link ;
             if (move_uploaded_file($_FILES['upload_file']['tmp_name'], $target_file)) {
    }

			//kiểm tra người dùng nhập
			$error=array();
			if($name==''){
				$error['name']="name không đc để trống";

			}
			if($price_sale==''){
				$error['price_sale']="price_sale không đc để trống";
				
			}
			if(!$error){

			$db->update('product',array(
			'catolog_id'=>$catolog_id,
			'name'=>$name,
			'price_sale'=>$price_sale,
			'price'=>$price,
			'amount'=>$amount,
			'img_link'=>$target_file,
			'content'=>$content
				),array('id'=>$id));
				header('location:?controller=trang_chu');
			}

		}
		require_once('./view/V_xuli_nhanvien.php');
				break;
				case'del':
				$id=$_GET['id'];
				$db->delete('product',array('id'=>$id));

				header('location:?controller=trang_chu');
				break;
			
			default:
				// code...
				break;
		}
		
	}
}


?>