<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>User Log in</title>
    <link rel="stylesheet" type="text/css" href="barstyle.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<div class="bar">
				  <?php
					//if user is logged in do this//
					if(isset($_SESSION['id'])){
						echo"<a href=\"yourlistings.php\"></a>";
						echo "<form action='includes/logout_inc.php'>
						<button>Log Out</button>
						</form>";
					}

						//if user is not logged in do this//
					else{
						echo " <a href=\"signup.php\"></a>";
						echo "<form action='includes/userlogin_inc.php' method='post'>
				<input placeholder='Username' name='username' type='text'>
				<input placeholder='Password' name='password' type='password'>
				<button type='submit'>Log in</button>
				</form>";

					}
					?>
					<a id="forgot" href="forgotPassword.php">Forgot Password</a>
				</div>
			</ul>
		</nav>
	</header>

</body>
</html>