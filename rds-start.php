<?php

require 'config.php';
require 'vendor/autoload.php';

use Aws\Rds\RdsClient;

$rdsClient = new RdsClient([
    'region' => 'us-west-2',
    'version' => '2014-10-31',
    'credentials' => [
        'key'    => $awsKey,
        'secret' => $awsPwd,
    ],
]);

$result = $rdsClient->startDBInstance([
    'DBInstanceIdentifier' => $rdsInstance,
]);

?>