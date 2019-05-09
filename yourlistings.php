<?php

include 'dbh.php';


/* used for testing the session
<?php
    print_r($_SESSION);
?>
*/
?>

 <head>
  	<title>Your Listing</title>
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

<div class="yourlistingtitle">Your Listings</div>



        <?php

        /*This code finds all of the listings that the user has posted based off the user's email*/
        $sql="SELECT * FROM images WHERE email_ad='{$_SESSION['email']}'";

        $result = mysqli_query($conn, $sql);
        echo "<div class=\"Example\">"."<a href=\"uploadAdHTML.html\"></a></div> ";

        while($row = mysqli_fetch_array($result))
        {
        echo "<div class=\"Listing\">"."<div class=\"post-thumb\">"."<img src = 'http://dummyimage.com/200x200/f0f/fff'/>" ."</div>"." Title: ".$row['title']."<p>Department: ".$row['category']."</p><br>"." By: ".$row['author']."<br> "."<p>Price: "." $".$row['price']."</p>"."<a href='delete.php?del=$row[id]'>delete</a> </div>";

        }


        ?>

 <div class="row">
 		<div class="col-sm-12 footer">
 			<h1>Copyright Bookle 2017, City College.  </h1>
 			<a href="#top">Back to top of page</a>
 		</div>
</div>
</body>
</html>




