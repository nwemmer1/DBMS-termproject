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
                        <input type="radio" name="search" value="byDepot">Depatment
                    </label>
                    <label>
                        <input type="radio" name="search" value="byScholarship">Scholarship
                    </label>
                    <input type="text" name="searchBar">
                    <input type="submit" name="searchEnter" value="Search">
                    <input type="submit" name="displayAllEmployees" value="Display All Employees">
                </form>
            </div>
            <div class="resultsRight">
                <h1>Results</h1>
                <div>
                    <div class="dbResults">
                        <div class="scrollmenu">
                    <?php 

                    if (isset($_POST['displayAllEmployees'])) {
                        displayAllEmployees(null);
                    }
                    if (isset($_POST['searchEnter'])) {
                        $searchVar = $_POST['searchBar'];
                        echo $searchVar;
                        $sql = " ";
                        if ($_POST['search'] == 'byRoom') {
                            $sql = "SELECT * FROM Employees WHERE office_number='$searchVar'";
                        }
                        if ($_POST['search'] == 'byLastname') {
                            $sql = "SELECT * FROM Employees WHERE last_name='$searchVar'";
                        }
                        if ($_POST['search'] == 'byDepot') {
                            $sql = "SELECT * FROM Employees WHERE department='$searchVar'";
                        }
                        if ($_POST['search'] == 'byScholarship') {
                            if (strcasecmp($searchVar, 'Computer Science') == 0) {
                                $sql = "SELECT * FROM Scholarships WHERE department_id = '1'";
                            }
                            else if (strcasecmp($searchVar, 'Mathematics') == 0) {
                                $sql = "SELECT * FROM Scholarships WHERE department_id = '2'";
                            }
                            else if (strcasecmp($searchVar, 'University of Akron') == 0) {
                                $sql = "SELECT * FROM Scholarships WHERE department_id = '3'";
                            }
                            else {
                                $sql = "SELECT * FROM Scholarships WHERE scholarship_name='$searchVar'";
                            }
                        }
                        echo $sql;
                        displayAllEmployees($sql);
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