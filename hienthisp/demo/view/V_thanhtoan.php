<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../styledemo.css">
  

</head>
<body>
<article class="container">
  <!-- menu-->
  <div class="row ">
      <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-danger
    ">
    
      <a class="navbar-brand text-white " href="?controller=trangchu"  ><i class="fas fa-home"></i> TRANG CHỦ</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"  >
           THƯƠNG HIỆU
          </a>
          <div class="dropdown-content text-white">
            
            <a class="dropdown-item text-white" href="#">OP OLYM PIANUS - OLYMPIA STAR</a>
            <a class="dropdown-item text-white" href="#">ORIENT</a>
            <a class="dropdown-item text-white" href="#">BENTLRY</a>
            <a class="dropdown-item text-white" href="#">OGIVAL</a>
               <a class="dropdown-item text-white" href="#">CITIZEN</a>
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"  ><i class="bi bi-smartwatch"></i>
           ĐỒNG HỒ NAM
          </a>
          <div class="dropdown-content text-white">
            
            <a class="dropdown-item text-white" href="#">TỪ 2 TRIỆU ĐẾN 6 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 20 TRIỆU ĐẾN 30 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 7 TRIỆU ĐẾN 15 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">DƯỚI 2 TRIỆU</a>
               <a class="dropdown-item text-white" href="#">TRÊN 50 TRIỆU</a>
          </div>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"  ><i class="bi bi-watch"></i>
           ĐỒNG HỒ NỮ
          </a>
          <div class="dropdown-content text-white">
            <a class="dropdown-item text-white" href="#">TỪ 2 TRIỆU ĐẾN 6 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 20 TRIỆU ĐẾN 30 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 7 TRIỆU ĐẾN 15 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">DƯỚI 2 TRIỆU</a>
               <a class="dropdown-item text-white" href="#">TRÊN 50 TRIỆU</a>
          </div>
        </li>
         <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"  >
           ĐỒ ĐÔI
          </a>
          <div class="dropdown-content text-white">
            
            <a class="dropdown-item text-white" href="#">TỪ 2 TRIỆU ĐẾN 6 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 20 TRIỆU ĐẾN 30 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">TỪ 7 TRIỆU ĐẾN 15 TRIỆU</a>
            <a class="dropdown-item text-white" href="#">DƯỚI 2 TRIỆU</a>
               <a class="dropdown-item text-white" href="#">TRÊN 50 TRIỆU</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="?controller=giohang">GIỎ HÀNG</a>
        </li>

        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown"  >
           PHỤ KIỆN
          </a>
          <div class="dropdown-content text-white">
            
            <a class="dropdown-item text-white" href="#">DÂY ĐỒNG HỒ</a>
            <a class="dropdown-item text-white" href="#">KHÓA ĐỒNG HỒ</a>
            <a class="dropdown-item text-white" href="#">HỘP ĐỰNG ĐỒNG HỒ</a>
            <a class="dropdown-item text-white" href="#">HỘP XOAY ĐỒNG HỒ</a>
               <a class="dropdown-item text-white" href="#">DỤNG CỤ VỆ SINH</a>
          </div>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search" style="font-size:30px;"></i></button>
      </form>
    </div>
    </div>

  </nav>
</div>
<!--- end menu-->
<!-- phần thông tin người mua-->
 <section class="row mt-5" >
   <section class="col-md-8">
    <h3 style="text-align:center;">Điền thông tin cá nhân</h3>
     

  <form action="?controller=thanh_toan" method="post">
  <div class="mb-3">
    <label  class="form-label">Họ và tên</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="full_name" >
   
  </div>
   <div class="mb-3">
    <label  class="form-label">Địa chỉ</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address">
   
  </div>
   <div class="mb-3">
    <label  class="form-label">Số điện thoại</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone" >
   
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
   
  </div>
  
  <button type="submit" class="btn btn-primary" name="btn_xacnhan">Đặt hàng</button>
</form>
   </section>
 </section>
 <!-- end thông tin -->
</article>

<script src="../jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
 



