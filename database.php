<?php
$servername="localhost";
$username="root";
$password="";
$database="quanlysanpham";

$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn){
    die("Connect Fail:".mysqli_connect_error());
}
else
    echo "Ket noi thanh cong"
?>