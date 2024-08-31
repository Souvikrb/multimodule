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

	if (isset($_POST['submit']) && !empty($_SESSION['uid'])) {
		$uid = $_SESSION['uid'];
		$banker_name = $_POST['banker_name'];
		$ifsc_code = $_POST['ifsc_code'];
		$bank_name = $_POST['bank_name'];
		$account_no = $_POST['account_no'];

		if (!empty($_FILES["aadhar"]["name"])) {
          $aadhar = time()."-".$_FILES["aadhar"]["name"]; 
          $tempaadhar = $_FILES["aadhar"]["tmp_name"];    
          $folder = "../kyc-files/".$aadhar;
          move_uploaded_file($tempaadhar, $folder);
        }
		
		if (!empty($_FILES["pan"]["name"])) {
          $pan = time()."-".$_FILES["pan"]["name"]; 
          $temppan = $_FILES["pan"]["tmp_name"];    
          $folder1 = "../kyc-files/".$pan;
          move_uploaded_file($temppan, $folder1);
        }
		
		if (!empty($_FILES["can_chq"]["name"])) {
          $can_chq = time()."-".$_FILES["can_chq"]["name"]; 
          $tempcan_chq = $_FILES["can_chq"]["tmp_name"];    
          $folder2 = "../kyc-files/".$can_chq;
          move_uploaded_file($tempcan_chq, $folder2);
        }
		
		if (!empty($_FILES["p_photo"]["name"])) {
          $p_photo = time()."-".$_FILES["p_photo"]["name"]; 
          $tempp_photo = $_FILES["p_photo"]["tmp_name"];    
          $folder = "../kyc-files/".$p_photo;
          move_uploaded_file($tempp_photo, $folder);
        }

        $chk_kyc = "SELECT ifsc_code, account_no FROM `users` WHERE id = '$uid' and ifsc_code = '' and account_no = ''";
        $chk_kyc_res = $conn->query($chk_kyc);

        if ($chk_kyc_res->num_rows < 1) {
        	$upd_kyc = "UPDATE `users` SET `banker_name`='$banker_name',`ifsc_code`='$ifsc_code',`bank_name`='$bank_name',`account_no`='$account_no',`aadhar`='$aadhar',`pan`='$pan',`can_chq`='$can_chq',`p_photo`='$p_photo' WHERE id = '$uid'";
        	$upd_kyc_res = $conn->query($upd_kyc);
        	
        	if ($upd_kyc_res) {
        		?>
				<script type="text/javascript">
					swal("Success!", "Your KYC updated successfully!", "success", {
						button: "Ok",
					}).then(function() {
					window.location = "../user-profile.php";
					});
        		</script>
				<?php
        	}
        	
        }
	}
?>
</body>
</html>