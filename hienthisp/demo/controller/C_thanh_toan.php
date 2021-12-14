<?php
// kiểm tra người dùng có ấn nút thanh toán ko
if (isset($_POST['btn_xacnhan'])) {
	// code...
	$full_name=$_POST['full_name'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];

	$oder_id =1;
	$data_oder = $db->get('oder',array());
	foreach ($data_oder as $key => $value) {
		// code...
		$oder_id+=$value['id'];
	}
	foreach ($_SESSION['cart'] as $key => $value) {
		$db->insert('oder_detail',array(
          'oder_id'=>$oder_id,
          'product_id'=>$value['id'],
          'qty'=>$value['sl'],
          'price_sale'=>$value['price_sale'],
          'amount'=>$value['sl']*$value['price_sale']
		));


			}
	$data_oder_detail=$db->get('oder_detail',array('oder_id'=>$oder_id));
	$amount=0;
	foreach ($data_oder_detail as $key => $value) {
		// code...
		$amount+=$value['amount'];
	}
	$db->insert('oder',array(
		'id'=>$oder_id,
		'full_name'=>$full_name,
		'address'=>$address,
		'phone'=>$phone,
		'email'=>$email,
		'amount'=>$amount,
		'status'=>0
	));
}
$data_oder = $db->get('oder',array());
require_once('./view/V_thanhtoanthanhcong.php');
?>