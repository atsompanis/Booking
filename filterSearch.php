<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Filter Result</title>
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

<div class="yourlistingtitle">

<?php
    $output = '';
   $option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   if ($option) {
      echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   } else {
     echo "task option is required";

   }


	$sql = "SELECT * FROM images WHERE category = 'CS'";
	$sql1 = "SELECT * FROM images WHERE category = 'BS'";
	$sql2 = "SELECT * FROM images WHERE category = 'PSY'";
	$sql3 = "SELECT * FROM images WHERE category = 'ENG'";


	$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)){

		 echo "<div class=\"Listing\">"." Title: ".$row['title']."<p>Department: ".$row['category']."</p><br>"." By: ".$row['author']."<br> "."Condition: ".$row['howused']."<p>Price: "." $".$row['price']."</p> </div>";
		}
	}
	$result = mysqli_query($conn, $sql1);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)){

		 echo "<div class=\"Listing\">"." Title: ".$row['title']."<p>Department: ".$row['category']."</p><br>"." By: ".$row['author']."<br> "."Condition: ".$row['howused']."<p>Price: "." $".$row['price']."</p> </div>";
		}
	}
	$result = mysqli_query($conn, $sql2);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)){

		 echo "<div class=\"Listing\">"." Title: ".$row['title']."<p>Department: ".$row['category']."</p><br>"." By: ".$row['author']."<br> "."Condition: ".$row['howused']."<p>Price: "." $".$row['price']."</p> </div>";
		}
	}
	$result = mysqli_query($conn, $sql3);

		if (mysqli_num_rows($result) > 0) {
		// output data of each row
		while($row = mysqli_fetch_assoc($result)){

		 echo "<div class=\"Listing\">"." Title: ".$row['title']."<p>Department: ".$row['category']."</p><br>"." By: ".$row['author']."<br> "."Condition: ".$row['howused']."<p>Price: "." $".$row['price']."</p> </div>";
		}
	}
//print("$output");
mysqli_close($conn);

		//SELECT title,author FROM `images` WHERE `category` = 'CS'

?>
</div>
<div class="row">
		<div class="col-sm-12 footer">
			<h1>Copyright Bookle 2017, City College.  </h1>
			<a href="#top">Back to top of page</a>
		</div>
</div>


  <body>
</html>