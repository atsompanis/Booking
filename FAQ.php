
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>FAQ</title>
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
				<li class="active"><a href="faq.php">FAQ</a></li>
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



<div class="row">
		<div class="col-sm-12 ">
				<div class="faqtitle">Frequently Asked Questions</div>

				  <button type="button" class="btn btn-info nav-justified" data-toggle="collapse" data-target="#demo1">Who are we? </button>
				  <div id="demo1" class="collapse ">
				    Bookle is created designed and implemented by a group of six people pationate for we design and passing Mr. Emagus practical.
				    Through this proccess we found ourselves enjoying coding and procrastinating.
				  </div>
	</div>
</div>
<BR>
<div class="row">
		<div class="col-sm-12">
				  <button type="button" class="btn btn-info nav-justified" data-toggle="collapse" data-target="#demo2">How do you use this website? </button>
				  				  <div id="demo2" class="collapse">
				  				    This website is created for university students in order to sell the academic books they dont need any more.
				  				    You can create a new listing and let the world see it by visiting our homepage.
				  </div>
	</div>
</div>
<BR>
<div class="row">
		<div class="col-sm-12">
				  <button type="button" class="btn btn-info nav-justified" data-toggle="collapse" data-target="#demo3">Can i sell items other than books? </button>
				  				  <div id="demo3" class="collapse">
				  				    Saddly no. Currenly our website allow students to sell only their books. We are listening to our community and we are evolving dayly,
				  				    new features as the ability to sell different things we be added very soon...
				  </div>
	</div>
</div>
<BR>
<div class="row">
		<div class="col-sm-12">
				  <button type="button" class="btn btn-info nav-justified" data-toggle="collapse" data-target="#demo4">A seller backed out, but i have already deleted my listing. Can i list it again? </button>
				  				  <div id="demo4" class="collapse">
				  				   Yes, you can place your listing as many times as you want until you find a seller :) .
				  </div>
		</div>
</div>
<div class="row">
		<div class="col-sm-12 footer">
			<h1>Copyright Bookle 2017, City College.  </h1>
			<a href="#top">Back to top of page</a>
		</div>
</div>


</body>
</html>