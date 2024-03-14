<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"final project");

$user = $_POST['user'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "INSERT INTO `userinfodata`(`user`,`email`,`subject`,`message`) VALUES ('$user','$email','$subject','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>