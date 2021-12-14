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
            
                <li class="items"><a href="?controller=trang_chu">Trang chủ</a></li>
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

    <section class="col-md-9 mt-5">
      <h1 class="text-center col-md-12">Chào mừng: <?php echo $user[0]['full_name'] ?></h1>
    </div>
                 <!-- Thêm nhân viên-->
                 <section>
 <form action="?controller=xuli_nhanvien&method=edit&id=<?php echo $_GET['id'] ?>" method="post">

        
     
       <div  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <section class="col-md-12">

<div class="modal-header">
        <!----Thêm nhân viên--->
          <h5 class="modal-title" id="staticBackdropLabel">Sửa Nhân viên</h5>
       
      </div>
        

  <section class="form-group">
    <label for="full_name" >Tên nhân viên</label>
    <input type="text"  class="form-control"  required id="full_name" name="full_name" value="<?php echo $data_nhanvien[0]['full_name'] ?>">
  
    
  </section>
  <section class="form-group">
    <label for="username">Tên đăng nhập</label>
    <input type="text" class="form-control"  required id="username" name="username" value="<?php echo $data_nhanvien[0]['username'] ?>">
  </section>
  <section class="form-group">
    <label   >password</label>
    <input type="text"   class="form-control"  required id="password" name="password" value="<?php echo $data_nhanvien[0]['password'] ?>">
    
  </section>
  <section class="form-group">
    <label for="lv">lv</label>
    <input  class="form-control"  required id="lv" name="lv" value="<?php echo $data_nhanvien[0]['lv'] ?>">
    
  </section>
   <section class="form-group">
   <button class="btn btn-success" type="submit" name="btn_edit" >Sửa nhân viên</button>
  </section>
  


</section>
</div>
</div>
</div>
</form>
</section>
</section>
</section>
</article>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>