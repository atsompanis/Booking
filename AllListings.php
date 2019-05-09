<html>
<body>
<link rel="stylesheet" type="text/css" href="yourlisting.css">


<?php

    $sql="SELECT * FROM images ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result))
    {
        echo "<div class=\"Listing\"><b>&nbsp; Title: &nbsp;</b>".$row['title'].
									"<br /><b>&nbsp; Author: &nbsp;</b>" . $row['author'] .
									"<b>&nbsp; Condition: &nbsp;</b>" . $row['howused'] .
									"<br /><b>&nbsp; Price: &nbsp;</b>" . $row['price'].
									"<br /><b>&nbsp; Description: &nbsp;</b>" . $row['description'] .
									"<br /><b>&nbsp; Category: &nbsp;</b>" . $row['category'] .
									"<b>&nbsp; Email: &nbsp;</b>" . $row['email_ad'] .
									"<b>&nbsp; Image: &nbsp;</b>" . $row['image'] . "<br>" .


		"</div> <hr />";


    }

?>

</body>
</html>
