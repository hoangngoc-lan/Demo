<?php
// gọi hàm get
// chuyển bảng cần lấy vào hàm get
// truyền vào tên bảng và điều kiện
// lưu dữ liệu vào biến product



	$id=$_GET['id'];

	$product=$db->get('product',array('id'=>$id));
	
	$catolog=$db->get('catolog',array('id'=>$product[0]['catolog_id']));



	

require_once('./view/V_chitiet.php');


        





?>