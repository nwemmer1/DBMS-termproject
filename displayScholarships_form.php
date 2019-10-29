<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Search by Last Name</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>

        <form action="displayScholarships.php" method="post">
        
        <p>
            Would you like to search by name or Department?
            <br>
            <input type="radio" name="action" value="name_search" checked> Name
            <input type="radio" name="action" value="department_search"> Department
            <input type="text" name="search_for" required>
            <br>
            If searching by Department, please use the department_id referenced below.
            <br>
        </p>
        <input type="submit" value="Search">


        <br>
        <br>
        <br>
         <table>
            <tr>
                <td>
                    Dept Id: </td> <td> Dept Name </td> 
            </tr><tr>
                <td> 1 </td> <td> Computer Science</td>
            </tr><tr>
                <td> 2 </td> <td> Mathematics </td>
            </tr><tr> 
                <td> 3 </td> <td> University of Akron (total) </td>
            </tr>

        </table>


</form>
        

    </body>
</html>
