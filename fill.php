
   
<?php include "templates/header.php"; ?>
    <form action="details.php" method="post">
    	<br><label for="name"> Name</label></br>
    	<input type="text" name="name" id="name">
    	<br><label for="dateofbirth">Date of Birth</label></br>
    	<input type="text" name="dateofbirth" id="dateofbirth">
    	<br><label for="phoneno">Phone No</label></br>
    	<input type="text" name="phoneno" id="phoneno">
    	  <br><label for="age">Age</label></br>
    	<input type="text" name="age" id="age">
          <br><label for="bloodgroup">Blood group</label></br>
         <input type="text" name="bloodgroup" id="bloodgroup">
    	<br><label for="location">Location</label></br>
    	<input type="text" name="location" id="location">
        <br><label for="tested">Tested  CovidPositive ?</label></br>
        <input type="text" name="tested" id="tested">
        <br><label for="date_of_testednegative">Date When Tested Negative</label></br>
        <input type="text" name="date_of_testednegative" id="date_of_testednegative">
    	<br><input type="submit" name="submit" value="Submit"></br>
    </form>

    <a href="index.php">Back to home</a>

    <?php include "templates/footer.php"; ?>