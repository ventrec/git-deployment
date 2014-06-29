<?php

use gitDeployment\Config;
use gitDeployment\Deployment;
use gitDeployment\Tools;

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define settings
$settings = array(
    'log_filename' => 'gitlog.txt',
);

// Load required files
require('tools.php');
require('repositories.php');
require('config.php');
require('examples.php');
require('deployment.php');

// Define settings
Config::set('log_filename', 'gitlog.txt');
Config::set('repositories', $repositories);

$payload = Tools::filterPayload($json2);
// $payload = Tools::filterPayload($_POST['payload']);

$deployment = new Deployment($payload);

if ($deployment->isPayloadSet()) {
    $deployment->deploy();
}

// if ((isset($payload['pullrequest_merged']) && $payload['pullrequest_merged']['destination']['branch']['name'] === 'master')
//     || (isset($payload['commits']) && $payload['commits'][0]['branch'] === 'master') ) {
//     exec('/usr/bin/git reset --hard HEAD 2>&1', $outputReset);
//     exec('/usr/bin/git pull 2>&1', $output, $echoed);
//     logToFile(getPayloadType($payload) . ' --- ' . $echoed);
// }
