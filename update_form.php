<?php 
$conn = mysqli_connect("127.0.0.1:3306", "dbms-staff", "admin", "demo");

// Check connection
if (!$conn) {
    echo "connection failed";
}
echo "Connected successfully";



$sql = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees";

$result = mysqli_query($conn,$sql);



if(!$result)
{
    print "Error - the query could not be executed";
    $error = mysqli_error();
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
    for ($index = 0; $index < $num_fields; $index++){
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th>" . $value . "</th> ";
    }
    print "</tr>";
    $row = mysqli_fetch_array($result);
}
print "</table>";



 ?>


        <form action="update.php" method="post">
        
        <p>
        	Please enter the Employees updated information:
        	<br>
         IdNo:
            <input type="number" name="id" required>
            <br>
            <br>
        </p>
        <p>
            First Name:  
            <input type="text" name="first_name" required>
            <br>
            <br>
        </p>
        <p>
            Last Name:
            <input type="text" name="last_name" required>
            <br>
            <br>
        </p>
        <p>
            Phone Number:  
            <input type="text" name="phone_number" required>
            <br>
            <br>
        </p>
        <p>
            Title: 
            <input type="text" name="title" required>
            <br>
            <br>
        </p>
        <p>
            Department:  
            <input type="text" name="department" required>
            <br>
            <br>
        </p>
        <p>
            What do they teach? 
            <input type="text" name="teaches" required>
            <br>
            <br>
        </p>
        <p>
            What type of employment are they? (full-time/part-time): 
            <input type="text" name="type_of_employment" required>
            <br>
            <br>
        </p>
        <p>
            Email: 
            <input type="text" name="email" required>
            <br>
            <br>
        </p>
        <p>
            Office Number?
            <input type="text" name="office_number" required>
            <br>
            <br>
        </p>
        <input type="submit" value="Submit">

</form>
        </p>
        <input type="submit" value="Search">

