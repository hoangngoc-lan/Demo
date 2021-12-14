
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../login.css">
</head>
<body>
<article class="container-fuild">
	
		<section class="row">
		<section class="col-md-12">
			<div class="card bg-dark text-white">
  <img src="" class="card-img" >
  <div class="card-img-overlay">
  

  	<section class="row">
  		<section class="col-md-4"></section>
<form method="post" action="?controller=login">
  			<section class="col-md-4">
  			<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			<div class="sign-in-htm">
				
				<div class="group">
					<label for="username" class="label" >Username</label>
					<input id="username" type="text" class="input" name="username" style="color:black;" value="<?php echo (isset($username))?$username:''?>">
				</div>
				<!-- hiển thị lỗi -->
				<div class="group">
					<?php if(isset($error['username'])){ ?>
						<label style="color:red;"><i class="fas fa-exclamation-triangle"></i><?php echo $error['username'] ?></label>
					<?php }?>
				</div>
				<div class="group">
					<label for="password" class="label">Password</label>
					<input id="password" type="password" class="input" name="password" data-type="password"  value="<?php echo(isset($password))?$password:''?>"  style="color:black;">
				</div>
				<!-- hiển thị lỗi -->
				<div class="group">
					<?php if(isset($error['password'])){ ?>
						<label style="color:red;"><i class="fas fa-exclamation-triangle"></i><?php echo $error['password'] ?></label>
					<?php }?>
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign In" name="btn_login">
				</div>
			
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			

  		</section>
  		
</form>
  		<section class="col-md-4"></section>
  	</section>
   
  </div>
</div>
			


		</section>
		


	</section>



</article>





	<script src="jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="Bootstrap/js/bootstrap.min.js"></script>

</body>
</html>