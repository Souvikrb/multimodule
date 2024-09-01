<?php
function addBonus($userId, $amount) {
    // Update the user's bonus in the database
    $sql = "UPDATE users SET bonus = bonus + :amount WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['amount' => $amount, 'id' => $userId]);
}

function processReferralBonus($newUserId, $referralId) {
    global $pdo;

    // Level 1
    if ($referralId) {
        addBonus($referralId, 100);

        // Get the referrer's parent (Level 2)
        $stmt = $pdo->prepare("SELECT referral_id FROM users WHERE id = :id");
        $stmt->execute(['id' => $referralId]);
        $level2ParentId = $stmt->fetchColumn();

        // Level 2
        if ($level2ParentId) {
            addBonus($level2ParentId, 50);

            // Get the level 2 referrer's parent (Level 3)
            $stmt = $pdo->prepare("SELECT referral_id FROM users WHERE id = :id");
            $stmt->execute(['id' => $level2ParentId]);
            $level3ParentId = $stmt->fetchColumn();

            // Level 3
            if ($level3ParentId) {
                addBonus($level3ParentId, 20);
            }
        }
    }
}

// Example of when a new user joins
$newUserId = 10; // ID of the new user
$referralId = 5; // ID of the user who referred this new user

processReferralBonus($newUserId, $referralId);
?>
