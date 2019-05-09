<?php
	if(isset($_POST["forgotPass"])){
		$connection = new mysqli("localhost", "root", "", "practical");
		$email = $connection ->real_escape_string($_POST["email"]);
		$data = $connection -> query("SELECT * FROM users WHERE email = '$email'");

		if($data -> num_rows > 0){
			$str = "0123456789qqwertyuiopasdfghjkl";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url = "resetPasword.php?token=$str&eimail=$email";
	//		mail($email, "Reset Password", "To reset your password please visit this: $url ", "From:mymail@bookle.gr");

			$connection -> query("UPADATE users SET token = '$str' WHERE email='$email'");

			echo "please check your email!";
		}else{
			echo "please chech your inputs!";
		}
	}
?>
<!DOCTYPE html>
<html>
 <head>
  	<title>Listing Homepage</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" type="text/css" href="barstyle.css">
	<link rel="stylesheet" type="text/css" href="yourlisting.css">


	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>

  </head>

  <body style="background-color: #f2f2f2;">
<!--This row is for the logo only -->
  	<div class="row">
		  <div class="col-sm-4 logo"> <a href="HomePage.php"> <img src="booklelogo.png" class="img-responsive" alt="Bookle" href="HomePage.php"></div>
		  <div class="col-sm-8">

			<?php
				include 'header.php';
			?>
		  </div>
	</div>

<!--This row is for the buttons -->


	<div class="row">

		<div class="col-sm-10 menubuttons">
			 <ul class="nav nav-pills nav-justified">
				<li><a href="HomePage.php">Home</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contantForm.php">Contact</a></li>
			<?php
			                //if user is logged in do this//
			                if(isset($_SESSION['id'])){
			                    echo"<li><a href=\"yourlistings.php\">Your Listings</a> </li>";

			                }

			                    //if user is not logged in do this//
			                else{
			                    echo " <li><a href=\"signup.php\">Sign Up</a></li>";


			                }
                ?>
			 </ul>
		</div>
		<div class="col-sm-2 ">
			<form action = "result.php" method = "GET">
				<input type = "text" name = "q" placeholder = "search for books"/>
			</form>
		</div>
	</div>

	<form action = "forgotPassword.php" method = "POST">
		<input type = "text" name = "email" placeholder = "Email" /><br>
		<input type = "submit" name = "forgotPass" value = "Request Password" />
	</form>
<div class="row">
		<div class="col-sm-12 footer">
			<h1>Copyright Bookle 2017, City College.  </h1>
			<a href="#top">Back to top of page</a>
		</div>
</div>
</body>
</html>