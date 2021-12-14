<?php
// gọi hàm get
// chuyển bảng cần lấy vào hàm get
// truyền vào tên bảng và điều kiện
// lưu dữ liệu vào biến product

if(isset($_GET['keyword'])){
	$keyword=$_GET['keyword'];
	$product=$db->get_like('product','name',$keyword);
	
}
else{
$product=$db->get('product',array());
}

require_once('./view/V_trangchu.php');



?>