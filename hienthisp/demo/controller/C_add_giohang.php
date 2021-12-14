<?php
// bỏ sản phẩm vào giỏ
//B1: Lấy id trên url
$id=$_GET['id'];
// lấy dữ liệu sản phẩm từ product theo id vừa lấy đc

$product =$db->get('product',array('id'=>$id));
//kiểm tra xem có giỏ hàng chưa
// có 2 trường hợp
//1.đã có giỏ hàng
//+ đã có sp trong giỏ hàng
//+ chưa có sp trong giỏ hàng
//2.chưa có giỏ hàng
//Kiểm tra xem giỏ hàng đã có sản phẩm nào chưa?
if(isset($_SESSION['cart'])){
	// nếu đã tồn tại thì kiểm tra xem sản phẩm đã có trong cart hay chưa
	if(isset($_SESSION['cart'][$id])) {
		//nếu có rồi thì tăng số lượng lên 1
		$_SESSION['cart'][$id]['sl'] +=1;

	}
	// đẩy toàn bộ thông tin sp vào
	else{
		// tạo 1 sesion lấy id của sp đó
	$_SESSION['cart'][$id]['id']=$product[0]['id'];
	// khi kích vào mua thì sp sẽ sl=1
	$_SESSION['cart'][$id]['sl'] =1;
	$_SESSION['cart'][$id]['price_sale'] = $product[0]['price_sale'];
	$_SESSION['cart'][$id]['img_link'] = $product[0]['img_link'];
	$_SESSION['cart'][$id]['name']=$product[0]['name'];
}
}
//2. chưa có giỏ hàng thì tạo giỏ hàng=tạo session
else{
	    $_SESSION['cart'][$id]['id']=$product[0]['id'];
		$_SESSION['cart'][$id]['sl']=1;
		$_SESSION['cart'][$id]['price_sale']=$product[0]['price_sale'];
		$_SESSION['cart'][$id]['img_link']=$product[0]['img_link'];
		$_SESSION['cart'][$id]['name']=$product[0]['name'];

}
// sau khi xử lý,quay về trang chủ
header('location:?controller=giohang');


?>