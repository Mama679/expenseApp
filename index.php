<?php
 error_reporting(E_ALL);
 date_default_timezone_set("America/Bogota");
 ini_set('ignore_repeated_errors',true);
 ini_set('display_errors',false);
 ini_set('log_errors',true);
 ini_set("error_log","errorLogs.log");
// error_log("Inicio de aplicacion Web");
require_once 'libs/app.php';

$app = new App();

?>