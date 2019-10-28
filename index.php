<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Staff Directory</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
    	<form action="staff.php" method="post">
    	<p>
    		IdNo:
    		<input type="number" name="id" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		First Name:  
    		<input type="text" name="first_name" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Last Name:
    		<input type="text" name="last_name" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Phone Number:  
    		<input type="text" name="phone_number" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Title: 
    		<input type="text" name="title" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Department:  
    		<input type="text" name="department" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		What do they teach? 
    		<input type="text" name="teaches" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		What type of employment are they? (full-time/part-time): 
    		<input type="text" name="type_of_employment" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Email: 
    		<input type="text" name="email" required>
    		<br>
    		<br>
    	</p>
    	<p>
    		Office Number?
    		<input type="text" name="office_number" required>
    		<br>
    		<br>
    	</p>
    	<input type="submit" value="Submit">

</form>







    	 <? require 'staff.php' ?>
        
        <script src="js/main.js"></script>
    </body>
</html>