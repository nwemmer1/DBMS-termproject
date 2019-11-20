<?php 

function displayAllEmployees()
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	else echo "Connected successfully";

}

?>