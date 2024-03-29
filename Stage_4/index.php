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
        img{
            margin-bottom: 30px;
        }
        button{
            margin: 10px 5px 10px 5px;
            font-size: 1.05em;
        }
    </style>
    <body>
    	<h1>University of Akron</h1>
        <h2><span style="color: #FFD61A;">STEM</span> Faculty Directory</h2>

        <img style="height: 500px" src="images/Akron_seal.png">
        <br>
        <div style="width: 80%; margin: auto;">
    	<a href="add_entry.php"><button>Add a Faculty Member</button></a>
        <a href="searchOffice_form.php"><button>Search by room number</button></a>
        <a href="searchName_form.php"><button>Search by Last Name</button></a>
        <a href="searchDepartment_form.php"><button>Display Department Information</button></a>
        <a href="displayScholarships_form.php"><button>Search for Scholarships</button></a>
        <a href="dbSelect.php"><button>Display all Employees</button></a>
        <a href="update_form.php"><button>Update an Employee entry</button></a>
        <a href="delete_form.php"><button>Delete an Employee entry</button></a>
        </div>
        <br>
        <br>

        <p style="color: white;">Stage 4: Initial Demo</p>


        <?php include 'footer.php' ?>
    </body>
</html>