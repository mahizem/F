<?php

include("connection.php");
if(isset($_POST['submit']))
{
$name = $_POST['cname'];
$username = $_POST['cuname'];
$pword = $_POST['copsw'];
$cpsw = $_POST['cpsw'];
$banks = $_POST['cbank'];
$acc = $_POST['caccount'];
$address = $_POST['caddress'];
$pnumber = $_POST['cpnumber'];
$email = $_POST['cemail'];


$sql = "select * from csignup where cuname = '$username'";
$res= mysqli_query($conn ,$sql);
$count_user = mysqli_num_rows($res);

$sql = "select * from csignup where cemail = '$email'";
$res = mysqli_query($conn,$sql);
$count_email = mysqli_num_rows($res);

if ($count_user == 0 & $count_email == 0  )
{
if($pword==$cpsw){

    $hash=password_hash($pword,PASSWORD_DEFAULT);
    $sql = "INSERT INTO csignup(cname,cuname,copsw,cbank,caccount,caddress,cpnumber,cemail) 
    VALUES('$name','$username','$hash','$banks','$acc','$address','$pnumber','$email')";
   $res = mysqli_query($conn,$sql);
$sql = "INSERT INTO clogin(cuname,copsw) 
    VALUES('$username','$pword')";
    $res = mysqli_query($conn,$sql);

   if($res){
    header("Location : login.php");
 
   }
}

}
else
{
    if($count_user > 0 || $count_email > 0){
   
        echo "<script language='javascript'>" ;
        echo "alert('username or email already exists')";
       echo "</script>";
       die();
    }
mysqli_close($conn);
}
}
?>