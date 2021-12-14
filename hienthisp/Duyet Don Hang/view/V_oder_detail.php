<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
   <link rel="shortcut icon"  href="../img/danhba1.ico">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
  <article class="container-fuld">
    
    
    <section class="row">
      

      <section class="col-md-12">
        
        
        <nav>
      <ul>
      
        <li class="items"><a href="?controller=oder">Trang chủ</a></li>
        <li class="items"><a href="">Sản phẩm</a></li>
        <li class="items"><a href="">Đơn Hàng</a></li>
        <li class="items"><a href="">Kho Hàng</a></li>
        <li class="items"><a href="">Liên hệ</a></li>
        <li class="items"><a href="?controller=logout">Đăng xuất</a></li>
        
      </ul>
    </nav>
      </section>
    </section>
    <section class="row">
      
         <section class="col-md-3">
    <div id="flip"><i class="fas fa-users"></i> Quản lý nhân viên</div>
<div id="panel">
  <div class="row">
    

    <div class="col-md-1"></div>

    <div class="col-md-11">
      <ul>
        <li><a href=""><i class="fas fa-user-alt"></i> Quản lý ca làm </a></li>
        <li><a href=""><i class="fas fa-user-alt"></i> Quản lý chốt ca</a></li>
        <li><a href=""><i class="fas fa-user-alt"></i> Quản lý ngày nghỉ </a></li>
        <li><a href=""><i class="fas fa-user-alt"></i> Quản lý lương</a></li>
        


      </ul>
      


    </div>
  </div>
  

</div>
<div id="flips"><i class="bi bi-box-seam"></i> Quản lý sản phẩm</div>
<div id="panels">
  <div class="row">
    

    <div class="col-md-1"></div>

    <div class="col-md-11">
      <ul>
        <li><a href=""><i class="bi bi-box"></i>  Số lượng bán ngày</a></li>
        <li><a href=""><i class="bi bi-box"></i> Số lượng bán tháng</a></li>
        <li><a href=""><i class="bi bi-box"></i>  Số lượng hàng nhập</a></li>
        <li><a href=""><i class="bi bi-box"></i> Số lượng hàng tồn kho</a></li>
        


      </ul>
      


    </div>
  </div>
</div>
<div id="flipss"><i class="bi bi-receipt-cutoff"></i> Quản lý đơn hàng</div>
<div id="panelss">
  <div class="row">
    

    <div class="col-md-1"></div>

    <div class="col-md-11">
      <ul>
        <li><a href=""><i class="bi bi-receipt"></i>  Tổng số đơn  ngày</a></li>
        <li><a href=""><i class="bi bi-receipt"></i>  Tổng số đơn tháng</a></li>
        <li><a href=""><i class="bi bi-receipt"></i> Đơn hàng giảm giá</a></li>
        <li><a href=""><i class="bi bi-receipt"></i> Tổng tiền đơn hàng</a></li>
        


      </ul>

      


    </div>
  </div>
  

</div>
            
    
  </section> 
  

  <!-- quản lý nhân viên --->
      
      <section class="col-md-9 mt-5">
        <section class="row">
    <h1 class="text-center col-md-12">Chào mừng: <?php echo $user[0]['full_name'] ?></h1>
  </section>
         <!-- Thêm nhân viên-->
         <?php if ($user[0]['lv']==1) {?>
         <section>
         <h3 class="text-center" style="color:red;">Xử lí đơn hàng</h3>
</section>
<br><br>
<!-- end thêm nv-->
 
<section>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã đơn </th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Email</th>
      <th scope="col">Tổng đơn</th>
    </tr>
  </thead>
  <!-- hiển thị nhân viên-->
 
  <tbody>
    <tr>
      <th scope="row"><?php echo $data_oder[0]['id']?></th>
      <td><?php echo $data_oder[0]['full_name']?></td>
      <td><?php echo $data_oder[0]['address']?></td>
      <td> <?php echo $data_oder[0]['phone']?></td>
      <td ><?php echo $data_oder[0]['email']?></td>
      <td><?php echo number_format($data_oder[0]['amount']) ?>đ</td>
      <!--- sửa xóa-->

 

</tr>
</tbody>


      </section>
      <section class="row">

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Ảnh </th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Đơn giá</th>
      <th scope="col">Tổng tiền</th>
     
    </tr>
  </thead>
  <!-- hiển thị nhân viên-->
 
  <tbody>
    <?php foreach ($data_oder_detail as $key => $value) {
      // lấy dữ liệu sản phẩm tương ứng
      $data_product=$db->get('product',array('id'=>$value['product_id']))
      ?>
    

    <tr>
      <th scope="row"><img  height="50" width="50" src="<?php echo $data_product[0]['img_link']?>"></th>
      <td><?php echo $data_product[0]['name']?></td>
      <td><?php echo $value['qty']?></td>
      <td> <?php echo number_format($value['price_sale'])?>đ</td>
      <td ><?php echo number_format($value['amount'])?>đ</td>
      
</tr>
 <?php }?>
</tbody>
</table>

 </section>
 <section class="row mt-4">
   <section class="col-md-10">
     <a class="btn btn-success col-md-2"href="?controller=xuli_oder&id=<?php echo $id ?>" >Duyệt đơn</a>
   </section>
 </section>
      <?php } else {?>
        <section class="row">
          <h3 class="text-danger ">bạn không có quyền</h3>
        </section>
    <?php }?>
    </section>
  </article>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>