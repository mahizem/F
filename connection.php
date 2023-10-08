<?php
$servername ="localhost";
$password ="";
$username ="root";
$db_name ="database1";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn -> connect_error)
{
    die("connection faild".$conn-> connect_error);
}


?>