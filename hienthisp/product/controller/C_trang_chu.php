<?php
$product=$db->get('product',array());

$user=$db->get('admin_nhanvien',array('id'=>$_SESSION['ss_admin_nhanvien']));
require_once('./view/V_trangchu.php');


?>