<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
include 'config.php';
	if (!empty($_POST['uname']) && !empty($_POST['psw'])) {
		$uname = $conn -> real_escape_string($_POST['uname']);
		$psw = $conn -> real_escape_string($_POST['psw']);
		$sql = "SELECT id, user_type, user_id FROM `users` where (email_id = '$uname' or mobile = '$uname' or user_id = '$uname') and password = '$psw' and status = '1'";
		$sql_res = $conn->query($sql);
		if ($sql_res->num_rows > 0) {

			$chk_rows = $sql_res->fetch_assoc();
			$_SESSION['uid'] = $chk_rows['id'];
			$_SESSION['user_id'] = $chk_rows['user_id'];
			$_SESSION['user_type'] = $chk_rows['user_type'];
			
		?>
		<script type="text/javascript">
			    window.location = "../dashboard.php";
		  </script>
		<?php
		}else{
			?>
		<script type="text/javascript">
            swal("Login Failed!", "Invalid user access!", "error", {
	          	button: "Try Again",
	        	}).then(function() {
			    window.location = "../login.php";
	  		});
        </script>
		<?php
		}
	}

?>
</body>
</html>