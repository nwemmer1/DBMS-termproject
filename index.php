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
                        <input type="radio" name="search" value="byRoom">Room
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
                    <input type="submit" name="displayAllEmployees" value="Display All Employees">
                </form>
            </div>
            <div class="resultsRight">
                <h1>Results</h1>
                <div>
                    <div class="dbResults">
                    <?php 

                    if (isset($_POST['displayAllEmployees'])) {
                        displayAllEmployees(null);
                    }


                    ?>
                </div>
                </div>
            </div>
        </div>

        <p style="color: white;">Stage 5: Final Demo</p>

        <?php include 'templates/footer.php' ?>
    </body>
</html>