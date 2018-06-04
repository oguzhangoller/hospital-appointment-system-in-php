<html>
    <head>
        <title>Make an appointment</title>
    </head>
    <body>

        <?php
			session_start();
			if(!isset($_SESSION['Username'])){
			echo "No session detected!";
			return;
			}
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
			Doctors serving in that branch: <br><br>
        	 <form action="appAction.php" method="POST">
				<select name="branch">
					
					<?php 
						
						$sql = mysqli_query($conn, "SELECT Name FROM Branches");
						while ($row = $sql->fetch_assoc()){
							$n1 = $row['Name'];
							echo "<option value=\"$n1\">" . $row['Name'] . "</option>";
						}
						echo "<p><input type='submit' value='Get Appointments' /></p>";
			?>
				</select>
			</form>
			
            <?php	
			echo "<a href = 'loginSuccess.php'>Go back</a>";
            }
            $conn->close();
        ?>

    </body>
</html>
