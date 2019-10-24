<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "ms7i273jabfw"; 
$dbPassword = "G3t2work!"; 
$dbName     = "currencycops"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
?>