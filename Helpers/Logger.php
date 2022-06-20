<?php

function logger($log) {
    $logFileName = APP_LOG_PATH . date('Y-m', time()) . "-" . 'webhook.log';
    if (!file_exists($logFileName)) {
        file_put_contents($logFileName, '');
    }
    $ip = $_SERVER['REMOTE_ADDR']; // Client Ip
    $time = date('Y-m-d H:i:s', time()); // timestamp
    $contents = file_get_contents($logFileName);
    $contents .= "$ip\t$time\t$log\r";
    file_put_contents($logFileName, $contents);
}