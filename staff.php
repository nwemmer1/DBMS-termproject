<?php

// Create connection
$conn = mysqli_connect("127.0.0.1:3306", "dbms-staff", "admin", "demo");

// Check connection
if (!$conn) {
    echo "connection failed";
}
echo "Connected successfully";

$employee_id = mysqli_real_escape_string($conn,$_REQUEST['id']);
$first_name = mysqli_real_escape_string($conn,$_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn,$_REQUEST['last_name']);
$phone_number = mysqli_real_escape_string($conn,$_REQUEST['phone_number']);
$title = mysqli_real_escape_string($conn,$_REQUEST['title']);
$department = mysqli_real_escape_string($conn,$_REQUEST['department']);
$teaches = mysqli_real_escape_string($conn,$_REQUEST['teaches']);
$type_of_employment = mysqli_real_escape_string($conn,$_REQUEST['type_of_employment']);
$email = mysqli_real_escape_string($conn,$_REQUEST['email']);
$office_number = mysqli_real_escape_string($conn,$_REQUEST['office_number']);





$sql = "INSERT INTO Employees (employee_id,first_name,last_name,phone_number,title,department,teaches,type_of_employment, email, office_number) VALUES ('$employee_id','$first_name', '$last_name', '$phone_number', '$title','$department','$teaches','$type_of_employment', '$email', '$office_number')";

if(mysqli_query($conn, $sql))
{
	echo "The record was added successfully";
}
else
{
	echo "There was an ERROR: We were not able to execute $sql. " . mysqli_error($conn);
}


mysqli_close($conn);

?>