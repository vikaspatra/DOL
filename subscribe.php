<?php

session_start();
header('location:index.html');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$email = $_POST['subscribe1'];

$s = "INSERT INTO subscribe (email) VALUES ('$email')";

$result = mysqli_query($con, $s);

?>