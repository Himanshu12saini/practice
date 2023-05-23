<?php
include "config.php";
$id = $_GET['id'];
$sql = "UPDATE student SET deleted_at = 1 WHERE id = $id";
$result = mysqli_query($con,$sql);

if($result){
    header("location:index.php");
}else{
    echo "error";
}
?>