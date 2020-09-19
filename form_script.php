<?php
$con = mysqli_connect("localhost", "root", "", "lifestyle_store") or die(mysqli_error($con));
session_start();
    $email= mysqli_real_escape_string($con, $_POST['email']);


$first_name= mysqli_real_escape_string($con, $_POST['first_name']);
$last_name= mysqli_real_escape_string($con, $_POST['last_name']);
$DoB = $_POST['DoB'];
$phone =  $_POST['phone'];
$designation =mysqli_real_escape_string($con, $_POST['designation']);
$gender = $_POST['gender'];
$hobbies = $_POST['hobbies'];


$user_registration_query = "insert into users_info(email, first_name, last_name,DoB, phone,designation,gender,hobbies) values ('$email', '$first_name', '$last_name', '$DoB' ,'$phone','$designation','$gender','$hobbies')";

$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
?> 



    