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
	print "<table id='tableExport'><caption> <h2> Employees ($num_rows) </h2> </caption>";
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

function departmentTransaction($depotEntered)
{
	$conn = mysqli_connect(SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	$department = mysqli_real_escape_string($conn,$depotEntered);
	// Check connection
	if (!$conn) {
	    echo "connection failed";
	}
	try 
	{
    	$conn->autocommit(FALSE); // i.e., start transaction
    	$query = "SELECT department_name AS 'Department', building AS 'Building', numOfEmployees AS 'Employees' FROM Departments WHERE department_name='$department'";
	    $result = $conn->query($query);
    	if ( !$result ) 
    	{
        	$result->free();
       	 	throw new Exception($conn->error);
    	}
    	dbSelect($query, 'Department');
	    $query = "SELECT first_name AS 'First Name',last_name AS 'Last Name',title AS 'Title', teaches AS 'Classes Normally Taught' FROM Employees WHERE department='$department'";
	    //---
	    $result = $conn->query($query);
    	if ( !$result ) 
    	{
        	$result->free();
        	throw new Exception($conn->error);
    	}
    	dbSelect($query, 'Employees');
    	$conn->commit();
    	$conn->autocommit(TRUE);
	}	
	catch ( Exception $e ) 
	{
	    // before rolling back the transaction, you'd want
	    // to make sure that the exception was db-related
	    $conn->rollback(); 
	    $conn->autocommit(TRUE); // i.e., end transaction   
	}
}

?>

<script type="text/javascript">
	
function download_csv(csv, filename) {
    var csvFile;
    var downloadLink;

    // CSV FILE
    csvFile = new Blob([csv], {type: "text/csv"});

    // Download link
    downloadLink = document.createElement("a");

    // File name
    downloadLink.download = filename;

    // We have to create a link to the file
    downloadLink.href = window.URL.createObjectURL(csvFile);

    // Make sure that the link is not displayed
    downloadLink.style.display = "none";

    // Add the link to your DOM
    document.body.appendChild(downloadLink);

    // Lanzamos
    downloadLink.click();
}

function export_table_to_csv(html, filename) {
	var csv = [];
	var rows = document.querySelectorAll("table tr");
	
    for (var i = 0; i < rows.length; i++) {
		var row = [], cols = rows[i].querySelectorAll("td, th");
		
        for (var j = 0; j < cols.length; j++) {
        	//console.log(cols[j].innerText.replace(/,/g, ";"));
        	row.push(cols[j].innerText.replace(/,/g, ";"));
        } 
        
		csv.push(row.join(","));		
	}

    // Download CSV
    download_csv(csv.join("\n"), filename);
}

function exportTable() {
    var html = document.querySelector("table").outerHTML;
	export_table_to_csv(html, "ua_faculty_export.csv");
}

</script>