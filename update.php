<?php
include "config.php";


if(isset($_POST['submit'])){
   $id = $_GET['id'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password']; 
   $gender = $_POST['gender']; 
   $course = implode(',',$_POST['course']); 
   $city = $_POST['city']; 

   $sql = "UPDATE student SET `name`='$name',`email`='$email',`password`='$password',`gender`='$gender',`course`='$course',`city`='$city' WHERE id = $id";

   $result=mysqli_query($con,$sql);
   if($result){
    echo "data updated successfully";
    header("location:index.php");
   }else{
    echo "error";
   }
}
?>