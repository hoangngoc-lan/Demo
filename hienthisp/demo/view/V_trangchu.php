<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta charset="utf-8">
	<title>Muadongho.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../styledemo.css">
</head>
<body>
	<!-- menu -->
  <article class="container">
  

<div class="row ">
      <div class="col-md-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-danger
    ">
    <!-- truyền dữ liệu người dùng nhập vào -->
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
      <!-- tìm kiếm --->
      <form class="d-flex" method="get" action="index.php">
        <input type="hidden" name="controller" value="trangchu">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" value="<?php echo(isset($_GET['keyword'])) ? $_GET['keyword']:''?>">
        <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search" style="font-size:30px;"></i></button>
      </form>
    </div>
    </div>

  </nav>
</div>



     <!-- end menu-->
  <!-- slide-->

<div class="row">
  <div class="col-md-12 slides ">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/ba1.jpg"  alt="" class="img-fuild" style="width:100%; height:100%;">
    </div>
    <div class="carousel-item">
      <img src="../img/ba3.jpg" alt="" class="img-fuild" style="width:100%; height:100%;" >
    </div>
    <div class="carousel-item">
      <img src="../img/ba2.jpg" alt="" style="width:100%; height:100%;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
  </div>
  <!--- lấy ảnh từ sql-->
  <div class="row mt-5" >
    <?php foreach ($product as $key => $value) {?>
      
    
    <div class="col-md-3 mt-5">
      <div class="card" >
         <img src="<?php echo $value['img_link'] ?>" >

  <div class="card-body">
    <h5 class="card-title"><?php echo $value ['name'] ?></h5>
    <p class="card-text"><?php echo $value ['content'] ?><br> <span >&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;(Siêu cong)</span><br>
  
     &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<s style="font-size:12px"><?php echo number_format($value['price']) ?>đ</s><br>
    <label style="color:red; font-size:20px" >&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<?php echo number_format($value ['price_sale'])   ?>đ</label>
    </p>
    <!-- thêm sản phẩm vào giỏ hàng-->
    <a href="?controller=add_giohang&id=<?php echo $value['id'] ?>"><button type="button"  class="btn btn-primary btn-add-card"><i class="bi bi-cart"></i></button></a>
        <span class="sr-only"></span>
         <!-- xem chi tiết sản phẩm -->
        <a href="?controller=chitiet&id=<?php echo $value['id']?>"><button class="btn btn-outline-secondary btn-detail">Xem chi tiết</button></a>
        <h3 class="sale-sticky">Sale</h3>
  </div>
</div>


    </div>
    <?php  } ?>
  </div>
    
    
    
    
  </div>
  
  
  
    
  </div>
  <!-- phần footer-->

  <div class="row mt-5 page-switch-button " >
    <div class="col-md-6 ">
        <button class="btn btn-info">1</button>
        <button class="btn btn-danger">2</button>
        <button class="btn btn-primary">3</button>
        <button class="btn btn-outline-primary">4<button>
        <button class="btn btn-outline-primary">...<button>
        <button class="btn btn-outline-primary">><button>
        <button class="btn btn-outline-primary">>><button>
      </div>
      
       
    </div>
    <div class="row mt-5 footer ">
      
      <div class="col-md-4">
        <span><h5><i class="bi bi-alarm" style="font-size:30px;"></i> &ensp;MUA HÀNG ONLINE  </h5></span>
        <h6>&ensp;&ensp;Tất cả ngày trong tuần</h6>
      </div>
      <div class="col-md-2 mt-2">

        <h6><i class="bi bi-telephone-fill"></i>&ensp;HỖ TRỢ BÁN HÀNG</h6>
        <p>024.3991.8668</p>
        
      </div>
       <div class="col-md-2 mt-2">
        <h6><i class="bi bi-telephone-fill"></i>&ensp;HỖ TRỢ KỸ THUẬT</h6>
        <p>024.2214.8336</p>
        
      </div>
       
       
      <div class="col-md-4">
        <span><h5><i class="bi bi-envelope-fill"style="font-size:30px;"></i> &ensp;EMAIL  </h5></span>
        <h6>&ensp;&ensp;lanhoaiquy@gmail.com</h6>
        
      </div>
    </div>
    <div class="row  mt-5 footer-product">
      <div class="col-md-4">
        <h5><b>VỀ DONGHODUYANH</b></h5>
<h6>Giới thiệu về donghoduyanh</h6>
<h6>Triết lý kinh doanh</h6>
<h6>Giấy chứng nhận và giải thưởng
</h6>
<h6>Khách hàng nói gì về chúng tôi</h6>
      </div>
      <div class="col-md-4">
        <h5><b>CHĂM SÓC KHÁCH HÀNG</b></h5>
<h6>Hướng dẫn mua hàng</h6>
<h6>Chính sách đổi trả</h6>
<h6>Chính sách đổi trả
</h6>
<h6>Khách hàng nói gì về chúng tôi</h6>
      </div>
      <div class="col-md-4">
        <h5><b>VỀ XWATCH</b></h5>
        <h6>Giới thiệu đồng hồ Xwatch</h6>
        <h6>Triết lý kinh doanh</h6>
        <h6>Giấy chứng nhận và giải thưởng</h6>
        <h6>Khách hàng nói gì về chúng tôi</h6>
        
      </div>
    </div>

  
</div>
</article>



<script src="../jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>