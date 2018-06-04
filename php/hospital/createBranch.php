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
        	 <form action="createBranchResult.php" method="POST">
				<p>Branch Name: <input type="text" name="Name" /></p>
				<p><input type='submit' value='Add Branch' /></p>
			</form>

            <?php
            }
            $conn->close();
        ?>

    </body>
</html>
