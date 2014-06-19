<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$payload = json_decode(stripslashes($json2), true);
$payload = json_decode(stripslashes($_POST['payload']), true);

if ((isset($payload['pullrequest_merged']) && $payload['pullrequest_merged']['destination']['branch']['name'] === 'master')
    || (isset($payload['commits']) && $payload['commits'][0]['branch'] === 'master') ) {
    exec('/usr/bin/git reset --hard HEAD 2>&1', $outputReset);
    exec('/usr/bin/git pull 2>&1', $output, $echoed);
    logToFile(getPayloadType($payload) . ' --- ' . $echoed);
}

function getPayloadType($payload)
{
    if (isset($payload['pullrequest_merged'])) {
        return 'pullrequest merge';
    } elseif (isset($payload['commits'])) {
        return 'commit';
    }
}
