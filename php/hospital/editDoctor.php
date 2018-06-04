<html>
    <head>
        <title>Edit Doctor</title>
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

                // List records
                $sql = "SELECT * FROM Doctors";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    ?>
                    <table border = 1>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Branch</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["ID"]; ?></td>
                            <td><?php echo $row["Name"]; ?></td>
                            <td><?php echo $row["Branch"]; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
					<form form action="editDoctorResult.php" method="POST">
 					 <br> Enter id of the doctor you want to edit: <br>
 				 		<input type="text" name="ID"><br>
					<br> Enter new name of the doctor you want to edit: <br>
 				 		<input type="text" name="Name"><br>		
					<br> Choose new branch of the doctor you want to edit: <br>
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
                } else {
                    echo "0 results";
                }
            }
            $conn->close();
        ?>

    </body>
</html>
