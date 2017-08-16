<html>
<head>
<title>Add Student</title>
</head>
<body>
<?php
$name = trim($_GET['name']);

$email = trim($_GET['email']);

$phone = trim($_GET['phone']);

// echo  $name, $email, $city, $state, $phone, $birth_date, $CGPA;
require_once ('connect.php');

$query = "INSERT INTO `student_details` (name, email, phone) VALUES ('$name', '$email', '$phone');";
//echo"\n";
//echo $query;
if ($conn->query($query) === TRUE) {
	echo "New record created successfully";
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";

?>

</body>
</html>