<style>
#popup { color: #000; background-color: #c0c0c0; }

#popup a, #popup a:visited {
  position: relative;
  display: block;
  width: 130px;
  line-height: 30px;
  text-align: right;
  padding: 0 10px;
  margin: 0;
  border: 1px solid #666;
  text-decoration: none;
  font-size: 1em;
  font-weight: bold;
}

#popup a span {
  display: none;
}

#popup a:hover { 
  background-color: #e9e9e2; 
}

/* the IE correction rule */
#popup a:hover  {
  color: #f00; 
  background-color: #e9e9e2;
  text-indent: 0; /* added the default value */
}

#popup a:hover span {
  display: block;
  position: absolute;
  top: 0px;
  right: 170px;
  width: 320px;
  margin: 0px;
  padding: 10px;
  color: #335500;
  font-weight: normal;
  background: #e5e5e5;
  text-align: left;
  border: 1px solid #666;
}
#popup img{
  width:500px;
  height:500px;
}
</style>

<?php 

function displayAllEmployees($sql)
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
	print "<table><caption> <h2> All Employees ($num_rows) </h2> </caption>";
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

function insertEmployee()
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	//echo "Connected successfully<br>";


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
		echo "The record was added successfully <br>";

	}
	else
	{
		echo "There was an ERROR: We were not able to execute $sql. <br> " . mysqli_error($conn);
		echo "<br>";
	}

	echo "Entry Inserted:";
	$insertedEntry = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees WHERE employee_id = '$employee_id'";
	displayAllEmployees($insertedEntry);
	mysqli_close($conn);
	echo '<script type="text/javascript">',
     'removeTable();',
     '</script>';
	displayAllEmployees(null);
}

function update()
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	// echo "Connected successfully";

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

	$sql = "UPDATE Employees set employee_id='$employee_id', first_name = '$first_name', last_name = '$last_name', phone_number = '$phone_number', title='$title', department='$department', teaches='$teaches', type_of_employment='$type_of_employment', email='$email', office_number='$office_number' where employee_id = '$employee_id'";


	$result = mysqli_query($conn,$sql);

	if(!$result)
	{
	    print "Error - the query could not be executed";
	    $error = mysqli_error();
	    print "<p>" . $error . "</p>";
	    exit;
	}
	echo "Entry Updated:";
	$updatedEntry = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees WHERE employee_id = '$employee_id'";
	displayAllEmployees($updatedEntry);
	mysqli_close($conn);
	echo '<script type="text/javascript">',
     'removeTable();',
     '</script>';
	displayAllEmployees(null);
}

function delete()
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	// echo "Connected successfully";
	$deleted_value = mysqli_real_escape_string($conn,$_REQUEST['deleted_value']);

	echo "Entry Deleted:";
	$deletedEntry = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees WHERE employee_id = '$deleted_value'";
	displayAllEmployees($deletedEntry);

	$sql = "DELETE FROM Employees where employee_id = '$deleted_value'";

	$result = mysqli_query($conn,$sql);

	if(!$result)
	{
	    print "Error - the query could not be executed";
	    $error = mysqli_error();
	    print "<p>" . $error . "</p>";
	    exit;
	}
	mysqli_close($conn);
	echo '<script type="text/javascript">',
     'removeTable();',
     '</script>';
	displayAllEmployees(null);
}

?>

    <script type="text/javascript">
        function removeTable() {
            var elem = document.getElementById('rmallemployees');
            elem.parentNode.removeChild(elem);
        }
    </script>