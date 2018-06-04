<html>
    <head>
        <title>Branch Insertion</title>
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

                // Insert the record
                $sql = "INSERT INTO Branches(Name) " . "VALUES('" . $_POST['Name'] . "')";
                if ($conn->query($sql) === TRUE) {
                    echo "Branch was created successfully <br />";
                    echo "<a href = 'adminLogin.php'>Go back</a>";
                } else {
                    echo "Error creating Branch: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>
