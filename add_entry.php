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
    <h1 style="color: black;">Add a Faculty Member</h1> 
  <form action="staff.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">IdNo:</label>
      </div>
      <div class="col-75">
        <input type="number" name="id" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">First Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="first_name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Last Name:</label>
      </div>
      <div class="col-75">
        <input type="text" name="last_name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Phone Number:</label>
      </div>
      <div class="col-75">
        <input type="text" name="phone_number" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Title:</label>
      </div>
      <div class="col-75">
        <input type="text" name="title" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Department:</label>
      </div>
      <div class="col-75">
        <input type="text" name="department" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">What do they teach? </label>
      </div>
      <div class="col-75">
        <input type="text" name="teaches" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">What type of employment are they? (full-time/part-time):</label>
      </div>
      <div class="col-75">
        <input type="text" name="type_of_employment" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Email:</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Office Number?</label>
      </div>
      <div class="col-75">
        <input type="text" name="office_number" required>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>    
<?php include 'footer.php' ?>
    </body>
</html>
