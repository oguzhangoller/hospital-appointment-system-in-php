 <html>
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
				$sql = "DELETE FROM Appointments WHERE ID = " . $_POST['ID'];
					if ($conn->query($sql) === TRUE) {
                    echo "Record was deleted successfully <br />";
                    echo "<a href = 'loginSuccess.php'>Go back</a>";
                } else {
                    echo "Error deleting record: " . $conn->error;
                }
               
                   
                }
            
            $conn->close();
        ?>

    </body>
</html>


