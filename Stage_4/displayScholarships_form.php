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
    <?php include 'nav.php' ?>
<div class="container">
  <h1 style="color: black;">Search for Scholarships</h1> 
  <form action="displayScholarships.php" method="post">
    <p> Would you like to search by name or Department?</p>
    <div class="row">
      <div class="col-25">
        <input type="radio" name="action" value="name_search" checked> Name
            <input type="radio" name="action" value="department_search"> Department
      </div>
      <div class="col-75">
        <input type="text" name="search_for" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Search">
    </div>
    <p>If searching by Department, please use the department_id referenced below.</p>
    <p style="font-size: 1.2em;">Dept Id::Dept Name<br>
        1::Computer Science<br>
        2::Mathematics<br>
        3::University of Akron</p>
  </form>
</div>         
<?php include 'footer.php' ?>
    </body>
</html>
