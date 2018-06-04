<html>
<body>
<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
	$dbname = "hospital";

    $con = new mysqli($servername, $username, $password, $dbname);

    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }
	session_start();
	if(!isset($_SESSION['Username'])){
			echo "No session detected!";
			return;
			}
	$docName = $_SESSION['docName'];
	$sql = "SELECT * FROM Appointments WHERE Doctor='$docName' && Time='$_POST[DateTime]'";

    $query=mysqli_query($con,$sql);
	$result = $con->query($sql);	
	
	
   if ($result->num_rows <1 ) {
	$time = strtotime($_POST['DateTime']);
	$min = date('i', $time);
	if($min%5 != '0'){
		echo "Only multiples of 5 minutes are valid!";	}
	else {
	$username = $_SESSION['Username'];
	 $sql = "INSERT INTO Appointments(User, Doctor, Time) " .
                    "VALUES('$username', '$docName','" . $_POST['DateTime'] . "')";
				

                if ($con->query($sql) === TRUE) {
                    echo "Record was created successfully <br />";
                    echo "<a href = 'loginSuccess.php'>Go back</a>";
                } else {
                    echo "Error updating record: " . $con->error;
                }
	}
	
} else {
    echo "The doctor is not available at that time and date.";
}

    mysqli_close($con);
    ?>
</body>
</html>
