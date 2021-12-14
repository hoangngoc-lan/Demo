<?php


if(isset($_POST['btn_add'])){
	$catolog_id = $_POST['catolog_id'];
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

	$product=$db->get('product',array());
$db->insert('product',array(
			
			'catolog_id'=>$catolog_id,
			'name'=>$name,
			'price_sale'=>$price_sale,
			'price'=>$price,
			'amount'=>$amount,
			'img_link'=>$target_file,
			'content'=>$content
		));
		// code...
	
}

header('location:?controller=trang_chu');

?>