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
    <style type="text/css">
        body{
            text-align: center;
            background-color: #336EA1;
        }
        h1{
            font-size: 5em;
            color: white;
            margin-bottom: 0px;
        }
        h2{
            margin-top: 5px;
            font-size: 2.5em;
            color: white;
        }
        button{
            margin: 10px 5px 10px 5px;
            font-size: 1.05em;
        }
    </style>
    <body>
        <?php include 'config.php' ?>
        <?php include 'templates/nav.php' ?>
    	
        <div class="mainContainer">
            <div class="searchLeft">
                <form method="post">
                    <input type="submit" name="displayAllEmployees" value="Display All Employees">
                </form>
            </div>
            <div class="resultsRight">
                <p>results</p>
                <div id="dbResults">
                    
                </div>
            </div>
        </div>

        <p style="color: white;">Stage 5: Final Demo</p>


        <?php include 'templates/footer.php' ?>
    </body>
    <script type="text/javascript" src="scripts/updatePage.js"></script>
</html>