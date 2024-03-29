<link rel="stylesheet" href="css/styles.css">
<?php include 'nav.php' ?>
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
        print "<td>" . $value . "</td> ";
    }
    print "</tr>";
    $row = mysqli_fetch_array($result);
}
print "</table>";


?>
<div class="container"  method="post">
  <h1 style="color: black;">Delete an Employee entry</h1> 
  <form action="delete.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Please type the ID of the Employee you'd like to delete.</label>
      </div>
      <div class="col-75">
        <input type="text" name="deleted_value" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Delete">
    </div>
  </form>
</div> 
<?php include 'footer.php' ?>