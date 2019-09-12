<?php
$secret = 'procor+vpemq100v1988';
$destiny_file = '../../storage/logs/deploymentBatchTriggerTempFile.txt';

try {
    file_put_contents($destiny_file, date('m/d/Y h:i:s a') . " - Starting to develop.\r\n", FILE_APPEND);

    $payload = isset($_REQUEST['CONTENT']) ? $_REQUEST['CONTENT'] : null;
    if ($payload == NULL && $_SERVER['REQUEST_METHOD'] == 'POST') {
        $payload = file_get_contents('php://input');
    }
    if(!$payload) exit();

    $webhook_hash = $_SERVER['HTTP_X_Hub_Signature']; // Webhook Hash sent in Header
    $local_hash = hash_hmac("hmac256", $payload, $secret);

    if ($local_hash == $webhook_hash) {
        file_put_contents($destiny_file , date('m/d/Y h:i:s a') . " - push or Pull Request merge occurred on master.\r\n", FILE_APPEND);
    }
} catch(Exception $e) {
    file_put_contents($destiny_file, date('m/d/Y h:i:s a') . 'Caught exception: '. $e->getMessage() . "\r\n", FILE_APPEND);
}

?>