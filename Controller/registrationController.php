<?php 
include "controller.php";
function registration()
{
    if (!empty($_POST['number']) && !empty($_POST['email'])) {

		$name = $conn -> real_escape_string($_POST['name']);
		$number = $conn -> real_escape_string($_POST['number']);
		$email = $conn -> real_escape_string($_POST['email']);
		$parent_referral_code = $conn -> real_escape_string($_POST['referral_code']);
		$password = $conn -> real_escape_string($_POST['password']);
		$referral_code = 'G'.rand(1111111111, 9999999999);

		$check_user = "SELECT id FROM `users` WHERE email_id = '$email' or mobile = '$number'";
		$check_user_res = $conn->query($check_user);
		if ($check_user_res->num_rows > 0) {
			return array('status'=>'warning','message'=>'You have already registered with us!','text'=>'Oops!');
		}else{
			$inser_sql = "INSERT INTO `users`(`name`, `mobile`, `email_id`, `parent_referral_code`, `referral_code`, `password`, `status`) VALUES ('$name','$number','$email','$parent_referral_code', '$referral_code', '$password', '1')";
			$inser_sql_res = $conn->query($inser_sql);
			if ($inser_sql_res) {
				processReferralBonus($parent_referral_code);
                return array('status'=>'success','message'=>'You have registered successfully! Please wait for the approval.!','test'=>'Great!');
				
			}
		}

	}
}

?>