<?php
$conn = mysqli_connect("127.0.0.1:3306", "dbms-staff", "admin", "demo");

// Check connection
if (!$conn) {
    echo "connection failed";
}
echo "Connected successfully";

$department = mysqli_real_escape_string($conn,$_REQUEST['department']);

$sql = "SELECT department_name AS 'Department', building AS 'Building', numOfEmployees AS 'Employees' FROM Departments WHERE department_name='$department'";

$result = mysqli_query($conn,$sql);



if(!$result)
{
    print "Error - the query could not be executed";
    $error = mysqli_error();
    print "<p>" . $error . "</p>";
    exit;
}
$num_rows = mysqli_num_rows($result);
print "<table><caption> <h2> Results ($num_rows) </h2> </caption>";
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


$sql = "SELECT first_name AS 'First Name',last_name AS 'Last Name',title AS 'Title', teaches AS 'Classes Normally Taught' FROM Employees WHERE department='$department'";

$result = mysqli_query($conn,$sql);


if(!$result)
{
    print "Error - the query could not be executed";
    $error2 = mysqli_error();
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
    for ($index = 0; $index < $num_fields; $index++){
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<th>" . $value . "</th> ";
    }
    print "</tr>";
    $row = mysqli_fetch_array($result);
}
print "</table>";


?>