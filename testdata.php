<?php
$i = 0;
require_once ('connect.php');
while ($i < 100) {

	$name  = trim(md5(time()), "");
	$tri   = substr("$name", 0, strlen($name)-4);
	$name  = trim($name, $tri).$i;
	$email = $name."@gmail.com";
	$phone = "9922992233";
	echo "$name";
	echo "\t";
	$query = "INSERT INTO `student_details` (name, email, phone) VALUES ('$name', '$email', '$phone');";
	$conn->query($query);
	//echo "$name";
	++$i;
}

?>