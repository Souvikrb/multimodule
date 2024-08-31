<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
	include '../include/config.php';
	if (!empty($_POST['number']) && !empty($_POST['email'])) {

		$name = $conn -> real_escape_string($_POST['name']);
		$number = $conn -> real_escape_string($_POST['number']);
		$email = $conn -> real_escape_string($_POST['email']);
		$referral_code = $conn -> real_escape_string($_POST['referral_code']);
		$password = $conn -> real_escape_string($_POST['password']);
		$user_id = 'G'.rand(1111111111, 9999999999);

		$check_user = "SELECT id FROM `users` WHERE email_id = '$email' or mobile = '$number'";
		$check_user_res = $conn->query($check_user);
		if ($check_user_res->num_rows > 0) {
			?>
			<script type="text/javascript">
	            swal("Oops!", "You have already registered with us!", "warning", {
		          	button: "Ok",
		        	}).then(function() {
				    window.location = "../register.php";
		  		});
	        </script>
			<?php
		}else{
			$inser_sql = "INSERT INTO `users`(`name`, `mobile`, `email_id`, `referral_code`, `user_id`, `password`, `status`) VALUES ('$name','$number','$email','$referral_code', '$user_id', '$password', '1')";
			$inser_sql_res = $conn->query($inser_sql);
			if ($inser_sql_res) {
				?>
				<script type="text/javascript">
					swal("Great!", "You have registered successfully! Please wait for the approval.!", "success", {
						button: "Ok",
					}).then(function() {
					window.location = "../login.php";
					});
        </script>
				<?php
			}
		}

	}
?>
</body>
</html>