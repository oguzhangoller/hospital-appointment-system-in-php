<html>
    <body>
	   
		<?php session_start(); 
		if(!isset($_SESSION['AdminUsername'])){
			echo "No session detected!";
			return;
		} ?>
		Admin logged in! <br>
       <a href="addDoctor.php">Create a Doctor</a> <br>
	   <a href="editDoctor.php">Edit a Doctor</a>	<br>
	   <a href="removeDoctor.php">Remove a doctor</a>	<br>
	   <a href="createBranch.php">Create a branch</a>	<br>
	   <a href="editBranch.php">Edit a branch</a>	<br>
	   <a href="deleteBranch.php">Delete a branch</a>	<br>
	   <a href="listAppointments.php">List Appointments</a>	<br>
	   <a href = 'logout.php'>Logout</a>  <br>
    </body>
</html>

