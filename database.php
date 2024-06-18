<?php
$db_server = "127.0.0.7:3307";
$db_user = "root";
$db_password = "";
$db_name = "mini";
$conn = "";

$conn = mysqli_connect($db_server,$db_user,$db_password,$db_name);

if(!$conn) echo " not connected";
// else echo "connected";

?>