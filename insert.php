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
                    <h1>Insert</h1>
                    <div style="text-align: left;">
                      <div>
                        <label for="fname">IdNo:</label>
                      </div>
                      <div>
                        <input type="number" name="id" required>
                      </div>  
                      <div>
                        <label for="lname">First Name:</label>
                      </div>
                      <div>
                        <input type="text" name="first_name" required>
                      </div>
                      <div>
                        <label for="country">Last Name:</label>
                      </div>
                      <div>
                        <input type="text" name="last_name" required>
                      </div>
                      <div>
                        <label for="subject">Phone Number:</label>
                      </div>
                      <div>
                        <input type="text" name="phone_number" required>
                      </div>
                      <div>
                        <label for="subject">Title:</label>
                      </div>
                      <div>
                        <input type="text" name="title" required>
                      </div>
                      <div>
                        <label for="subject">Department:</label>
                      </div>
                      <div>
                        <input type="text" name="department" required>
                      </div>
                       <div>
                        <label for="subject">What do they teach? </label>
                      </div>
                      <div>
                        <input type="text" name="teaches" required>
                      </div>
                      <div>
                        <label for="subject">What type of employment are they? (full-time/part-time):</label>
                      </div>
                      <div>
                        <input type="text" name="type_of_employment" required>
                      </div>
                      <div>
                        <label for="subject">Email:</label>
                      </div>
                      <div>
                        <input type="text" name="email" required>
                      </div>
                      <div>
                        <label for="subject">Office Number?</label>
                      </div>
                      <div>
                        <input type="text" name="office_number" required>
                      </div>
                    </div>
                    <input type="submit" name="insert" value="Add Employee">
                </form>
            </div>
            <div class="resultsRight">
                <h1>Results</h1>
                <div>
                    <div class="dbResults">
                        <div class="scrollmenu">
                        <div id="rmallemployees">
                            <?php  displayAllEmployees(null); ?>
                        </div>
                        <?php 

                        if (isset($_POST['insert'])) {
                            insertEmployee();
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
<!--     <script type="text/javascript">
        function removeTable() {
            var elem = document.getElementById('rmallemployees');
            elem.parentNode.removeChild(elem);
        }
    </script> -->
</html>