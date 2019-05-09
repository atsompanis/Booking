<!DOCTYPE html>
<html>
	 <head>
	  	<title>Listing Upload</title>
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
<div class="uploadtitle"> Upload a new Listing </div>
<div class="row">
		<div class="col-sm-12">
			<form method="post" action="uploadForm.php" enctype="multipart/form-data">
				<input type="hidden" name="size" value="1000000" />
				<div id="tit">
					 <b>Title</b>:
					 <input type="text" name="title" placeholder="e.g. Harry Potter">
				</div>
				<hr>
				<div id="auth">
					 <b>Author:</b>
					 <input type="text" name="author" placeholder="e.g. J.K.Rolling">
				</div>
				<hr>
				<div id="con">
					 <b>Condition:</b> <BR>
						<input type="radio" name="howused" value="like_new" checked> Like new :) </br>
					 	<input type="radio" name="howused" value="kinda_used"> Used but not so much :| </br>
						<input type="radio" name="howused" value="very_used"> Its used :/ </br>
				</div>
				<hr>
				<div id="pr">
					 <b>Price:</b>
					 <input type="number" name="price" min="1" step="0.01" placeholder="e.g. 15.50">
				</div>
				<hr>
				<div id="desc">
					<b>Description: </b>
					<textarea name="description" cols="40" rows="4" placeholder="Say somethiing about the book..."></textarea>
				</div>
				<hr>
				<div id="cat">
					<b> Category:</b>
						<select name="category">
						  <option value="CS">Computer Science</option>
						  <option value="PSY">Psychology</option>
						  <option value="ENG">English studies</option>
						  <option value="BS">Business studies</option>
						</select>
				</div>
				<hr>
				<div id="em">
					<b>Your email:</b>
					<input type="email required" name="email_ad" placeholder="e.g. yourname@yourprovider.com">
					<p></p>
					<p>*if you wish to save your listing and be able to delete it later, use the same email with the one you signed up! . </p>
				</div>
				<hr>
				</br>
				<div id="ima">
						<input type="file" name="image" />
				</div>
				</br>
				<hr>
				<div align="center">
					<input type="submit" name="upload" value="Upload Listing !" >
				</div>
			</form>
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