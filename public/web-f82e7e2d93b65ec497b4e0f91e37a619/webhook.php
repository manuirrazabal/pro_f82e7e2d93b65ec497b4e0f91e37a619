<?php
$secret = 'procor+vpemq100v1988';

try {
    file_put_contents('../../storage/logs/deploymentBatchTriggerTempFile.txt', date('m/d/Y h:i:s a') . " - push or Pull Request merge occurred on master.\r\n", FILE_APPEND);

    $payload = isset($_REQUEST['CONTENT']) ? $_REQUEST['CONTENT'] : null;
    if ($payload == NULL && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $payload = file_get_contents('php://input');
    }
    if(!$payload) exit();

    $webhook_hash = $_SERVER['HTTP_X_Hub_Signature']; // Webhook Hash sent in Header
    $local_hash = hash_hmac("hmac256", $payload, $secret);


    // $push = $payload['push'];
    // $new_push = $push['new'];
    // $branch_name = $new_push["name"];
    // $commit_hash = $new_push["target"]["hash"];
    if($local_hash == $webhook_hash) {
        echo "Webhook Hashes match. ";
        // file_put_contents('../../deploymentBatchTriggerTempFile.txt', date('m/d/Y h:i:s a') . " - push or Pull Request merge ocurred on master. Commit: ".$commit_hash."\r\n", FILE_APPEND);
        file_put_contents('../../storage/logs/deploymentBatchTriggerTempFile.txt', date('m/d/Y h:i:s a') . " - push or Pull Request merge occurred on master.\r\n", FILE_APPEND);
        echo 'DeploymentBatchTriggerTempFile created. Ready for scheduled task.';
    }
} catch(Exception $e) {
    echo 'Caught exception: '.$e->getMessage();
}
?>