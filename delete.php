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
                    <h1>Delete</h1>
                     <div style="text-align: left;">
                        <div>
                            <label for="fname">Please type the ID of the Employee you'd like to delete.</label>
                        </div>
                        <div>
                            <input type="text" name="deleted_value" required>
                        </div>
                    </div>
                    <input type="submit" name="delete" value="Delete Entry">
                </form>
            </div>
            <div class="resultsRight">
                <h1>Results</h1>
                <div>
                    <div class="dbResults">
                        <div class="scrollmenu">
                        <div id="rmallemployees">
                            <?php  dbSelectEmployees(null); ?>
                        </div>
                        <?php 

                        if (isset($_POST['delete'])) {
                            delete();
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