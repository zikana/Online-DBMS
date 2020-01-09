<!DOCTYPE html>
<html>
<head>
	<title>online| DBMS</title>
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="lib/font-awesome/css/font-awesome.min.css">
</head>
<body >
	
	<header class="fluid-container bg-dark">
		<div class="row">
			<div class="col-lg-6 text-center bold text-white py-5">
				<h3><i class="fa fa-database text-danger"></i> PERSONAL BDMS</h3>
			</div>
			<div class="col-lg-6 py-3 pt-5 ">
				<a class="back nav-link text-white btn btn-primary col-lg-3 float-right " href="index.php"><i class="fa fa-arrow-left text-white"></i> Go back</a>
			</div>
		</div>
	</header>
<?php
if (isset($_GET['logid'])) {

	$logid = $_GET['logid'];
	if ($logid == 1) {
		?>

<section class="container my-5">
  <div class="row">
    <div class="col-md-3">
      
    </div>
   <div class="col-md-6 my-5 border">
      <div class="form">
        <form class="form-defult" method="POST" action="#">
          <h3 class="text-center mt-3"><i class="fa fa-user"></i> Login</h3>
          <div class="form-group">
            <label><i class="fa fa-envelope"></i> Email</label>
          <input type="email" class="form-control" name="email" required placeholder="Enter the Email">
          </div>
          <div class="form-group">
            <label><i class="fa fa-lock"></i> Password</label>
            <input type="password" class="form-control" name="pwd" required placeholder="Enter the Password">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control bg-primary text-white" name="login" value="Login">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

		<?php
	}else{
		?>

		<section class="container">
	<div class="row">
		<div class="col-md-6 my-5">
			<div class="form border">
				<form class="form-defult px-2" method="POST" action="#">
					<h3 class="text-center"><i class="fa fa-pencil"></i> Signup</h3>
					<div class="form-group">
						<label><i class="fa fa-envelope"></i> Email</label>
					<input type="email" class="form-control" name="email" required placeholder="Enter the Email">
					</div>
					<div class="form-group">
						<label><i class="fa fa-key"></i> Password</label>
						<input type="password" class="form-control" name="pwd" id="pwd1"  required placeholder="Enter the Password">
					</div>
					<div class="form-group">
						<label><i class="fa fa-key"></i>Confirm Password</label>
						<input type="password" class="form-control" id="password" name="pwd2" onkeyup="validatePwd()" required placeholder="Confirm Password">
						<small id="pwd2" class="text-danger"></small>
					</div>
					<div class="form-group">
						<input type="submit" class="form-control bg-primary text-white"  name="signup" value="Signup">
					</div>
				</form>
				<script>
					function validatePwd() {
					var x =	document.getElementById('pwd1').value;
					var y =	document.getElementById('password').value;
					if (x == y){
						document.getElementById('pwd2').innerHTML = "password match*";
					}else{
						document.getElementById('pwd2').innerHTML = "password do not match*";
					}
					
					}
				</script>
			</div>
		</div>
		<div class="left-done col-md-6 my-5">
			<div>
				<div class="border pb-5">
					<h3 class="text-center mt-5 pt-5"><i class="fa fa-users"></i> Connect with Social Links</h3>
					<div class="ml-5 pl-5 mt-5">
						<a href="#"><i class="fa fa-facebook-official fa-2x"></i> Facebook</a>
					</div>
					<div class="ml-5 pl-5 mt-5">
						<a href="#" class="text-dark"><i class="fa fa-google fa-2x "></i> Google Account</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>

		<?php
	}
}


?>

	<?php
include_once "assets/footer.php";
	?>
</body>
</html>