<?php
include "config.php";
$id = $_GET['id'];
$sql = "UPDATE student SET deleted_at = 0 WHERE id = $id";
$result = mysqli_query($con,$sql);
if($result){
    header("location:restore.php");
}else{
    echo "error";
}
?>