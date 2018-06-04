<html>
    <head>
        <title>User Registration</title>
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
                $sql = "INSERT INTO Users(Username,Name, Password) " .
                    "VALUES('" . $_POST['Username'] . "', '" . $_POST['Name']."', '" . $_POST['Password'] . "')";

                if ($conn->query($sql) === TRUE) {
                    echo "Registration was made successfully <br />";
                    echo "<a href = 'login.php'>Go to login page</a>";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
            }
            $conn->close();
        ?>

    </body>
</html>
