<link rel="stylesheet" href="css/styles.css">
<?php include 'nav.php' ?>
<?php 


$conn = mysqli_connect("127.0.0.1:3306", "dbms-staff", "admin", "demo");

// Check connection
if (!$conn) {
    echo "connection failed";
}
echo "Connected successfully";

$last_name = mysqli_real_escape_string($conn,$_REQUEST['search_for']);
$action = mysqli_real_escape_string($conn, $_REQUEST['action']);
$search_for = mysqli_real_escape_string($conn, $_REQUEST['search_for']);

if($action == 'name_search')
    $sql = "SELECT * FROM Scholarships WHERE scholarship_name='$search_for'";
else if ($action == 'department_search') {
    $sql = "SELECT * FROM Scholarships WHERE department_id ='$search_for'";
}

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
        print "<td>" . $value . "</td> ";
    }
    print "</tr>";
    $row = mysqli_fetch_array($result);
}
print "</table>";
?>
<?php include 'footer.php' ?>