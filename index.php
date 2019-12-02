<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Staff Directory</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="author" href="humans.txt">
    </head>
       <body>
        <?php include 'config.php' ?>
        <?php include 'templates/nav.php' ?>
    	
        <div class="mainContainer">
            <div class="searchLeft">
                <form method="post">
                    <h1>Search</h1>
                    <label>
                        <input type="radio" name="search" value="byRoom" checked>Room
                    </label>
                    <label>
                        <input type="radio" name="search" value="byLastname">Lastname
                    </label>
                    <label>
                        <input type="radio" name="search" value="byDepot">Department
                    </label>
                    <label>
                        <input type="radio" name="search" value="byScholarship">Scholarship
                    </label><br>
                    <input type="text" name="searchBar"><br>
                    <input type="submit" name="searchEnter" value="Search">
                    <input type="submit" name="dbSelect" value="Display All Employees">
                </form>
                <button onclick="exportTable()">Export Table Data To CSV File</button>
                <br>
                <div class="tooltip">
                    <img src="images/info-icon.jpg" style="height: 20px;">
                    <span class="tooltiptext">Example Queries:<br>
                                                Room: CAS 229<br>
                                                Lastname: Cheng<br>
                                                Department: Computer Science<br>
                                                Scholarship: By Depot Name: Cpmputer Science OR By Scholarship name: Akron Guarantee Scholarship</span>
                </div>
            </div>
            <div class="resultsRight">
                <h1>Results</h1>
                <div>
                    <div class="dbResults">
                        <div class="scrollmenu">
                    <?php 

                    if (isset($_POST['dbSelect'])) {
                        dbSelectEmployees(null);
                    }
                    if (isset($_POST['searchEnter'])) {
                        $searchVar = $_POST['searchBar'];
                        //echo $searchVar;
                        $sql = " ";
                        if ($_POST['search'] == 'byRoom') {
                            $sql = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees WHERE office_number='$searchVar'";
                            dbSelectEmployees($sql);
                        }
                        if ($_POST['search'] == 'byLastname') {
                            $sql = "SELECT employee_id AS 'ID',  first_name AS 'First Name', last_name AS 'Last Name', phone_number AS 'Phone', title AS 'Title', department AS 'Department',  teaches AS 'Classes Normally Taught', type_of_employment AS 'Full-Time/Part-Time',  email AS 'Email', office_number AS 'Office' FROM Employees WHERE last_name='$searchVar'";
                            dbSelectEmployees($sql);
                        }
                        if ($_POST['search'] == 'byDepot') {
                            departmentTransaction($searchVar);
                        }
                        if ($_POST['search'] == 'byScholarship') {
                            if (strcasecmp($searchVar, 'Computer Science') == 0) {
                                $sql = "SELECT scholarship_id AS 'Scholarship ID', department_id AS 'Department ID', scholarship_name AS 'Scholarship Name', requirements AS 'Requirements', cashAmount AS 'Prize', body AS 'Body' FROM Scholarships WHERE department_id = '1'";
                            }
                            else if (strcasecmp($searchVar, 'Mathematics') == 0) {
                                $sql = "SELECT scholarship_id AS 'Scholarship ID', department_id AS 'Department ID', scholarship_name AS 'Scholarship Name', requirements AS 'Requirements', cashAmount AS 'Prize', body AS 'Body' FROM Scholarships WHERE department_id = '2'";
                            }
                            else if (strcasecmp($searchVar, 'University of Akron') == 0) {
                                $sql = "SELECT scholarship_id AS 'Scholarship ID', department_id AS 'Department ID', scholarship_name AS 'Scholarship Name', requirements AS 'Requirements', cashAmount AS 'Prize', body AS 'Body' FROM Scholarships WHERE department_id = '3'";
                            }
                            else {
                                $sql = "SELECT scholarship_id AS 'Scholarship ID', department_id AS 'Department ID', scholarship_name AS 'Scholarship Name', requirements AS 'Requirements', cashAmount AS 'Prize', body AS 'Body' FROM Scholarships WHERE scholarship_name='$searchVar'";
                            }
                            dbSelect($sql, 'Scholarships');
                        }
                        //echo $sql;
                    }


                    ?>
                </div>
                </div>
                </div>
            </div>
        </div>

        <p style="color: white;">Stage 5: Final Demo</p>

        <?php include 'templates/footer.php' ?>
    </body>
</html>