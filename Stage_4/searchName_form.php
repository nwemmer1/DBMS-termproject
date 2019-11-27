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
  <h1 style="color: black;">Search by Lastname</h1> 
  <form action="search.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Type in the last name of the person you are looking for.</label>
      </div>
      <div class="col-75">
        <input type="text" name="last_name" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Search">
    </div>
  </form>
</div>
<?php include 'footer.php' ?>
    </body>
</html>
