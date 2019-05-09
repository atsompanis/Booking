<?php
	$msg = "";
	if (isset($_POST['upload'])) {

		//path to store uploaded file
		$target = "images/".basename($_FILES['image']['name']);

		//connect to the database
		$db = mysqli_connect("localhost", "root", "", "practical");

		//get all data from the form
		$image = $_FILES['image']['name'];
		$title = $_POST['title'];
		$author = $_POST['author'];
		$howused = $_POST['howused'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$category = $_POST['category'];
		$email_ad = $_POST['email_ad'];


		$sql = "INSERT INTO images (email_ad) SELECT email FROM users";
		$sql = "INSERT INTO images (image, title, author, howused, price, description, category, email_ad) VALUES ('$image', '$title', '$author', '$howused', '$price', '$description', '$category', '$email_ad')";
		mysqli_query($db, $sql);

		//move uploaded image into the folder: images
		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			echo "Listing Uploaded Successfully <a href='homepage.php'>Get Me Back to Home page Please.</a>";
		} else {
			echo "There Was A problem uploading the listing";
		}
	}
?>