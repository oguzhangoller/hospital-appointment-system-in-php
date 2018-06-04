<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form action="loginAction.php" method="POST">
         <p>Your username: <input type="text" name="Username" /></p>
         <p>Your password: <input type="password" name="Password" /></p>
		 <select name="type">
    		 <option value="1">User</option>
    		 <option value="2">Admin</option>
		 </select>
         <p><input type="submit" /></p>
        </form>
		<?php echo "<a href = 'register.php'>Register</a>";  ?>
    </body>
</html>
