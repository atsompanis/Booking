
<!DOCTYPE html>
<html lang="en">
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
  <a name="top"></a>

<!--Cookies Alert-->

<script>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	  "palette": {
		"popup": {
		  "background": "#eb6c44",
		  "text": "#ffffff"
		},
		"button": {
		  "background": "#f5d948"
		}
	  },
	  "showLink": false,
	  "theme": "edgeless",
	  "position": "bottom-left"
	})});
</script>


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
				<li class="active"><a href="HomePage.php">Home</a></li>
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

<!------------------------------------------------------------------------------------------>

<!--This row is for the slider -->
	<div class="row">
		<div class="col-sm-12">
			 <?php
				include 'slider_recent.php';
		 	 ?>

		</div>
	</div>

	<!--This row is for the filter and listings -->
	<div class="row">
		<div class="col-sm-4">
			<div class="filtertitle">Department Filter:</div>
			<?php
				include 'filter.php';
			?>


		</div>
		<div class="col-sm-8">

		<div class="listingtitle">Latest listings:</div>
		<a class="newlisting" href="uploadAdHTML.php">Create new listing!</a><br>

			<?php
				include 'dbh.php';
				include 'AllListings.php';
			?>

		</div>
	</div>

<div class="row">
		<div class="col-sm-12 footer">
			<h1>Copyright Bookle 2017, City College.  </h1>
			<a href="#top">Back to top of page</a>
		</div>
</div>


  <body>
</html>