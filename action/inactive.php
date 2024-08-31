<?php
include '../include/config.php';

if (!empty($_POST['user_id'])) {
    $id = $_POST['user_id'];
    $sel_cand = "SELECT id from users where id = '$id'";
    $res_cand = $conn->query($sel_cand);

    if ($res_cand->num_rows > 0) {
        $upd_cand = "UPDATE users set status = '0' where id = '$id'";
        if($conn->query($upd_cand)){
			echo 1; // Success
		}
		else{
			echo 2; // Error
		}
    }
}
?>
