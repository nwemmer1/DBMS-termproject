<?php 

function dbSelectEmployees($sql)
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	// else echo "Connected successfully";
	if ($sql == null) {
		$sql = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees";
	}

	$result = mysqli_query($conn,$sql);

	if(!$result)
	{
	    print "Error - the query could not be executed";
	    $error = mysqli_error($conn);
	    print "<p>" . $error . "</p>";
	    exit;
	}
	$num_rows = mysqli_num_rows($result);
	print "<table><caption> <h2> Employees ($num_rows) </h2> </caption>";
	print "<tr align = 'center'>";

	$row = mysqli_fetch_array($result);
	$num_fields = mysqli_num_fields($result);

	// Produce the column labels
	$keys = array_keys($row);
	for ($index = 0; $index < $num_fields; $index++) 
	    print "<th>" . $keys[2 * $index + 1] . "</th>";
	print "</tr>";


	for ($row_num = 0; $row_num < $num_rows; $row_num++) 
	{
	    print "<tr align = 'center'>";
	    $values = array_values($row);


	    for ($index = 0; $index < $num_fields; $index++)
	    {
	        $value = htmlspecialchars($values[2 * $index + 1]);

	        if($index == $num_fields-1)
	        {
	            $valpath = str_replace(' ', '_', $value);

	            $val = "<td><div id='popup'><a>" . $value . "<span><img class='imghov' src='images/" . $valpath . ".jpg'></span></a></div></td>";
            	print $val;
	        }
	        else
	        {
	            print "<td>" . $value . "</td> ";
	        }
	    }
	    

	    print "</tr>";
	    $row = mysqli_fetch_array($result);
	}
	print "</table>";

}

?>