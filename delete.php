<?php
require_once ('connect.php');
$tar   = $_GET['name'];
$query = "DELETE FROM student_details WHERE name='$tar' ";
if ($conn->query($query) === TRUE) {
	echo "Record deleted successfully";
} else {
	echo "Error deleting record: ".$conn->error;
}
echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";
?>