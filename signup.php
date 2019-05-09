<!DOCTYPE html>
<html lang="en">
  <head>

  	<title>Sign Up</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<link rel="stylesheet" type="text/css" href="barstyle.css">
	<link rel="stylesheet" type="text/css" href="yourlisting.css">
	<link rel="stylesheet" type="text/css" href="signup_style.css">


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
  				<li class="active"><a href="signup.php">Sign Up</a></li>
  			 </ul>
  		</div>
  		<div class="col-sm-2 ">
  			<form action = "result.php" method = "GET">
  				<input type = "text" name = "q" placeholder = "search for books"/>
  			</form>
  		</div>
  	</div>

<div class="signuptitle"> Sign Up </div>

<div class="row">
  		<div class="col-sm-12 menubuttons">
			<form action="includes/usersignup_inc.php" method="post"><br>
				<input placeholder="Username" name="username" type="text" id="name"><br>
				<input placeholder="Email" name="email" type="email" id="mail"><br>
				<input placeholder="Password" name="password" type="password" id="pass"><br><br>
				<button type="submit" id="sub">Sign up</button>
			</form>

			<div class="terms">
				Terms of service: By clicking Sign Up, you agree to our Terms and confirm that you have read our Data Policy,including our Cookie Use Policy.
				You may receive SMS message notifications from Facebook and can opt out at any time.
			</div>
			<div class="terms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a egestas massa. Donec aliquet id erat non finibus. Morbi elementum accumsan pretium. Sed rutrum viverra velit ut maximus. Mauris non magna porta, porta lacus ac, efficitur diam. Cras tempus ipsum vitae diam facilisis, ut rutrum nulla feugiat. Praesent interdum aliquet nunc, sit amet viverra mi faucibus sit amet. Suspendisse accumsan scelerisque semper. Donec pharetra metus vitae dui consequat iaculis. Integer et nunc vel quam hendrerit sollicitudin a at ante.<BR>
								<p> Suspendisse semper interdum felis, eget mattis lacus. Proin enim metus, tincidunt congue mattis ut, egestas id nunc. Vivamus aliquam feugiat fringilla. Curabitur imperdiet euismod lacus sed pellentesque. Etiam tempor, turpis ut mattis iaculis, erat tortor rutrum lacus, nec maximus orci justo vitae leo.

						        Nulla non porttitor eros. Cras erat ipsum, blandit vitae blandit sed, vulputate in nibh. Proin consequat, mi et viverra imperdiet, nisl nisl accumsan dolor, maximus gravida lorem arcu id risus. Sed dolor tellus, venenatis non posuere eu, convallis quis nisl. Pellentesque rutrum eu tortor quis pretium. Cras sit amet bibendum sapien. Duis porta malesuada dui, vel luctus nibh ultricies in. Integer sit amet egestas arcu, at hendrerit justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.<p> Fusce ut porta justo. Donec sollicitudin lacus eu elit pretium, in semper nulla rhoncus. Sed molestie ultricies aliquet.

						        Fusce at nunc sit amet erat dictum fringilla. Donec non nibh nec ligula pellentesque mollis sollicitudin a massa. Phasellus vestibulum felis eleifend ligula interdum molestie. Ut ante orci, tempor in tellus ac, luctus lacinia purus. Morbi nec quam sed turpis maximus porttitor non in dui. Nam congue dolor sit amet tellus rhoncus, nec elementum turpis convallis. <p>Ut sem est, ornare at sapien et, vehicula venenatis erat. Aenean in ligula ac eros semper laoreet ac sed tellus. Nam aliquam nisl ut ipsum pretium, a tempus sapien tincidunt.

						        Cras malesuada est dui, ac porttitor odio porta sed. In a orci nec lacus vestibulum pharetra non ut neque. Duis nunc odio, semper eget eleifend euismod, aliquam nec tellus. Fusce vitae hendrerit massa, at semper arcu. Etiam aliquam, lacus facilisis suscipit tincidunt, leo dolor mattis nulla, eget iaculis mauris justo nec nibh. Phasellus hendrerit condimentum risus, at fermentum quam pulvinar id. Suspendisse sagittis lacinia nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus.
    		</div>
		</div>
	</div>
	<div class="row">
			<div class="col-sm-12 footer">
				<h1>Copyright Bookle 2017, City College.  </h1>
				<a href="#top">Back to top of page</a>
			</div>
</div>


		<?php

			$url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

			//if error=empty is in the URL do this
			if (strpos($url, 'error=empty')!==false){
				echo "Please fill out all fields";

			}

			elseif (strpos($url, 'error=username')!==false) {
				echo "This Username already exists. Please enter another one";
			}

			elseif (strpos($url, 'error=email')!==false){
			echo "This email is already used. Please enter another one";

		}
			elseif (strpos($url, 'signup=success')!==false) {

				echo "Congratulations, you have successfully registered. Please enter your username and password at the top of this page to login.";
			}


			//if the session id is set(the user has successfully logged in) do this
			if(isset($_SESSION['id'])){
				echo $_SESSION['id'];
			}
			//else if the session id is not set(user failed to log in) do this
			else{
				echo "";

			}
		?>


</body>
</html>
