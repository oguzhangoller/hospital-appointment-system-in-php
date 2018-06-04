<html>
    <head>
        <title>Add doctor to system</title>
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
        	 <form action="doctorAction.php" method="POST">
				<p>Doctor Name: <input type="text" name="Name" /></p>
				<select name="branch">
					
					<?php 
						
						$sql = mysqli_query($conn, "SELECT Name FROM Branches");
						while ($row = $sql->fetch_assoc()){
							$n1 = $row['Name'];
							echo "<option value=\"$n1\">" . $row['Name'] . "</option>";
						}
						echo "<p><input type='submit' value='Add Doctor' /></p>";
			?>
				</select>
			</form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
