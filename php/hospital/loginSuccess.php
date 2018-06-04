<html>
    <body>
	   
		<?php session_start(); 
		if(!isset($_SESSION['Username'])){
			echo "No session detected!";
			return;
		} ?>
		User logged in! <br>
       <a href="createAppointment.php">Create an Appointment</a> <br>
	   <a href="editAppointment.php">Edit an Appointment</a>	<br>
	   <a href="cancelAppointment.php">Cancel an Appointment</a>	<br>
	   <a href = 'logout.php'>Logout</a>  <br>
    </body>
</html>

