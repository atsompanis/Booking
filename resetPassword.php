<?php
	if(isset($_GET["email"]) && isset($_GET["token"])){
		$connection = new mysqli("localhost", "root", "", "practical");
		
		$email = $connection ->real_escape_string($_GET["email"]);
		$token = $connection ->real_escape_string($_GET["token"]);
		$data = $connection ->query("SELECT * FROM users WHERE email='$email' AND token='$token'");
		
		if($data->num_rows > 0){
			$str = "0123456789qwertyuiopasddffghjkl;"
			$str = str_shuffle($str);
			$str = substr($str, 0, 15);
			
			$password = shal($str);
			
			$connection->query("UPDATE users SET password = '$password', token='' WHERE email='$email'");
			echo "your new password is: $str";
		}else{
			echo "please check your link!";
		}
	}else{
		header("Location: login.php");
		exit();
	}

?>