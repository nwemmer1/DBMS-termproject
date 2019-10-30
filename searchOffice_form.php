<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Add an entry</title>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
<?php include 'nav.php' ?>
 <div class="container">
  <h1 style="color: black;">Search by room number</h1> 
  <form action="searchOffice.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Type in the Office Number, for which the person you are looking for:
            <br>
            Format: "CAS 123"</label>
      </div>
      <div class="col-75">
        <input type="text" name="office_number" required>
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
