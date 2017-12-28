<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '172.19.0.2';
$databaseName = 'johan';
$databaseUsername = 'root';
$databasePassword = 'root';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
