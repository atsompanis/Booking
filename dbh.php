<?php


/*the database being referenced*/
$conn=mysqli_connect("localhost","root","","practical");
if(!$conn){
    echo("Connection failed");
}