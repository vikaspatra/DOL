<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$s = "INSERT INTO contact (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";

$result = mysqli_query($con, $s);

?>

