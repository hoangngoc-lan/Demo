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
		$data_nhanvien=$db->get('admin_nhanvien',array('id'=>$id));
		//kiểm tra người dùng click vào nút xác nhận
		if(isset($_POST['btn_edit'])){
			$password=$_POST['password'];
			$full_name=$_POST['full_name'];
			$username=$_POST['username'];
			$lv=$_POST['lv'];
			//kiểm tra người dùng nhập
			$error=array();
			if($password==''){
				$error['password']="mật khẩu không đc để trống";

			}
			if($username==''){
				$error['password']="tên đăng nhập không đc để trống";
				
			}
			if(!$error){
				$db->update('admin_nhanvien',array(
					'password'=>$password,
					'full_name'=>$full_name,
					'username'=>$username,
					'lv'=>$lv
				),array('id'=>$id));
				header('location:?controller=trang_chu');
			}

		}
		require_once('./view/V_xuli_nhanvien.php');
				break;
				case'del':
				$id=$_GET['id'];
				$db->delete('admin_nhanvien',array('id'=>$id));

				header('location:?controller=trang_chu');
				break;
			
			default:
				// code...
				break;
		}
		
	}
}


?>