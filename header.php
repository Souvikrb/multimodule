<?php include 'include/config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Admin</title>

	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Style-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
<?php
    $uid = $_SESSION['uid'];
    $chk_prf = "SELECT id from users where id = '$uid'";
    $chk_prf_res = $conn->query($chk_prf);
    if ($chk_prf_res->num_rows < 1) {
?>
<script type="text/javascript">
    swal("Sorry!", "You have not logged! Please login.", "warning", {
            button: "Login",
        }).then(function() {
            window.location = "login.php";
        });
</script>
<?php
    die;
    }
?>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
	<!-- <div id="loader"></div> -->
