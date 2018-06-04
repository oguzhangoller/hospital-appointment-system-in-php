<html>
    <head>
        <title>Edit an appointment</title>
    </head>
    <body>

        <?php
			session_start();
			if(!isset($_SESSION['Username'])){
			echo "No session detected!";
			return;
			}
			$_SESSION['EditID'] = $_POST['ID'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hospital";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {

                die("Connection failed: " . $conn->connect_error);
            }else{
            ?>
        	 <form action="editAction.php" method="POST">
				<select name="branch">
					
					<?php 
						
						$sql = mysqli_query($conn, "SELECT Name FROM Branches");
						while ($row = $sql->fetch_assoc()){
							$n1 = $row['Name'];
							echo "<option value=\"$n1\">" . $row['Name'] . "</option>";
						}
						echo "<p><input type='submit' value='Edit Doctor' /></p>";
			?>
				</select>
			</form>
			
            <?php	
			echo "<a href = 'editAppointment.php'>Go back</a>";
            }
            $conn->close();
        ?>

    </body>
</html>
