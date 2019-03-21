<?php
require_once('vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
$time_start = time();
error_reporting(E_ALL);
ini_set('display_errors', 1);

function req(){
    echo 1;
    req();
}

req();
$time_end = time();

$log = new Logger('time');
$log->pushHandler(new StreamHandler('log/time.log', Logger::DEBUG));
$log->debug(memory_get_usage());

$log->debug($time_end - $time_start);




