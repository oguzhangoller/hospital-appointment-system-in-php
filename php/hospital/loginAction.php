<html>

<?php
	session_start();
	$servername = "localhost";
    $username = "root";
    $password = "";
	$dbname = "hospital";

    $con = new mysqli($servername, $username, $password, $dbname);

    if (mysqli_connect_errno($con))
    {
        echo "MySql Error: " . mysqli_connect_error();
        }
	if($_POST['type'] == 2){
	
		$query=mysqli_query($con,"SELECT * FROM Admins WHERE Username='$_POST[Username]' && Password='$_POST[Password]'");
	
    	$count=mysqli_num_rows($query);
   	    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        $_SESSION['AdminUsername'] = $_POST['Username'];
        $_SESSION['AdminPassword'] = $_POST['Password'];
        header("location: adminLogin.php");
        }
    else
    {
        echo "Invalid username or password";
        }   
	}
	else{
    $query=mysqli_query($con,"SELECT * FROM Users WHERE username='$_POST[Username]' && password='$_POST[Password]'");
	
    $count=mysqli_num_rows($query);
    $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        $_SESSION['Username'] = $_POST['Username'];
        $_SESSION['Password'] = $_POST['Password'];
        header("location: loginSuccess.php");
        }
    else
    {
        echo "Invalid username or password";
        }   
	}
    mysqli_close($con);
    ?>

</html>
