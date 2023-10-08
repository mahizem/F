<?php

include("connection.php");
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
$email = $_POST['email'];
$adults = $_POST['adults'];
$child = $_POST['child'];
$rooms = $_POST['rooms'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$roomtype = $_POST['roomtype'];
$ano = $_POST['ano'];

  $sql = "INSERT INTO booknow(checkin,checkout,adult,children,rooms,roomtype,name,email,ano) 
    VALUES('$checkin','$checkout','$adults','$child','$rooms','$roomtype','$name','$email','$ano')";
   $res = mysqli_query($conn,$sql);
$sql = "INSERT INTO bookedrooms(type,number) 
    VALUES('$roomtype','$rooms')";
    $res = mysqli_query($conn,$sql);

  

mysqli_close($conn);
}
?>