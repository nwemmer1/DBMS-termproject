<link rel="stylesheet" href="css/styles.css">
<?php include 'nav.php' ?>
<?php 
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

$sql = "UPDATE Employees set employee_id='$employee_id', first_name = '$first_name', last_name = '$last_name', phone_number = '$phone_number', title='$title', department='$department', teaches='$teaches', type_of_employment='$type_of_employment', email='$email', office_number='$office_number' where employee_id = '$employee_id'";


$result = mysqli_query($conn,$sql);

$sql = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees";
$result = mysqli_query($conn, $sql);


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
        print "<td>" . $value . "</td> ";
    }
    print "</tr>";
    $row = mysqli_fetch_array($result);
}
print "</table>";




 ?>
 <a href="index.php"><button>Home</button></a>
 <?php include 'footer.php' ?>