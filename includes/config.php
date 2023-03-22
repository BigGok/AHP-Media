<?php
define('DB_SERVER','localhost');
define('DB_USER','ejtmyl3hvuxw_admin');
define('DB_PASS' ,'ahp@1234567890');
define('DB_NAME','ejtmyl3hvuxw_newsportal');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>