<?php
require_once ('connect.php');
$name  = trim($_GET['name']);
$email = trim($_GET['email']);
$phone = trim($_GET['phone']);
$query = "UPDATE student_details SET email= '$email', phone = '$phone' WHERE name = '$name' ;";

$conn->query($query);
echo $query;
echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

?>