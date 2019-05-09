<?php
    include 'header.php';
	include 'dbh.php';


?>

<body>
<link rel="stylesheet" type="text/css" href="yourlisting.css">

<h1>Home</h1>

<BR><BR><BR>

<a href="uploadAdHTML.html">Create an AD !</a><br>
<a href="forgotPassword.php">Forgot Password</a>

<?php

    $sql="SELECT * FROM images ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    {
        echo "<div class=\"Listing\">".$row['title']. "<br>" .
									$row['author'] . "<br>" .
									$row['howused'] . "<br>" .
									$row['price']. "<br>" .
									$row['description'] . "<br>" .
									$row['category'] . "<br>" .
									$row['email_ad'] . "<br>" .
									$row['image'] . "<br>" .


		"</div> <hr />";


    }

?>

</body>
</html>
