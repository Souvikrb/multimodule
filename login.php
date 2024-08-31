<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Login </title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">

	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-2.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">

							<div class="content-top-agile pt-4">
								<img src="images/logo.png" height="100" alt="User Image" class="">
								<h3>Login souvik</h3>
							</div>
							<div class="p-40">
								<form action="include/login_chk.php" method="post" id="login">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="Username" name="uname" id="username">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="psw" id="password">
										</div>
									</div>
									  <div class="row">
										<!-- /.col -->
										<div class="col-12">
										 <div class="fog-pwd text-end">
											Don't have an account? <a href="register.php" class="hover-warning">Register Now</a><br>
										  </div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
										  <button onclick="ValidationEvent(event)" type="submit" class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
    function ValidationEvent(e) {
      e.preventDefault();
      // alert('1');
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;

    if(username == "") {
        swal("Oops!", "Username is required!", "warning");
      }
      else if(password == "") {
        swal("Oops!", "Password is required!", "warning");
      }
    else{
        $('#login').submit();
      }
    }
</script>

	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>

</body>
</html>
