<html>
    <head>
        <title>Doctor Insertion</title>
    </head>
    <body>

        <?php
			session_start();
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
                $sql = "INSERT INTO Doctors(Name, Branch) " .
                    "VALUES('" . $_POST['Name'] . "', '" . $_POST['branch'] . "')";
                if ($conn->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'adminLogin.php'>Go back</a>";
                } else {
                    echo "Error doctor insertion: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>
