<?php
date_default_timezone_set('Europe/Berlin');

//load system config
require_once 'config.php';	

//settings for env
if($config['debug']) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}


//autoload composer dependencies
require_once 'vendor/autoload.php';
require_once 'core/LabworxMVC.php';

// start app
$app = new LabworxMVC;