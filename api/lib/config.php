<?php 
define('HOST', '51.75.92.73');
define('PORT', 13895);
define('DEBUG', true);

header('Content-Type: application/json');

if (DEBUG)
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}
?>
