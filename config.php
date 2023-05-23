<?php
$server="localhost";
$username="root";
$password="";
$db="15_may";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    echo "connect successfully";
}else{
    echo "error";
}
?>