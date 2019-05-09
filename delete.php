<?php
    include 'dbh.php';


    $sql="DELETE FROM images WHERE id='$_GET[id]'";
    //if there is an error code stops here
    if (mysqli_query($conn, $sql)){
        header("refresh:20; url=yourlistings.php");

    }
    else{
        echo "Not deleted";
    }
    //if no error, code executes here

