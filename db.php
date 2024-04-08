<?php
$host="localhost";
$db="animated";
$username="root";
$password="";

$con = mysqli_connect($host, $username, $password, $db);

if (mysqli_connect_errno()){
    echo"connection fail";
    exit();
}
echo "connection success";
?>