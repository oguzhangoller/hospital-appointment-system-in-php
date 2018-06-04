<html>
<body>
<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
	$dbname = "hospital";

    $con = new mysqli($servername, $username, $password, $dbname);
	session_start();
	if(!isset($_SESSION['Username'])){
			echo "No session detected!";
			return;
			}
    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }
	$radioVal = $_POST["doctor"];
	
	$_SESSION['docName'] = $radioVal;
	echo "You have choosen doctor : " . $radioVal . "<br><br>";
	echo "Enter appointment date and time : <br><br>";
	?>
	<form action="checkResult2.php" method="POST">
  		<input type="datetime-local" name="DateTime">
  		<input type="submit" value="Enter">
	</form>
	<?php
	echo "<a href = 'editAppointment.php'>Go back</a>";
    mysqli_close($con);
    ?>
</body>
</html>
