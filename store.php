<?php 
include "config.php";

$name = $email = $password = $gender = $course = $city = "";
$validation = [];



if(empty($_POST['name'])){
    $validation['nameErr'] = "Name is required";
}else{
    $name = test_input($_POST['name']);
}

if(empty($_POST['email'])){
    $validation['emailErr'] = "email is required";
}else{
    $email = test_input($_POST['email']);
}

if(empty($_POST['password'])){
    $validation['passwordErr'] = "Password is required";
}else{
    $password = md5(test_input($_POST['password']));
}

if(empty($_POST['gender'])){
    $validation['genderErr'] = "Gender is required";
}else{
    $gender = test_input($_POST['gender']);
}

if(empty($_POST['course'])){
    $validation['courseErr'] = "course is required";
}else{
    $course = implode(',',$_POST['course']);
}


if(empty($_POST['city'])){
    $validation['cityErr'] = "City is required";
}else{
    $city = test_input($_POST['city']);
}


$sql = "INSERT INTO student(name,email,password,gender,course,city)
VALUES('$name','$email','$password','$gender','$course','$city')";
// print_r($sql);
// die;
if(count($validation)==0){
    if(mysqli_query($con,$sql)){
    echo "data inserted successfully";
    header('location:index.php');
    }else{
        echo "error";
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
