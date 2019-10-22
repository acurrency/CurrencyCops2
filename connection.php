<?php



$dbname = 'currencycops';
$dbuser = 'ms7i273jabfw';
$dbpass = 'G3t2work!';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Unable to Connect to '$dbhost'");
mysqli_select_db($link, $dbname) or die("Could not open the db '$dbname'");
?>