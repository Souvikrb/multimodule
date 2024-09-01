<?php 
include '../include/config.php';



function addBonus($referral_code, $amount) {
    global $conn;
    // Update the user's bonus in the database
    $sql = "UPDATE users SET bonus = bonus + $amount WHERE referral_code = '$referral_code'";
    $query = $conn->query($sql);
    if($query){
        transaction_log($referral_code,$amount);
    }
}

function transaction_log($referral_code,$amount){
    global $conn;
    // Insert Transaction in the database
    $sql = "INSERT INTO `tbl_transaction`(`referral_code`, `amount`) VALUES ('$referral_code','$amount')";
    $query = $conn->query($sql);
}

function processReferralBonus($referralId) {
    global $conn;

    // Level 1
    if ($referralId) {
        addBonus($referralId, FIRST_LEVEL_REFERRAL_BONUS);

        // Get the referrer's parent (Level 2)
        $level2Sql = "SELECT parent_referral_code FROM users WHERE referral_code = '$referralId'";
        $level2Res = $conn->query($level2Sql);
        $level2ParentId = $level2Res->fetch_row()[0];

        // Level 2
        if ($level2ParentId) {
            addBonus($level2ParentId, SECOND_LEVEL_REFERRAL_BONUS);

            // Get the level 2 referrer's parent (Level 3)
            $level3Sql = "SELECT parent_referral_code FROM users WHERE referral_code = '$level2ParentId'";
            $level3Res = $conn->query($level3Sql);
            $level3ParentId = $level3Res->fetch_row()[0];

            
            // Level 3
            if ($level3ParentId) {
                addBonus($level3ParentId, THIRD_LEVEL_REFERRAL_BONUS);
            }
        }
    }
}



?>