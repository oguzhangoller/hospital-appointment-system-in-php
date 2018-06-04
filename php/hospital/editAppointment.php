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
			
			$Username = $_SESSION['Username'];
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {

               die("Connection failed: " . $conn->connect_error);
            }else{

                // List records
                $sql = "SELECT * FROM Appointments WHERE User='$Username'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    ?>
                    <table border = 1>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Doctor</th>
                            <th>Time</th>
                        </tr>
                    <?php

                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["ID"]; ?></td>
                            <td><?php echo $row["User"]; ?></td>
                            <td><?php echo $row["Doctor"]; ?></td>
                            <td><?php echo $row["Time"]; ?></td>
                        </tr>
                        <?php
                    }

                    ?>
                    </table>
					<form form action="editRecord.php" method="POST">
 					 <br> Enter id of appointment you want to edit: <br>
 				 		<input type="text" name="ID"><br>	
						<p><input type="submit" /></p>
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
