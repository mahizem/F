<?php

include("connection.php");
if(isset($_POST['submit']))
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$username = $_POST['uname'];
$pword = $_POST['psw'];
$cpsw = $_POST['cpsw'];
$banks = $_POST['bank'];
$acc = $_POST['account'];
$address = $_POST['address'];
$pnumber = $_POST['pnumber'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['age'];

$sql = "select * from signin where uname = '$username'";
$res= mysqli_query($conn ,$sql);
$count_user = mysqli_num_rows($res);

$sql = "select * from signin where email = '$email'";
$res = mysqli_query($conn,$sql);
$count_email = mysqli_num_rows($res);

if ($count_user == 0 & $count_email == 0  )
{
if($pword==$cpsw){

    $hash=password_hash($pword,PASSWORD_DEFAULT);
    $sql = "INSERT INTO signin(fname,lname,uname,psw,bank,account,address,pnumber,email,gender,age) 
    VALUES('$fname','$lname','$username','$hash','$banks','$acc','$address','$pnumber','$email','$gender','$age')";
   $res = mysqli_query($conn,$sql);
$sql = "INSERT INTO login(uname,pword) 
    VALUES('$username','$pword')";
    $res = mysqli_query($conn,$sql);

   if($res){

    header('location:login.php');
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

}
mysqli_close($conn);
}



?>