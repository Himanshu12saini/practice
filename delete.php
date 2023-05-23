<?php
include "config.php";

$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id = $id";
$result = mysqli_query($con,$sql);
if($result){
    header("location:restore.php");
    echo "deleted successfully";
}else{
    echo "error";
}
?>