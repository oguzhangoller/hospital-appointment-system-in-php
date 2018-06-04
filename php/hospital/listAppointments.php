<html>
    <head>
        <title>Search appointments by branch</title>
    </head>
    <body>

        <?php
			session_start();
			if(!isset($_SESSION['AdminUsername'])){
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
        	 <form action="listAppointmentsResult.php" method="POST">
				<p>Branch Name: </p>
				<select name="branch">
					
					<?php 
						
						$sql = mysqli_query($conn, "SELECT Name FROM Branches");
						while ($row = $sql->fetch_assoc()){
							$n1 = $row['Name'];
							echo "<option value=\"$n1\">" . $row['Name'] . "</option>";
						}
						echo "<option value=\"All\">" . "List All Branches" . "</option>";
						
			?>
				</select>
				<p><input type='submit' value='List Appointments' /></p>
			</form>

            <?php
			echo "<br><a href = 'adminLogin.php'>Go back</a>";
            }
            $conn->close();
        ?>

    </body>
</html>
